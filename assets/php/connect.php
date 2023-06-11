<?php
session_start();

try {
    $pdo = new PDO('mysql:host=localhost;dbname=aquaban;charset=utf8', 'root', '');
}
catch (PDOException $e) {
    echo $e->getMessage();
}