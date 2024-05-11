<?php
include '../connection.php'; // Sertakan file koneksi ke database
include '../header.php'; // Sertakan file header

// Jika form telah dikirimkan (method POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil nilai yang dikirimkan melalui form
    $id_pembeli = $_POST['id_pembeli'];
    $barang = $_POST['barang'];

    // Query SQL untuk menambahkan data pembeli baru
    $query = "INSERT INTO pembeli (id_pembeli, Barang) VALUES ('$id_pembeli', '$barang')";

    // Eksekusi query
    $result = mysqli_query($conn, $query);

    // Periksa apakah query berhasil dijalankan
    if ($result) {
        // Redirect ke halaman daftar pembeli setelah berhasil menambahkan data
        header("Location: daftar_pembeli.php");
        exit();
    } else {
        // Tampilkan pesan kesalahan jika query tidak berhasil dijalankan
        echo "Error: " . mysqli_error($conn);
    }
}
?>

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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="id_pembeli">ID Pembeli:</label><br>
        <input type="text" id="id_pembeli" name="id_pembeli" required><br>
        <label for="barang">Barang:</label><br>
        <input type="text" id="barang" name="barang" required><br><br>
        <button type="submit">Tambah Pembeli</button>
    </form>
</body>

</html>