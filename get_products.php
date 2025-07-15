<?php

require_once 'db.php';

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'mac';

$stmt = $conn->prepare("SELECT * FROM prodotti WHERE categoria = ?");
$stmt->bind_param("s", $categoria);
$stmt->execute();
$result = $stmt->get_result();

$prodotti = [];
while ($row = $result->fetch_assoc()) {
    $row['specs'] = json_decode($row['specs']);
    $prodotti[] = $row;
}
header('Content-Type: application/json');
echo json_encode($prodotti);
?>