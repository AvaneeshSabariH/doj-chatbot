import os
from dotenv import load_dotenv
from flask import Flask, request, jsonify, render_template
from langchain_google_genai import ChatGoogleGenerativeAI, GoogleGenerativeAIEmbeddings
from langchain_community.vectorstores import Chroma
from langchain.prompts import PromptTemplate
from langchain.chains.retrieval import create_retrieval_chain
from langchain.chains.combine_documents import create_stuff_documents_chain

# --- INITIALIZATION ---
print("⏳ Initializing Flask app and RAG chain...")
load_dotenv()
app = Flask(__name__)

# --- RAG CHAIN SETUP (runs once on startup) ---
try:
    llm = ChatGoogleGenerativeAI(model="gemini-1.5-flash", temperature=0.3)
    embeddings = GoogleGenerativeAIEmbeddings(model="models/embedding-001")
    vectorstore = Chroma(persist_directory="./chroma_db", embedding_function=embeddings)
    
    prompt = PromptTemplate(
        template="""You are a helpful and friendly assistant for the Department of Justice, India.
Your main goal is to answer the user's question accurately using the provided context.

Follow these rules:
1. First, try to find a direct answer in the context.
2. If the context does not contain a direct answer, do not simply say 'I don't know'.
3. Instead, first state what specific information is missing (e.g., "The context does not provide the exact number of...").
4. Then, provide the most relevant, related information that IS available in the context (e.g., "However, it does mention that...").
5. If the context is completely irrelevant to the question, then state that you cannot answer from the provided documents.
6. Base your entire response only on the facts given in the context.

Context:
{context}

Question:
{input}

Helpful Answer:
""",
        input_variables=["context", "input"],
    )
    
    document_chain = create_stuff_documents_chain(llm, prompt)
    retriever = vectorstore.as_retriever()
    retrieval_chain = create_retrieval_chain(retriever, document_chain)
    print("✅ RAG chain is ready.")
except Exception as e:
    print(f"❌ Error during RAG chain initialization: {e}")
    retrieval_chain = None

# --- FLASK ROUTES ---
@app.route("/")
def index():
    """Serves the main HTML page for the chatbot."""
    # This requires an 'index.html' file in a 'templates' folder.
    return render_template('index.html')

@app.route("/api/chat", methods=["POST"])
def chat():
    """The main chat API endpoint."""
    if not retrieval_chain:
        return jsonify({"error": "RAG chain is not initialized."}), 500
        
    data = request.get_json()
    if not data or "question" not in data:
        return jsonify({"error": "Missing 'question' in request body"}), 400

    user_question = data["question"]
    
    try:
        response = retrieval_chain.invoke({"input": user_question})
        return jsonify({"answer": response["answer"]})
    except Exception as e:
        print(f"❌ Error invoking RAG chain: {e}")
        return jsonify({"error": "Failed to process the request."}), 500

if __name__ == '__main__':
    app.run(debug=True, port=5000)