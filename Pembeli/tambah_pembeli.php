<?php
include '../connection.php'; // Sertakan file koneksi ke database
include '../header.php'; // Sertakan file header

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
    echo "<script>location.href='halaman2.php'</script>";
} else {
    // Tampilkan pesan kesalahan jika query tidak berhasil dijalankan
    echo "Error: " . mysqli_error($conn);
}
