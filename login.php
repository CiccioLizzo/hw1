<?php
session_start();
require_once(__DIR__ . '/db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if (!$username || !$password) {
        echo "Username e password sono obbligatori.";
        exit;
    }

    


    $stmt = $conn->prepare("SELECT id, password FROM utenti WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            header("Location: ../mhw3.php"); 
            exit;
        } else {
            echo "Password errata.";
        }
    } else {
        echo "Utente non trovato.";
    }
    $stmt->close();
} else {
    echo "Metodo non supportato.";
}
?>