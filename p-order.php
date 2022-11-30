<?php
    include 'koneksi.php';

    $nama = $_POST['nama'];
    $id_product = $_POST['id_product'];
    $quantity = $_POST['quantity'];
    $alamat = $_POST['alamat'];
    $jenis_pembayaran = $_POST['jenis_pembayaran'];
    $price = $_POST['price'];
    $full_price = $quantity * $price;

    $sql = " INSERT INTO order VALUES ('', '$nama', '$nama_product', '$quantity','$full_price', '$alamat','$jenis_pembayaran' )";
    $query = mysqli_query($connect , $sql);

    if ($query){
        header("location:order.php");
    }

?>