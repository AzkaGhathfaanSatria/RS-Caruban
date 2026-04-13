<?php
session_start();
include 'koneksi.php';

$email = $_SESSION['email'];
$nama = $_POST['nama'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$poli = $_POST['poli'];
$dokter = $_POST['dokter'];

// simpan ke database
$query = "INSERT INTO pasien (email, nama, nik, no_hp, poli, dokter)
          VALUES ('$email', '$nama', '$nik', '$no_hp', '$poli', '$dokter')";

mysqli_query($conn, $query);

echo "<script>alert('Pendaftaran berhasil!'); window.location='dashboard.php';</script>";
?>