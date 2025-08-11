# scrape_all.py
import os
import requests
from bs4 import BeautifulSoup
from urllib.parse import urlparse
import re

# Create /data directory if it doesn't exist
os.makedirs("data", exist_ok=True)

# List of DOJ URLs to scrape
DOJ_URLS = [
    "https://doj.gov.in/about-department/",
    "https://doj.gov.in/schemes/",
    "https://doj.gov.in/schemes/fast-track-special-courts/",
    "https://doj.gov.in/schemes/tele-law-services/",
    "https://doj.gov.in/e-filing-procedure/",
    "https://doj.gov.in/e-courts-services/",
    "https://doj.gov.in/national-judicial-data-grid/"
]

HEADERS = {
    "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64)"
}

def slugify(text):
    """Convert page title or URL path to a safe filename."""
    return re.sub(r'[^a-z0-9]+', '-', text.lower()).strip('-')

def extract_main_text(soup):
    """
    Attempt to extract main content paragraphs.
    Adjust the selectors if the site structure changes.
    """
    # Try first: all <p> tags inside main content areas
    main_content = soup.find("div", {"class": "content-area"})
    if not main_content:
        main_content = soup  # fallback: search entire page

    paragraphs = main_content.find_all("p")
    text = "\n".join(p.get_text(strip=True) for p in paragraphs if p.get_text(strip=True))
    return text.strip()

def scrape_page(url):
    """Scrape a single DOJ page and save as .txt."""
    try:
        print(f"⏳ Scraping: {url}")
        response = requests.get(url, headers=HEADERS, timeout=15)
        response.raise_for_status()

        soup = BeautifulSoup(response.content, "html.parser")

        # Try to get title for filename
        title_tag = soup.find("h1")
        if title_tag and title_tag.get_text(strip=True):
            title = title_tag.get_text(strip=True)
        else:
            # fallback: use URL path
            title = urlparse(url).path.strip("/").replace("/", "_") or "index"

        filename = slugify(title) + ".txt"
        filepath = os.path.join("data", filename)

        content = extract_main_text(soup)
        if not content:
            print(f"⚠️ No main content found for {url}")
            return

        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)

        print(f"✅ Saved: {filepath} ({len(content.split())} words)")

    except Exception as e:
        print(f"❌ Failed to scrape {url}: {e}")

def main():
    for url in DOJ_URLS:
        scrape_page(url)

if __name__ == "__main__":
    main()
