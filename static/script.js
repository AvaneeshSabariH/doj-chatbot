document.addEventListener('DOMContentLoaded', () => {
    const chatWindow = document.getElementById('chat-window');
    const chatForm = document.getElementById('chat-form');
    const userInput = document.getElementById('user-input');
    const sendBtn = document.getElementById('send-btn');

    // Function to auto-adjust textarea height
    userInput.addEventListener('input', () => {
        userInput.style.height = 'auto';
        userInput.style.height = (userInput.scrollHeight) + 'px';
    });

    const appendMessage = (sender, message) => {
        const messageElement = document.createElement('div');
        messageElement.classList.add('chat-message', sender);
        
        const paragraph = document.createElement('p');
        // Sanitize message to prevent HTML injection, then replace newlines with <br>
        const sanitizedMessage = message.replace(/</g, "&lt;").replace(/>/g, "&gt;");
        paragraph.innerHTML = sanitizedMessage.replace(/\n/g, '<br>');
        
        messageElement.appendChild(paragraph);
        chatWindow.appendChild(messageElement);
        chatWindow.scrollTop = chatWindow.scrollHeight;
        return messageElement;
    };

    const handleFormSubmit = async (event) => {
        event.preventDefault();
        const question = userInput.value.trim();
        if (!question) return;

        appendMessage('user', question);
        userInput.value = '';
        userInput.style.height = 'auto'; // Reset height after sending

        const loadingMessage = appendMessage('bot', 'Thinking');
        loadingMessage.classList.add('loading-dots');

        try {
            const response = await fetch('/api/chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ question: question }),
            });

            chatWindow.removeChild(loadingMessage);

            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const data = await response.json();
            appendMessage('bot', data.answer);

        } catch (error) {
            console.error('Error:', error);
            if (chatWindow.contains(loadingMessage)) {
                chatWindow.removeChild(loadingMessage);
            }
            appendMessage('bot', 'Sorry, I encountered an error. Please try again.');
        }
    };

    chatForm.addEventListener('submit', handleFormSubmit);
    
    // Allow submitting with Enter key, but new line with Shift+Enter
    userInput.addEventListener('keypress', (event) => {
        if (event.key === 'Enter' && !event.shiftKey) {
            event.preventDefault();
            handleFormSubmit(event);
        }
    });
});