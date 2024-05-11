<?php
session_start();
include('../connection.php');

$id_pembayaran = $_POST['id_pembayaran'];
$tanggal = $_POST['tanggal'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Metode = $_POST['Metode'];

$query = "UPDATE Pembayaran SET tanggal = '$tanggal', Jumlah = '$Jumlah', Harga = '$Harga', Metode = '$Metode' WHERE id_pembayaran = $id_pembayaran";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>location.href='halaman3.php';</script>";
}
