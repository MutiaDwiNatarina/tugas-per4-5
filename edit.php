<?php

include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch existing data
    $query = "SELECT * FROM barang WHERE idBarang = $id";
    $result = $mysqli->query($query);
    $barang = $result->fetch_assoc();

    // Check if the item exists
    if (!$barang) {
        echo "Data not found!";
        exit();
    }
} else {
    echo "Invalid ID!";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_barang = $_POST["nama_barang"];
    $kategori = $_POST["kategori"];
    $harga_barang = $_POST["harga_barang"];
    $stok = $_POST["stok"];

    // Update the data in the database
    $sql = "UPDATE barang SET NamaBarang = '$nama_barang', Kategori = '$kategori', Harga = '$harga_barang', Stok = '$stok' WHERE idBarang = $id";

    if ($mysqli->query($sql) === TRUE) {
        header('Location: index.php'); // Redirect back to the main page
    } else {
        echo "Error updating record: " . $mysqli->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
</head>
<body>
    <h2 style="font-family: Arial, sans-serif; margin-left: 20px;">Edit Barang</h2>
    <form action="" method="post" style="margin-left: 20px;">
        <table border="1" cellpadding="8" cellspacing="0">
            <tr>
                <td><label>Nama Barang:</label></td>
                <td><input type="text" name="nama_barang" value="<?= $barang['NamaBarang'] ?>" style="width: 95%;"></td>
            </tr>
            <tr>
                <td><label>Kategori:</label></td>
                <td><input type="text" name="kategori" value="<?= $barang['Kategori'] ?>" style="width: 95%;"></td>
            </tr>
            <tr>
                <td><label>Harga Barang:</label></td>
                <td><input type="number" name="harga_barang" value="<?= $barang['Harga'] ?>" style="width: 95%;"></td>
            </tr>
            <tr>
                <td><label>Stok:</label></td>
                <td><input type="text" name="stok" value="<?= $barang['Stok'] ?>" style="width: 95%;"></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <button type="submit" style="padding: 8px 20px; cursor: pointer;">Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
