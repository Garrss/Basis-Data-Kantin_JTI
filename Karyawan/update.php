<?php
session_start();
include('../connection.php');

$id_karyawan = $_POST['id_karyawan'];
$Nama = $_POST['Nama'];
$No_Telepon = $_POST['No_Telepon'];

$query = "UPDATE karyawan SET Nama = '$Nama', No_Telepon = '$No_Telepon' WHERE id_karyawan = $id_karyawan";

$hasil = mysqli_query($conn, $query);

if ($hasil) {
    echo "<script>location.href='halaman1.php';</script>";
}
