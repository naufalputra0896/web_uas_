<?php
class Product
{
    private $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function all() {
        $stmt = $this->pdo->query("SELECT * FROM products");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM products WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($nama, $kategori, $deskripsi, $gambar, $harga, $stok) {
        $stmt = $this->pdo->prepare("INSERT INTO products (nama, kategori, deskripsi, gambar, harga, stok) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([$nama, $kategori, $deskripsi, $gambar, $harga, $stok]);
    }
}