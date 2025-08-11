import os
from dotenv import load_dotenv
from langchain_google_genai import ChatGoogleGenerativeAI, GoogleGenerativeAIEmbeddings
from langchain_community.document_loaders import DirectoryLoader
from langchain.text_splitter import RecursiveCharacterTextSplitter
from langchain_community.vectorstores import Chroma
from langchain.prompts import PromptTemplate
from langchain.chains.retrieval import create_retrieval_chain
from langchain.chains.combine_documents import create_stuff_documents_chain

# Load environment variables
load_dotenv()

# --- 1. LOAD DOCUMENTS ---
loader = DirectoryLoader('./data/', glob="**/*.txt")
docs = loader.load()
print(f"✅ Loaded {len(docs)} document(s).")

# --- 2. CHUNK DOCUMENTS ---
text_splitter = RecursiveCharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
splits = text_splitter.split_documents(docs)
print(f"✅ Documents split into {len(splits)} chunks.")

# --- 3. CREATE AND POPULATE VECTOR STORE ---
print("⏳ Creating vector store from documents...")
embeddings = GoogleGenerativeAIEmbeddings(model="models/embedding-001")
vectorstore = Chroma.from_documents(
    documents=splits,
    embedding=embeddings,
    persist_directory="./chroma_db"
)
print("✅ Vector store created successfully.")

# --- 4. CREATE THE RETRIEVAL CHAIN ---
llm = ChatGoogleGenerativeAI(model="gemini-1.5-flash", temperature=0.3)

prompt = PromptTemplate(
    template="""You are an assistant for the Department of Justice, India.
    Answer the user's question based only on the provided context.
    If the information is not in the context, say so.

    Context:
    {context}

    Question:
    {input}
    """,
    input_variables=["context", "input"],
)

document_chain = create_stuff_documents_chain(llm, prompt)
retriever = vectorstore.as_retriever()
retrieval_chain = create_retrieval_chain(retriever, document_chain)
print("✅ Retrieval chain created.")

# --- 5. ASK MULTIPLE QUESTIONS ---
test_questions = [
    "What are Fast Track Special Courts?",
    "What is the purpose of the Tele Law service?",
    "Explain the role of the National Judicial Data Grid.",
    "What is Nyaya Bandhu and who can use it?",
    "What are the objectives of the eCourts project?",
    "What is the Citizens’ Charter?",
    "What does the Gram Nyayalaya scheme aim to do?",
    "List some services offered under eCourt Services.",
    "What is the Memorandum of procedure of appointment of Supreme Court Judges?",
    "What is the function of the National Legal Services Authority (NALSA)?"
]

print("\n--- LangChain RAG Tester ---")
for q in test_questions:
    print(f"\nQuestion: {q}")
    try:
        response = retrieval_chain.invoke({"input": q})
        print("Answer:", response["answer"])
    except Exception as e:
        print("⚠️ Error:", e)
