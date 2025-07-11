<?php
header('Content-Type: application/json');

// Contoh data user (sebaiknya ambil dari database)
$users = [
    'admin' => 'admin123'
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $username = $input['username'] ?? '';
    $password = $input['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        echo json_encode(['success' => true, 'message' => 'Login berhasil']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Username atau password salah']);
    }
    exit;
}

echo json_encode(['success' => false, 'message' => 'Invalid request']);
