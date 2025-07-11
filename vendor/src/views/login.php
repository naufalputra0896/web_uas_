<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    header('Location: index.php');
    exit;
}
$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    // Ganti dengan validasi ke database jika perlu
    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = 'Username atau password salah!';
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login Joupit</title>
    <link href="https://cdn.tailwindcss.com" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">
    <form method="POST" class="bg-white p-6 rounded-lg shadow-md w-80">
        <h2 class="text-2xl font-bold text-center mb-4 text-blue-800">Login</h2>
        <?php if ($error): ?>
            <div class="mb-2 text-red-600 text-center"><?= $error ?></div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Username" required class="w-full mb-3 px-3 py-2 border rounded" />
        <input type="password" name="password" placeholder="Password" required class="w-full mb-3 px-3 py-2 border rounded" />
        <button type="submit" class="w-full bg-blue-800 text-white py-2 rounded hover:bg-blue-600">Login</button>
    </form>
</body>

</html>