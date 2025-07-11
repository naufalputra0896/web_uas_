<?php
require_once __DIR__ . '/config/database.php';

$ip = $_SERVER['REMOTE_ADDR'];
$userAgent = $_SERVER['HTTP_USER_AGENT'];

$stmt = $pdo->prepare("INSERT INTO visitors (ip_address, user_agent) VALUES (?, ?)");
$stmt->execute([$ip, $userAgent]);