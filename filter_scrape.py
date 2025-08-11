# filter_and_scrape.py
import os
import requests
from bs4 import BeautifulSoup

INPUT_FILE = "doj_links.txt"
FILTERED_FILE = "filtered_links.txt"
PDF_FILE = "pdf_links.txt"
DATA_DIR = "data"

HEADERS = {"User-Agent": "Mozilla/5.0"}
ALLOWED_DOMAINS = [
    "doj.gov.in",
    "dashboard.doj.gov.in",
    "scdg.sci.gov.in"
]
EXCLUDE_KEYWORDS = [
    "login", "signin", "official", "admin", "register"
]
SKIP_EXTENSIONS = [
    ".jpg", ".jpeg", ".png", ".gif", ".svg",
    ".doc", ".docx", ".xls", ".xlsx", ".zip", ".rar"
]

def is_allowed(url):
    return any(url.startswith(f"https://{domain}") for domain in ALLOWED_DOMAINS)

def is_excluded(url):
    if any(ext in url.lower() for ext in SKIP_EXTENSIONS):
        return True
    if any(kw in url.lower() for kw in EXCLUDE_KEYWORDS):
        return True
    return False

def filter_links():
    html_links = []
    pdf_links = []
    with open(INPUT_FILE, "r", encoding="utf-8") as f:
        for line in f:
            url = line.strip()
            if not url or not is_allowed(url) or url.startswith("javascript:"):
                continue
            if is_excluded(url):
                continue
            if url.lower().endswith(".pdf"):
                pdf_links.append(url)
            else:
                html_links.append(url)

    with open(FILTERED_FILE, "w", encoding="utf-8") as f:
        f.write("\n".join(sorted(set(html_links))))

    with open(PDF_FILE, "w", encoding="utf-8") as f:
        f.write("\n".join(sorted(set(pdf_links))))

    print(f"✅ Filter complete: {len(html_links)} HTML links, {len(pdf_links)} PDF links")

def scrape_pages():
    os.makedirs(DATA_DIR, exist_ok=True)
    with open(FILTERED_FILE, "r", encoding="utf-8") as f:
        urls = [line.strip() for line in f if line.strip()]

    for i, url in enumerate(urls, start=1):
        print(f"[{i}/{len(urls)}] Scraping: {url}")
        try:
            resp = requests.get(url, headers=HEADERS, timeout=15)
            resp.raise_for_status()
            soup = BeautifulSoup(resp.content, "html.parser")

            paragraphs = soup.find_all("p")
            content = "\n".join(p.get_text(strip=True) for p in paragraphs if p.get_text(strip=True))
            if not content:
                print("⚠️ No content found, skipping")
                continue

            # filename from URL slug
            filename = url.replace("https://", "").replace("/", "_") + ".txt"
            filepath = os.path.join(DATA_DIR, filename)
            with open(filepath, "w", encoding="utf-8") as out:
                out.write(content)

        except Exception as e:
            print(f"❌ Failed to scrape {url}: {e}")

if __name__ == "__main__":
    filter_links()
    scrape_pages()
