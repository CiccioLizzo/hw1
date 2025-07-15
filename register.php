<?php

session_start();
require_once(__DIR__ . '/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';
    $password_confirm = $_POST['password_confirm'] ?? '';

    if (!$username || !$email || !$password || !$password_confirm) {
        echo "Tutti i campi sono obbligatori.";
        exit;
    }

    if ($password !== $password_confirm) {
        echo "Le password non coincidono.";
        exit;
    }

   

    $stmt = $conn->prepare("SELECT id FROM utenti WHERE username = ? OR email = ?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result && $result->num_rows > 0) {
        echo "Username o email già in uso.";
        exit;
    }
    $stmt->close();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO utenti (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $hashedPassword);

    if ($stmt->execute()) {
        $_SESSION['user_id'] = $stmt->insert_id;
        header("Location: ../index.php"); 
        exit;
    } else {
        echo "Errore nella registrazione: " . $stmt->error;
    }
    $stmt->close();
} else {
    echo "Metodo non supportato.";
}
?>