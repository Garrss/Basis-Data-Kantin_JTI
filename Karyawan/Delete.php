<?php
session_start();

include '../connection.php';

$id_karyawan = $_GET['id_karyawan'];

$query = "DELETE FROM Karyawan WHERE id_karyawan = $id_karyawan";

$result = mysqli_query($conn, $query);

$num = mysqli_affected_rows($conn);

if ($num > 0) {

    echo "<script>alert('Paket berhasil dihapus');location.href='halaman1.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='halaman1.php';</script>";
}
