<?php
require_once 'config.php';

// Funkce 1: Vložení nálady do DB
function insertMood($mood, $note) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO moods (mood, note) VALUES (?, ?)");
    $stmt->bind_param("ss", $mood, $note);
    $stmt->execute();
}

// Funkce 2: Získání všech záznamů z DB
function getMoods() {
    global $conn;
    $result = $conn->query("SELECT * FROM moods ORDER BY created_at DESC");
    return $result->fetch_all(MYSQLI_ASSOC);
}

// Funkce 3: Vrátí barvu podle nálady
function getMoodColor($mood) {
    // Větvení 2
    if ($mood == "Happy") return "#a3f7bf";
    elseif ($mood == "Sad") return "#f7a3a3";
    elseif ($mood == "Neutral") return "#f7f1a3";
    else return "#d3d3d3";
}
?>