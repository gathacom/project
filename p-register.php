<?php
include 'koneksi.php';

$nama            = $_POST['name'];
$username        = $_POST['username'];
$password        = $_POST['password'];
$no_telp         = $_POST['tel'];

$sql    = "INSERT INTO user VALUES('', '$username', '$password', '$no_telp', '')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:loginPage.php?message=Registrasi Berhasil");
} else {
    header("location:RegisterPage.php?message=Registrasi Gagal");
}