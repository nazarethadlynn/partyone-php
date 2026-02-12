<?php
session_start();

header("Content-Type: application/json");

// 🔐 Put your REAL OpenAI API key here
$apiKey = "YOUR_OPENAI_API_KEY";

// Get message safely
$userMessage = trim($_POST['message'] ?? '');

if (!$userMessage) {
    echo json_encode(["error" => "Empty message"]);
    exit;
}

/*
✅ STORE CHAT HISTORY IN SESSION
This allows real conversation memory
*/
if (!isset($_SESSION['chat_history'])) {
    $_SESSION['chat_history'] = [
        [
            "role" => "system",
            "content" => "You are PartyOne AI Assistant. You help users choose party decorations, themes, budgets, packages and event ideas in India. Be friendly, short and helpful."
        ]
    ];
}

// Add user message to history
$_SESSION['chat_history'][] = [
    "role" => "user",
    "content" => $userMessage
];

// Prepare API request
$data = [
    "model" => "gpt-4o-mini",
    "messages" => $_SESSION['chat_history'],
    "temperature" => 0.7
];

$ch = curl_init("https://api.openai.com/v1/chat/completions");

curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "Authorization: Bearer " . $apiKey
    ],
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($ch);

if(curl_errno($ch)){
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

curl_close($ch);

$result = json_decode($response, true);

// Get AI reply safely
$reply = $result['choices'][0]['message']['content'] ?? "Sorry, something went wrong.";

// Add AI reply to session memory
$_SESSION['chat_history'][] = [
    "role" => "assistant",
    "content" => $reply
];

// Return ONLY the reply cleanly
echo json_encode([
    "reply" => $reply
]);
