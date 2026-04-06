<?php
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$nik = $_POST['nik'];
$password = $_POST['password'];

// ambil data user
$stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND nik = ?");
$stmt->bind_param("ss", $email, $nik);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();

if ($data) {

    // cek password hash
    if (password_verify($password, $data['password'])) {

        $_SESSION['login'] = true;
        $_SESSION['email'] = $data['email'];
        $_SESSION['nama'] = $data['nama'];

        header("Location: dashboard.php");
        exit;

    } else {
        echo "<script>alert('Password salah'); window.location='login.php';</script>";
    }

} else {
    echo "<script>alert('Email atau NIK tidak ditemukan'); window.location='login.php';</script>";
}
?>