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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

<body class="home-bg">
    <header class="bg-dark py-5">
        <nav class="nav navbar-expand-lg fixed-top p-5   navbar-dark">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMiddle" aria-controls="#navbarsMiddle" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">PROFILE</a>
                        </li>
                        <li class="nav-item">
                            <a href="products.php" class="nav-link" aria-current="page">PRODUCTS</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">CONTACT</a>
                        </li>
                        <li class="nav-item">
                            <a href="#home" class="nav-link" aria-current="page">ORDER</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4 ">
                    <div class="my-5 text-warning text-center text-xl-start">
                        <h1 class="display-2 fw-bolder mb-2">Our Products</h1>
                        <h5 class="lead fw-normal mb-4">Tell us what do you want</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">
                    <div class="lottie-product">
                        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_fpdvsz3i.json" background="transparent" style="width:400px;height:400px;" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
        </div>
    </header>

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
                                    <li><a href="#<?php echo $jenis['nama_jenis']; ?>"><?php echo $jenis['nama_jenis'] ?></a>
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
                                    <div>
                                        <?php
                                        if (isset($_GET['message'])) {
                                            if ($_GET['message'] == "gagal-delete") {
                                                echo "Product gagal dihapus";
                                            } else if ($_GET['message'] =="berhasil-delete"){
                                                echo "Product berhasil dihapus";
                                            }
                                        }
                                        ?>
                                    </div>
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
                                            <div>
                                                <div>
                                                    <a href="#?id_product=<?php echo $list_product['id_product']; ?>" class="btn btn-info" data-toggle="modal" data-target="#edit-product">Edit Product</a>
                                                </div>
                                                <div>
                                                    <a href="delete-product.php?id_product=<?php echo $list_product['id_product']; ?>" class="btn btn-warning">Delete</a>
                                                </div>
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
                                    <input type="number" name="jumlah_tersedia" id="jumlah-product" class="form-control">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>