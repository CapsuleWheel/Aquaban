<?php
require_once("connect.php");

$sql = "INSERT INTO reviews (name, text) VALUES (?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_POST['name'], $_POST['review']]);

header("Location: ../../index.php#reviews");