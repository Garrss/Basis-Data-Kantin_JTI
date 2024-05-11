<?php

include('../connection.php');

if (isset($_POST['oke'])) {
    $id_karyawan = $_POST['id_karyawan'];
    $nama = $_POST['Nama'];
    $No_Telepon = $_POST['No_Telepon'];
}

// Prepare the SQL query
//$query = "INSERT INTO db_admin VALUES ('$nama', '','$pwd')";

// Execute the query
//$result = mysqli_query($conn, $query);
mysqli_query($conn, "INSERT INTO Karyawan VALUES ('$id_karyawan','$nama','$No_Telepon')");
