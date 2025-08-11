import os

def is_binary_string(bytes_data):
    text_characters = bytearray({7,8,9,10,12,13,27} | set(range(0x20, 0x100)))
    return bool(bytes_data.translate(None, text_characters))

for file in os.listdir("data"):
    path = os.path.join("data", file)
    if file.endswith(".txt"):
        try:
            with open(path, "rb") as f:
                data = f.read()
                if is_binary_string(data):
                    print(f"🗑 Removing binary masquerading as text: {file}")
                    os.remove(path)
        except Exception as e:
            print(f"⚠️ Could not read {file}: {e}")
            os.remove(path)
