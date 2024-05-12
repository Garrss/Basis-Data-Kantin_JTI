<?php
include '../connection.php'; // Sertakan file koneksi ke database
include '../header.php'; // Sertakan file header

// Ambil nilai yang dikirimkan melalui form
$id_pembayaran = $_POST['id_pembayaran'];
$tanggal = $_POST['Tanggal'];
$Jumlah = $_POST['Jumlah'];
$Harga = $_POST['Harga'];
$Metode = $_POST['Metode'];

// Query SQL untuk menambahkan data pembeli baru
$query = "INSERT INTO Pembayaran (id_pembayaran, Tanggal, Jumlah, Harga, Metode) VALUES ('$id_pembayaran', '$tanggal', '$Jumlah', '$Harga', '$Metode')";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Redirect ke halaman daftar pembeli setelah berhasil menambahkan data
    echo "<script>location.href='halaman3.php'</script>";
} else {
    // Tampilkan pesan kesalahan jika query tidak berhasil dijalankan
    echo "Error: " . mysqli_error($conn);
}
