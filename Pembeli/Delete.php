<?php
session_start();

include '../connection.php';

$id_pembeli = $_GET['id_pembeli'];

$query = "DELETE FROM Pembeli WHERE id_pembeli = $id_pembeli";

$result = mysqli_query($conn, $query);

$num = mysqli_affected_rows($conn);

if ($num > 0) {

    echo "<script>alert('Paket berhasil dihapus');location.href='halaman2.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='halaman2.php';</script>";
}
