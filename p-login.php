<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
$role = $data['role'];

$cek         = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['username']      = $username;
    $_SESSION['status']        = "login";

    if ($role == 'admin') {
        header("location: admin/homepage-admin.php");
    } elseif ($role == 'user') {
        header("location: home.php");
    }
} else {
    header("location: login.php?message=gagal");
}