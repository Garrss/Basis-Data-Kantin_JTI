<?php
include '../connection.php'; // Sertakan file koneksi ke database
include '../header.php'; // Sertakan file header

// Ambil nilai yang dikirimkan melalui form
$id_karyawan = $_POST['id_karyawan'];
$Nama = $_POST['Nama'];
$No_Telepon = $_POST['No_Telepon'];

// Query SQL untuk menambahkan data pembeli baru
$query = "INSERT INTO Karyawan (id_karyawan, Nama, No_Telepon) VALUES ('$id_karyawan', '$Nama', '$No_Telepon')";

// Eksekusi query
$result = mysqli_query($conn, $query);

// Periksa apakah query berhasil dijalankan
if ($result) {
    // Redirect ke halaman daftar pembeli setelah berhasil menambahkan data
    echo "<script>location.href='halaman1.php'</script>";
} else {
    // Tampilkan pesan kesalahan jika query tidak berhasil dijalankan
    echo "Error: " . mysqli_error($conn);
}
