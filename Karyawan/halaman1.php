<?php

include '../connection.php';
include '../header.php';

$query = "SELECT * FROM karyawan";
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
    <h2 align="center">Karyawan</h2>
    <!--Tambahkan link atau tombol "Add Karyawan" di atas tabel -->
    <a href="Form-tambah.php">Add Pembeli</a>

    <table border="1px">
        <thead>
            <tr>
                <th scope="col">ID Karyawan</th>
                <th scope="col">Nama</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Aksi</th> <!-- Tambah kolom untuk aksi (edit)-->
            </tr>
        </thead>
        <?php
        $no = 1;
        while ($data = mysqli_fetch_assoc($hasil)) {
            echo "<tr>";
            echo "<td>" . $data["id_karyawan"] . "</td>";
            echo "<td>" . $data["Nama"] . "</td>";
            echo "<td>" . $data["No_Telepon"] . "</td>";
            echo "<td><a href='form-update.php?id_karyawan=" . $data["id_karyawan"] . "'>Edit</a> " . "</td>";
            echo "<td><a href='Delete.php?action=delete&id_karyawan=" . $data["id_karyawan"] . "'>Delete</a> " . "</td";
            echo "</tr>";
        }
        ?>

    </table>
</body>

</html>