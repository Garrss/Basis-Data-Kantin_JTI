<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembayaran</title>
</head>

<body>
    <h2>Tambah Pembayaran</h2>
    <!-- Form untuk menambahkan data pembayaran -->
    <form action="Tambah_Pembayaran.php" method="post">
        <label for="id_pembayaran">ID Pembayaran:</label><br>
        <input type="text" id="id_pembayaran" name="id_pembayaran" required><br>
        <label for="Tanggal">Tanggal:</label><br>
        <input type="date" id="Tanggal" name="Tanggal" required><br><br>
        <label for="Jumlah">Jumlah:</label><br>
        <input type="text" id="Jumlah" name="Jumlah" required><br><br>
        <label for="Harga">Harga:</label><br>
        <input type="text" id="Harga" name="Harga" required><br><br>
        <label for="Metode">Metode:</label><br>
        <input type="text" id="Metode" name="Metode" required><br><br>
        <button type="submit">Tambah Pembayaran</button>
    </form>
</body>

</html>