lottie.loadAnimation({
  container: document.getElementById('aiLottieCharacter'),
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: '../assets/animations/ai-character.json'
});

function toggleAIChat() {
    const panel = document.getElementById("aiChatPanel");

    if (panel.style.display === "flex") {
        panel.style.display = "none";
    } else {
        panel.style.display = "flex";
    }
}


// function sendMessage() {
//     const input = document.getElementById("aiInput");
//     const message = input.value.trim();
//     if (!message) return;

//     const messagesDiv = document.getElementById("aiMessages");

//     // USER MESSAGE
//     const userMsg = document.createElement("div");
//     userMsg.className = "message user";
//     userMsg.textContent = message;
//     messagesDiv.appendChild(userMsg);

//     messagesDiv.scrollTop = messagesDiv.scrollHeight;

//     input.value = "";

//     fetch("ai-chat.php", {
//         method: "POST",
//         headers: { "Content-Type": "application/x-www-form-urlencoded" },
//         body: "message=" + encodeURIComponent(message)
//     })
//     .then(res => res.json())
//     .then(data => {
//         const reply = data.choices[0].message.content;

//         const aiMsg = document.createElement("div");
//         aiMsg.className = "message ai";
//         aiMsg.textContent = reply;
//         messagesDiv.appendChild(aiMsg);

//         messagesDiv.scrollTop = messagesDiv.scrollHeight;
//     });
// }

function sendMessage() {
    const input = document.getElementById("aiInput");
    const message = input.value.trim();
    if (!message) return;

    const messagesDiv = document.getElementById("aiMessages");

    // USER MESSAGE
    const userMsg = document.createElement("div");
    userMsg.className = "message user";
    userMsg.textContent = message;
    messagesDiv.appendChild(userMsg);

    input.value = "";
    messagesDiv.scrollTop = messagesDiv.scrollHeight;

    // Show typing indicator
    const typing = document.createElement("div");
    typing.className = "message ai";
    typing.textContent = "Typing...";
    messagesDiv.appendChild(typing);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;

    fetch("ai-chat.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: "message=" + encodeURIComponent(message)
    })
    .then(res => res.json())
    .then(data => {
        typing.remove();

        const aiMsg = document.createElement("div");
        aiMsg.className = "message ai";
        aiMsg.textContent = data.reply;
        messagesDiv.appendChild(aiMsg);

        messagesDiv.scrollTop = messagesDiv.scrollHeight;
    })
    .catch(err => {
        typing.remove();

        const errorMsg = document.createElement("div");
        errorMsg.className = "message ai";
        errorMsg.textContent = "⚠ Error connecting to AI.";
        messagesDiv.appendChild(errorMsg);
    });
}
