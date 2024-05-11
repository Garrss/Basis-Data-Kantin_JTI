<?php
include('../connection.php');

$id_pembayaran = $_GET['id_pembayaran'];

$query = "SELECT * FROM Pembayaran WHERE id_pembayaran = '$id_pembayaran'";

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
        <label for="Pembayaran">Pembayaran:</label>
        <input type="text" id="tanggal" name="tanggal" value="<?php echo $row['tanggal']; ?>">
        <br><br>
        <input type="text" id="Jumlah" name="Jumlah" value="<?php echo $row['Jumlah']; ?>">
        <br><br>
        <input type="text" id="Harga" name="Harga" value="<?php echo $row['Harga']; ?>">
        <br><br>
        <input type="text" id="Metode" name="Metode" value="<?php echo $row['Metode']; ?>">
        <br><br>
        <input type="hidden" name="id_pembayaran" value="<?= $id_pembayaran ?>">
        <button type="submit">Submit</button>

    </form>

</body>

</html>