<?php
session_start();

include '../connection.php';

$id_pembayaran = $_GET['id_pembayaran'];

$query = "DELETE FROM Pembayaran WHERE id_pembayaran = $id_pembayaran";

$result = mysqli_query($conn, $query);

$num = mysqli_affected_rows($conn);

if ($num > 0) {

    echo "<script>alert('Paket berhasil dihapus');location.href='halaman3.php';</script>";
} else {
    echo "<script>alert('Terjadi kesalahan. Silahkan coba lagi');location.href='halaman3.php';</script>";
}
