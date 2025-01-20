<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama_barang"];
    $kategori = $_POST["kategori"];
    $harga_barang = $_POST["harga_barang"];
    $stok = $_POST["stok"];

    $sql = "INSERT INTO barang (NamaBarang, Harga, Stok, Kategori)
            VALUES ('$nama_barang', '$harga_barang', '$stok', '$kategori')";

    $mysqli->query($sql);

    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <h2 style="font-family: Arial, sans-serif; margin-left: 20px;">Tambah Data Barang</h2>
    <form action="" method="post" style="max-width: 300px; margin-left: 20px;">
        
        <label>Nama Barang:</label>
        <input type="text" name="nama_barang" style="width: 100%; padding: 5px; margin-bottom: 10px;">
        
        <label>Kategori:</label>
        <input type="text" name="kategori" style="width: 100%; padding: 5px; margin-bottom: 10px;">
        
        <label>Harga Barang:</label>
        <input type="number" name="harga_barang" style="width: 100%; padding: 5px; margin-bottom: 10px;">
        
        <label>Stok:</label>
        <input type="text" name="stok" style="width: 100%; padding: 5px; margin-bottom: 10px;">
        
        <button type="submit" style="width: 40%; padding: 10px; cursor: pointer;">Simpan</button>
    </form>
</body>
</html>
