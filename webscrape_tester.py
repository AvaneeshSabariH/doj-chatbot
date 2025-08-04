import requests
from bs4 import BeautifulSoup

def scrape_doj_about_page():
    """
    Scrapes the text content from the 'About Department' page by targeting the specific paragraph class.
    """
    url = "https://doj.gov.in/about-department/"
    
    headers = {
        'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/91.0.4472.124 Safari/537.36'
    }
    
    print(f"⏳ Attempting to scrape URL: {url}")

    try:
        response = requests.get(url, headers=headers)
        response.raise_for_status()
        print("✅ Successfully fetched the webpage.")

        soup = BeautifulSoup(response.content, 'html.parser')

        # CORRECTED SELECTOR: Targeting the exact <p> tag based on the HTML you provided.
        # The class string must match exactly: "text-justify heading4"
        content_paragraph = soup.find('p', class_='text-justify heading4')

        if not content_paragraph:
            print("❌ Could not find the paragraph with class='text-justify heading4'.")
            return None

        # Extract the text from the found paragraph
        scraped_text = content_paragraph.get_text(strip=True)
        
        return scraped_text

    except requests.exceptions.RequestException as e:
        print(f"❌ An error occurred during the HTTP request: {e}")
        return None
    except Exception as e:
        print(f"❌ An unexpected error occurred: {e}")
        return None

if __name__ == "__main__":
    scraped_data = scrape_doj_about_page()
    
    if scraped_data:
        print("\n--- SCRAPED DATA ---")
        print(scraped_data)
        print("\n--- END OF DATA ---")
        print("\n✅ This text can now be saved to a file and used to build your vector database.")