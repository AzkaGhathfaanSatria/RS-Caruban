<?php
include 'koneksi.php';

$email = $_POST['email'];
$nik = $_POST['nik'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$role = 'admin';

mysqli_query($conn, "INSERT INTO user (email, nik, password, role)
VALUES ('$email', '$nik', '$password', '$role')");

header("Location: admin_dashboard.php");
?>