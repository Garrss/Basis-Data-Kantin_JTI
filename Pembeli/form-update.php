<?php
include('../connection.php');

$id_pembeli = $_GET['id_pembeli'];

$query = "SELECT * FROM pembeli WHERE id_pembeli = '$id_pembeli'";

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
        <label for="Pembeli">Pembeli:</label>
        <input type="text" id="Barang" name="Barang" value="<?php echo $row['Barang']; ?>">
        <br><br>
        <input type="hidden" name="id_pembeli" value="<?= $id_pembeli ?>">
        <button type="submit">Submit</button>

    </form>

</body>

</html>