<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!-- Mulai HTML website Anda di bawah ini -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Joupit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Tambahkan CSS/JS lain jika perlu -->
</head>

<body>
    <!-- Tambahkan tombol logout -->
    <div class="p-4 text-right">
        <a href="logout.php" class="bg-red-500 text-white px-4 py-2 rounded">Logout</a>
    </div>
    <!-- Copy seluruh isi website dari project web lama.html ke sini -->
    <!-- ... -->
</body>
</html>