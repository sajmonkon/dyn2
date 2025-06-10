<?php
require_once 'db.php';

// Větvení 3: kontrola POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mood = $_POST['mood'];
    $note = $_POST['note'];

    // Cyklus 2: validace
    $errors = [];
    foreach (['mood', 'note'] as $field) {
        if (empty($_POST[$field])) {
            $errors[] = "Pole $field je povinné.";
        }
    }

    // Pole 1, 2, 3: $_POST, $errors, pole názvů polí
    if (count($errors) == 0) {
        insertMood($mood, $note);
    }
}
header("Location: index.php");
exit;
?>