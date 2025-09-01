# AI-Powered Conversational Assistant for the Department of Justice, India

An intelligent chatbot built to provide citizens with easy, conversational access to information about the Indian Department of Justice (DoJ). This project uses a Retrieval-Augmented Generation (RAG) architecture with the Google Gemini API to ensure factual, context-aware, and helpful responses.

## Overview

This project was developed to address the Smart India Hackathon (SIH) problem statement requiring a virtual assistant for the Department of Justice website. The chatbot can answer a wide range of questions on the DoJ's functions, schemes, judicial procedures, and more, by drawing knowledge from official government sources.

## Features

-   **Conversational AI:** Understands and responds to user questions in natural language.
-   **RAG Architecture:** Ensures answers are grounded in factual documents, preventing AI "hallucination."
-   **Automated Data Pipeline:** A full pipeline (`doj_pipeline.py`) that can crawl, download, extract text, and build a vector knowledge base from multiple sources (HTML, PDF, DOCX).
-   **Web Interface:** A clean, modern, and user-friendly chat interface built with Flask and JavaScript.
-   **Curated Knowledge Base:** The chatbot's knowledge is built from a curated set of official DoJ web pages for high accuracy.

## Technology Stack

-   **Backend:** Python, Flask
-   **AI & NLP:** LangChain, Google Gemini 1.5 Flash
-   **Vector Database:** ChromaDB
-   **Data Ingestion:** Requests, BeautifulSoup4, PyPDF2
-   **Frontend:** HTML, CSS, JavaScript
-   **Environment:** `uv`

## Setup and Installation

Follow these steps to set up and run the project locally.

**1. Clone the Repository**
```bash
git clone [https://github.com/AvaneeshSabariH/doj-chatbot.git](https://github.com/AvaneeshSabariH/doj-chatbot.git)
cd doj-chatbot
```

**2. Create and Activate Virtual Environment (using uv)**

```bash
# Create the environment
uv venv

# Activate the environment
# On Windows (PowerShell)
.venv\Scripts\Activate.ps1
# On macOS/Linux
source .venv/bin/activate
```

**3. Install Dependencies**

```bash
uv pip sync requirements.txt
```

**4. Set Up Environment Variables**

Create a file named .env in the root of the project folder and add your Google API key:
```bash
GOOGLE_API_KEY="YOUR_API_KEY_HERE"
```

**Running the Application**
There are two main steps to run the project: building the knowledge base and launching the web application.

**Step 1: Build the Knowledge Base**

Run the main pipeline script. This will use the curated links to scrape data, clean it, and build the ChromaDB vector store.
```bash
python doj_pipeline.py --skip-download
```
(This uses the --skip-download flag to rely on the existing curated data, but you can run it without the flag to trigger a full re-crawl.)

**Step 2: Launch the Web Application**

Start the Flask server using the main.py file.

```bash
flask --app main run
```
The application will be running at http://127.0.0.1:5000. Open this URL in your web browser to start chatting with the AI assistant.

**Future Enhancements**
Handle Live Data: Integrate LangChain Agents and Tools to fetch real-time data (e.g., judge vacancies) from specific government portals.

Modularize Pipeline: Break down doj_pipeline.py into separate modules for crawling, text extraction, and vector store creation for better maintainability.

Streaming Responses: Implement response streaming on the frontend for a more interactive, "typing" effect.

Cloud Deployment: Deploy the application to a cloud service

