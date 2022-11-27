<?php
include '../koneksi.php';
$sql = "SELECT * FROM jenis_product";
$query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Gustoro Coffee Shop</title>

    <style>
    .product img {
        width: 300px;
    }

    .product .description {
        margin-left: 20px;
    }

    .product {
        padding: 10px;
        display: flex;
    }

    form .input {
        padding: 10px;
    }
    </style>

</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <a href="../logout.php" class="btn-logout position-absolute"> <button class="btn-danger">Logout</button></a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="homepage-admin.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-dark position-relative d-flex align-items-center justify-content-center" id="section1">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-start justify-content-center">
                <div class=" d-flex align-items-center flex-column justify-content-center">
                    <lottie-player src="https://assets8.lottiefiles.com/private_files/lf30_fpdvsz3i.json"
                        background="transparent" speed="1.5" style="width: 300px; height: 300px;" loop autoplay>
                    </lottie-player>
                    <div
                        class="text-warning text-center text-xl-center d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-2 fw-bolder mb-1 ">EDIT PRODUCT</h1>
                        <h5 class="lead fw-normal mb-3">Selamat Bekerja para Admin</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">

                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="bg-light">
        <div class="">
            <div class="row">
                <div class="col-md-3 container-category">
                    <div class="container mx-1 category">
                        <h2 class="mb-2">Categories</h2>
                        <div data-toggle="modal" data-target="#tambah-kategori" class="p-3">
                            <a href="#" class="btn btn-dark">Tambah Kategori</a>
                        </div>
                        <div class="text-white">
                            <ul>
                                <?php
                                while ($jenis = mysqli_fetch_array($query)) {
                                ?>
                                <li><a
                                        href="#<?php echo $jenis['nama_jenis']; ?>"><?php echo $jenis['nama_jenis'] ?></a>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 container-product bg-light">
                    <div>
                        <div class="mb-5 text-center">
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#tambah-product">Tambah
                                Product</a>
                        </div>
                        <?php

                        while ($jenis_product = mysqli_fetch_array($query)) {
                        ?>
                        <ul id="<?php echo $jenis_product['id_jenis'] ?>">
                            <?php echo $jenis_product['nama_jenis'] ?>
                            <li>
                                asdad
                            </li>
                        </ul>

                        <?php } ?>
                        <!---->
                        <ul>
                            <li>
                                <div class="product">
                                    <div id="">
                                        <?php
                                        $sql_product = "SELECT * FROM product";
                                        $query_product = mysqli_query($connect, $sql_product) or die(mysqli_error($connect));
                                        while ($list_product = mysqli_fetch_array($query_product)) {
                                        ?>
                                        <div>
                                            <img src="gambar-product/<?php echo $list_product['gambar']; ?>">
                                        </div>
                                        <div class="description">
                                            <h3><?php echo $list_product['nama_product']; ?></h3>
                                            <h5> <?php echo $list_product['harga']; ?></h5>
                                            <h5> <?php echo $list_product['jumlah_tersedia']; ?></h5>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--MODAL UNTUK PRODUCT-->
    <div id="tambah-product" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Produk</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="p-input-product.php" method="POST" enctype="multipart/form-data">
                        <div class="">
                            <div class="">
                                <div class="input">
                                    <label for="nama-product" class="form-label">Nama Produk</label>
                                    <input type="text" name="nama_product" id="nama-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="harga-product" class="form-label">Harga Produk</label>
                                    <input type="text" name="harga_product" id="harga-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="jenis-product" class="form-label">Jenis Produk</label>
                                    <select name="jenis_product" class="form-control" id="jenis-product">
                                        <?php
                                        $sql = "SELECT * FROM jenis_product";
                                        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
                                        while ($jenis = mysqli_fetch_array($query)) {
                                        ?>
                                        <option value="<?php echo $jenis['id_jenis'] ?>">
                                            <?php echo $jenis['nama_jenis'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="input">
                                    <label for="gambar-product" class="form-label">Gambar Produk</label>
                                    <input type="file" name="gambar_product" id="gambar-product" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="jumlah-product" class="form-label">Jumlah Produk Tersedia</label>
                                    <input type="number" name="jumlah_tersedia" id="jumlah-product"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="input">
                                <input type="submit" class="btn btn-warning" value="Tambah">
                                <input type="button" class="btn btn-warning" value="Close">
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal daftar -->

    <!-- Modal login -->
    <div id="tambah-kategori" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Kategori Menu</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="p-tambah-jenis.php" method="POST">
                        <div class="input">
                            <label for="nama-jenis" class="form-label">Jenis Product</label>
                            <input type="text" class="form-control" name="nama-jenis" id="nama-jenis">
                        </div>
                        <div class="input">
                            <input type="submit" class="btn btn-warning">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>