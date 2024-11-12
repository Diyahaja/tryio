<?php
$host = "localhost";
$db_name = "db_sewatv";
$username = "root";
$password = "";

try {
    $koneksi = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);

    // Set the PDO error mode to exception
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];
    $modeltv = $_POST['model-tv'];
    $durasisewa = $_POST['durasi-sewa'];
    $metodepembayaran = $_POST['metode-pembayaran'];
    $tanggalpemesanan = $_POST['tanggal-pemesanan'];

    $query = "INSERT INTO pesan (nama, alamat, nomor, modeltv, durasisewa, metodepembayaran, tanggalpemesanan) VALUES ('$nama', '$alamat', '$nomor', '$modeltv', '$durasisewa', '$metodepembayaran', '$tanggalpemesanan')";

    $koneksi->exec($query);

    echo "Data berhasil disimpan.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

$koneksi = null; // Menutup koneksi
?>
