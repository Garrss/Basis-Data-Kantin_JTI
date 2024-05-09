<?php
include('../connection.php');

$id_karyawan = $_GET['id_karyawan'];

$query = "SELECT * FROM karyawan WHERE id_karyawan = '$id_karyawan'";

$result = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="update.php" method="post">
        <label for="Nama">Nama:</label>
        <input type="text" id="Nama" name="Nama" value="<?php echo $row['Nama']; ?>">
        <br><br>
        <label for="No_Telepon">No Telepon:</label>
        <input type="number" id="No_Telepon" name="No_Telepon" value="<?php echo $row['No_Telepon']; ?>">
        <br><br>
        <input type="hidden" name="id_karyawan" value="<?= $id_karyawan ?>">
        <button type="submit">Submit</button>

    </form>

</body>

</html>