-- Database: joutpit

CREATE DATABASE IF NOT EXISTS joutpit;
USE joutpit;

-- Tabel users (admin & user login)
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100),
    role ENUM('admin','user') DEFAULT 'user'
);

-- Tabel products
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    kategori VARCHAR(50),
    deskripsi TEXT,
    gambar VARCHAR(255),
    harga DECIMAL(12,2) DEFAULT 0.00,
    stok INT DEFAULT 0
);

-- Tabel services (Shopee, Instagram, WhatsApp, dll)
CREATE TABLE IF NOT EXISTS services (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50) NOT NULL,
    link VARCHAR(255) NOT NULL,
    icon VARCHAR(255)
);

-- Tabel orders
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    product_id INT,
    jumlah INT DEFAULT 1,
    total DECIMAL(12,2) DEFAULT 0.00,
    tanggal DATETIME DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending','paid','shipped','done','cancel') DEFAULT 'pending',
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Contoh data admin
INSERT INTO users (username, password, email, role) VALUES
('admin', MD5('admin'), 'admin@joutpit.com', 'admin');

-- Contoh data produk
INSERT INTO products (nama, kategori, deskripsi, gambar, harga, stok) VALUES
('Adidas Samba Series', 'Sepatu', 'Sepatu Adidas klasik untuk segala usia.', 'img/foto1.jpg', 850000, 10),
('Company Series Jaket', 'Jaket', 'Jaket C.P. Company original.', 'img/jaket1.jpg', 1200000, 5),
('Polo Fred Perry', 'Polo', 'Polo Fred Perry original.', 'img/polo1.jpg', 650000, 8);

-- Contoh data layanan
INSERT INTO services (nama, link, icon) VALUES
('Shopee', 'https://shopee.co.id/arkosecond.id', 'img/logo shope.png'),
('Instagram', 'https://www.instagram.com/putraanaufallll_', 'img/logo ig.png'),
('WhatsApp', 'https://wa.me/+6285691735045', 'img/logo wa.png');