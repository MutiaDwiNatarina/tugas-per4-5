<?php

include "koneksi.php";

$query = "SELECT * FROM barang";
$result = $mysqli->query($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
<h1 style="font-family: Arial, sans-serif; margin: 15px;">Daftar Barang</h1>

  <h3><a href="tambah.php">Tambah Data</a></h3>

  <table border="1">
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Kategori</th>
      <th>Harga</th>
      <th>Stok</th>
      <th>Edit</th>
    </tr>

    <?php 
     
    while ($row = $result->fetch_assoc()) {
    ?>

    <tr>
        <td><?= $row['idBarang'] ?></td>
        <td><?= $row['NamaBarang'] ?></td>
        <td><?= $row['Kategori'] ?></td>
        <td><?= $row['Harga'] ?></td>
        <td><?= $row['Stok'] ?></td>
        <td><a href="edit.php?id=<?= $row['idBarang'] ?>">Edit</a></td>
    </tr>

    <?php
        }
    ?>

</table>
    
</body>
</html>

