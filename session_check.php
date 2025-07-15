<?php

session_start();
header('Content-Type: application/json');
if (isset($_SESSION['user_id'])) {
    require_once(__DIR__ . '/db.php');
    $stmt = $conn->prepare("SELECT username FROM utenti WHERE id = ?");
    $stmt->bind_param("i", $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    echo json_encode(['logged_in' => true, 'username' => $user['username']]);
} else {
    echo json_encode(['logged_in' => false]);
}
?>