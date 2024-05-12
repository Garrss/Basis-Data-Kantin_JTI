<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Karyawan</title>
</head>

<body>
    <h2>Tambah Karyawan</h2>
    <!-- Form untuk menambahkan data pembeli -->
    <form action="Tambah_Karyawan.php" method="post">
        <label for="id_karyawan">ID Karyawan:</label><br>
        <input type="text" id="id_karyawan" name="id_karyawan" required><br>
        <label for="Nama">Nama:</label><br>
        <input type="text" id="Nama" name="Nama" required><br><br>
        <label for="No_Telepon">No_Telepon:</label><br>
        <input type="text" id="No_Telepon" name="No_Telepon" required><br><br>
        <button type="submit">Tambah Karyawan</button>
    </form>
</body>

</html>