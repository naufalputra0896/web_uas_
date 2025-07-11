<?php
require_once __DIR__ . '/../../../../vendor/autoload.php';
// filepath: c:\xampp\htdocs\project web klmpk\vendor\src\config\database.php
use Dotenv\Dotenv;

// Pastikan .env ada di root project (bukan di src)
$dotenv = Dotenv::createImmutable(dirname(__DIR__, 3));
$dotenv->load();

$host = $_ENV['DB_HOST'];
$db   = $_ENV['DB_DATABASE'];
$user = $_ENV['DB_USERNAME'];
$pass = $_ENV['DB_PASSWORD'];

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}
