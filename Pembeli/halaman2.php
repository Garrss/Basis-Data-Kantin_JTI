<?php

include '../connection.php';
include '../header.php';


$query = "SELECT * FROM pembeli";
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
    <h2 align="center">Pembeli</h2>
    <!-- Tambahkan link atau tombol "Add Pembeli" di atas tabel -->
    <a href="form-tambah.php">Add Pembeli</a>

    <table border="1px">
        <thead>
            <tr>
                <th scope="col">ID Pembeli</th>
                <th scope="col">Barang</th>
                <th scope="col">Aksi</th> <!-- Tambah kolom untuk aksi (edit) -->
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) {
            echo "<tr>";
            echo "<td>" . $data["id_pembeli"] . "</td>";
            echo "<td>" . $data["Barang"] . "</td>";
            echo "<td><a href='form-update.php?id_pembeli=" . $data["id_pembeli"] . "'>Edit</a> " . "</td>";
            echo "<td><a href='Delete.php?action=delete&id_pembeli=" . $data["id_pembeli"] . "'>Delete</a> " . "</td";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>