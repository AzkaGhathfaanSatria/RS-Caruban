<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];
$alamat = $_POST['alamat'];
$password = $_POST['password'];

// hash password
$password_hash = password_hash($password, PASSWORD_DEFAULT);

// cek email sudah ada
$stmt = $conn->prepare("SELECT id FROM user WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    echo "<script>alert('Email sudah terdaftar'); window.location='register.php';</script>";
    exit;
}

// insert data
$stmt = $conn->prepare("INSERT INTO user (nama, email, nik, no_hp, alamat, password) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nama, $email, $nik, $no_hp, $alamat, $password_hash);
$stmt->execute();

echo "<script>alert('Registrasi berhasil'); window.location='login.php';</script>";
?>