<?php

include '../connection.php';
include '../header.php';

$query = "SELECT * FROM Pembayaran";
$hasil = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 align="center">Pembayaran</h2>
    <!-- Tambahkan link atau tombol "Add Pembayaran" di atas tabel -->
    <a href="Form-tambah.php">Add Pembayaran</a>

    <table border="1px">
        <thead>
            <tr>
                <th scope="col">ID Pembayaran</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Metode</th>
                <th scope="col">Aksi</th> <!-- Tambah kolom untuk aksi (edit) -->
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) {
            echo "<tr>";
            echo "<td>" . $data["id_pembayaran"] . "</td>";
            echo "<td>" . $data["tanggal"] . "</td>";
            echo "<td>" . $data["Jumlah"] . "</td>";
            echo "<td>" . $data["Harga"] . "</td>";
            echo "<td>" . $data["Metode"] . "</td>";
            echo "<td><a href='form-update.php?id_pembayaran=" . $data["id_pembayaran"] . "'>Edit</a> " . "</td>";
            echo "<td><a href='Delete.php?action=delete&id_pembayaran=" . $data["id_pembayaran"] . "'>Delete</a> " . "</td";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>