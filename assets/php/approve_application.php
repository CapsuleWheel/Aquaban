<?php
require_once("connect.php");

$sql = 'UPDATE applications SET status=1 WHERE id=?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$_REQUEST['id']]);

header("Location: ../../admin/index.php");