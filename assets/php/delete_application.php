<?php
require_once("connect.php");

$sql = 'DELETE FROM applications WHERE id=?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$_REQUEST['id']]);

header("Location: ../../admin/index.php");