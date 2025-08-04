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

# Set up the Google API Key
if "GOOGLE_API_KEY" not in os.environ:
    os.environ["GOOGLE_API_KEY"] = "YOUR_API_KEY_HERE" # Or ensure it's in your .env file
print("✅ API Key and environment set up.")

# --- 1. LOAD DOCUMENTS ---
# Load text documents from the 'data' directory
loader = DirectoryLoader('./data/', glob="**/*.txt")
docs = loader.load()
print(f"✅ Loaded {len(docs)} document(s).")

# --- 2. CHUNK DOCUMENTS ---
# Split the documents into smaller chunks for the vector database
text_splitter = RecursiveCharacterTextSplitter(chunk_size=1000, chunk_overlap=200)
splits = text_splitter.split_documents(docs)
print(f"✅ Documents split into {len(splits)} chunks.")

# --- 3. CREATE AND POPULATE VECTOR STORE (CHROMA DB) ---
# Create embeddings using Google's model and store them in ChromaDB
# This will create a 'chroma_db' folder for persistence
print("⏳ Creating vector store from documents...")
embeddings = GoogleGenerativeAIEmbeddings(model="models/embedding-001")
vectorstore = Chroma.from_documents(documents=splits, embedding=embeddings, persist_directory="./chroma_db")
print("✅ Vector store created successfully.")

# --- 4. CREATE THE RETRIEVAL CHAIN ---
# This chain combines retrieval from the vector store with an LLM call.

# Set up the LLM
llm = ChatGoogleGenerativeAI(model="gemini-1.5-flash", temperature=0.3)

# Create a prompt template
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

# Create the document chain
document_chain = create_stuff_documents_chain(llm, prompt)

# Create the retriever from our vector store
retriever = vectorstore.as_retriever()

# Create the final retrieval chain
retrieval_chain = create_retrieval_chain(retriever, document_chain)
print("✅ Retrieval chain created.")

# --- 5. ASK QUESTIONS ---
print("\n--- LangChain RAG Tester ---")
response = retrieval_chain.invoke({"input": "What are Fast Track Courts for?"})

print("\nQuestion: What are Fast Track Courts for?")
print("Answer:", response["answer"])