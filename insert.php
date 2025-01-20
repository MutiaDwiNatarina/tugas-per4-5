<?php

include 'koneksi.php';

$Query = "INSERT INTO barang (idBarang, NamaBarang, Harga) VALUES ('101', 'TV', '1000000')";
$result =$mysqli->query($query);