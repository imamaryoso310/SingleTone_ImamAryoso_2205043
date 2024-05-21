<?php

class Product {
    private PDO $db;

    public function __construct() {
        $this->db = Database::getInstance();
    }

    public function tambahProduk($nama, $harga, $stok) {
        $stmt = $this->db->prepare("INSERT INTO produk (nama, harga, stok) VALUES (?, ?, ?)");
        $stmt->execute([$nama, $harga, $stok]);
        echo "Data produk berhasil ditambahkan.\n";
    }

    public function hapusProduk($id) {
        $stmt = $this->db->prepare("DELETE FROM produk WHERE id = ?");
        $stmt->execute([$id]);
        echo "Data produk dengan ID $id berhasil dihapus.\n";
    }

    public function getAllProducts() {
        $stmt = $this->db->query("SELECT * FROM produk");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>
