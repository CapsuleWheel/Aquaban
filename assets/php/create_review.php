<?php
require_once("connect.php");

$sql = "INSERT INTO reviews (name, text, status) VALUES (?, ?, 0)";
$stmt = $pdo->prepare($sql);
var_dump($stmt->execute([$_POST['name'], $_POST['review']]));

header("Location: ../../index.php#reviews");