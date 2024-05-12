<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembeli</title>
</head>

<body>
    <h2>Tambah Pembeli</h2>
    <!-- Form untuk menambahkan data pembeli -->
    <form action="tambah_pembeli.php" method="post">
        <label for="id_pembeli">ID Pembeli:</label><br>
        <input type="text" id="id_pembeli" name="id_pembeli" required><br>
        <label for="barang">Barang:</label><br>
        <input type="text" id="barang" name="barang" required><br><br>
        <button type="submit">Tambah Pembeli</button>
    </form>
</body>

</html>