<?php
session_start();
include('../connection.php');

$id_pembeli = $_POST['id_pembeli'];
$Barang = $_POST['Barang'];

$query = "UPDATE Pembeli SET Barang = '$Barang' WHERE id_pembeli = $id_pembeli";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>location.href='halaman2.php';</script>";
}
