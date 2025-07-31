import chromadb

# --- 1. SET UP THE DATABASE CLIENT ---
# This creates a "persistent" client that saves data to a folder named "doj_db"
# If the folder doesn't exist, it will be created automatically.
client = chromadb.PersistentClient(path="doj_db")

# --- 2. CREATE OR GET A COLLECTION ---
# A collection is where you'll store your data. Think of it like a table in a SQL database.
# Chroma automatically uses a default embedding model, so we don't need to configure one yet.
collection = client.get_or_create_collection(name="doj_documents")
print("✅ Database client and collection are ready.")

# --- 3. ADD DOCUMENTS TO THE COLLECTION ---
# We'll add some sample documents. Each document needs a unique ID.
# This is the "indexing" part of RAG. You only need to do this once for each document.
print("\n⏳ Adding documents to the collection...")
collection.add(
    documents=[
        "The Tele-Law service provides legal advice to citizens through video conferencing via Common Service Centres.",
        "eFiling allows for the electronic filing of case documents in courts across the country through the official web portal.",
        "Fast Track Special Courts are set up for the speedy trial and disposal of sensitive cases, particularly those related to rape and the POCSO Act."
    ],
    metadatas=[
        {"source": "Tele-Law Scheme"},
        {"source": "eCourts Project"},
        {"source": "FTSC Initiative"}
    ],
    ids=["doc1", "doc2", "doc3"] # Each ID must be unique
)
print("✅ 3 documents added successfully.")

# --- 4. QUERY THE COLLECTION ---
# This is the "retrieval" part of RAG. We'll ask a question and find the most relevant document.
user_question = "How can I get legal advice?"
print(f"\n💬 Querying the database with the question: '{user_question}'")

# We ask for the single most relevant result (n_results=1)
results = collection.query(
    query_texts=[user_question],
    n_results=1
)

print("\n✅ Query successful! Here is the most relevant document found:")
# The result is a dictionary containing the documents, distances, metadatas, etc.
retrieved_document = results['documents'][0][0]
source = results['metadatas'][0][0]['source']

print(f"   - Document: '{retrieved_document}'")
print(f"   - Source: {source}")