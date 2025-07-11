<?php
// src/autoload.php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config/database.php';

// Tracking pengunjung setiap kali file ini di-include
$ip = $_SERVER['REMOTE_ADDR'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';

if ($ip && $userAgent) {
    $stmt = $pdo->prepare("INSERT INTO visitors (ip_address, user_agent) VALUES (?, ?)");
    $stmt->execute([$ip, $userAgent]);
}
