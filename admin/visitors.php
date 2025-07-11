<?php
require_once __DIR__ . '/../vendor/src/config/database.php';
// filepath: c:\xampp\htdocs\project web klmpk\admin\visitors.php
$stmt = $pdo->query("SELECT * FROM visitors ORDER BY accessed_at DESC");
$visitors = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pengunjung</title>
</head>

<body>
    <h2>Daftar Pengunjung Website</h2>
    <table border="1" cellpadding="5">
        <tr>
            <th>No</th>
            <th>IP Address</th>
            <th>User Agent</th>
            <th>Waktu Akses</th>
        </tr>
        <?php foreach ($visitors as $i => $v): ?>
            <tr>
                <td><?= $i + 1 ?></td>
                <td><?= htmlspecialchars($v['ip_address']) ?></td>
                <td><?= htmlspecialchars($v['user_agent']) ?></td>
                <td><?= $v['accessed_at'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>