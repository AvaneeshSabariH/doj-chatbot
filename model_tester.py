import os
import google.generativeai as genai
from dotenv import load_dotenv

# Load environment variables from .env file
load_dotenv()

# --- 1. SET UP THE MODEL ---
# Configure the Gemini API with the key from the .env file
try:
    genai.configure(api_key=os.environ["GOOGLE_API_KEY"])
    model = genai.GenerativeModel('gemini-1.5-flash')
    print("Model configured successfully!")
except Exception as e:
    print(f"Error configuring the model: {e}")
    exit()

# --- 2. CREATE A SIMPLE KNOWLEDGE BASE ---
# In a real app, this data would come from a database or API call.
# For now, we'll keep it in a simple string.
knowledge_base = """
# Department of Justice (DoJ) Information

## Divisions:
- The Department of Justice has four divisions: Appointments Division, Judicial Division, Access to Justice Division, and Administration & Grivances Division.

## eFiling Procedure:
1. Register on the e-filing portal.
2. Prepare your case documents in PDF format.
3. Upload the documents and pay the necessary court fees online.
4. Receive confirmation and a filing number.

## Availing Tele-Law Services:
- Citizens can access legal advice from lawyers through video conferencing.
- To avail this service, download the Tele-Law mobile app or visit a Common Service Centre (CSC).
- A paralegal volunteer at the CSC will connect you with a lawyer on the panel.
"""

# --- 3. CREATE THE CORE LOGIC ---
def get_chatbot_response(user_question):
    """
    Generates a response to a user's question based on the knowledge base.
    This is a simple implementation of Retrieval-Augmented Generation (RAG).
    """
    # We create a specific prompt that tells the model how to behave.
    prompt = f"""
    You are a helpful assistant for the Department of Justice, India.
    Answer the user's question based *only* on the information provided below.
    If the information is not in the knowledge base, say "I do not have information on that topic."

    **Knowledge Base:**
    {knowledge_base}

    **User's Question:**
    {user_question}

    **Answer:**
    """
    
    try:
        # Generate content using the model
        response = model.generate_content(prompt)
        return response.text.strip()
    except Exception as e:
        return f"An error occurred while generating a response: {e}"

# --- 4. RUN THE TESTER ---
# This loop lets you ask questions continuously in your terminal.
if __name__ == "__main__":
    print("\n--- DoJ Chatbot Model Tester ---")
    print("Type 'exit' to quit.")
    
    while True:
        question = input("\nAsk your question: ")
        if question.lower() == 'exit':
            break
        
        answer = get_chatbot_response(question)
        print(f"\nChatbot: {answer}")