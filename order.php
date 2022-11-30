<?php
include 'koneksi.php';


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Gustoro Coffee</title>
</head>

<body>

    <nav class="nav nav-bg navbar-expand-lg fixed-top navbar-dark p-3">
        <div class="container-fluid">
            <a href="logout.php?value=0" class="btn-logout position-absolute"> <button class="btn-danger">Logout</button></a>
            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsMiddle">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="home.php" class="nav-link" aria-current="page">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="products.php" class="nav-link" aria-current="page">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a href="order.php" class="nav-link" aria-current="page">ORDER</a>
                    </li>
                    <li class="nav-item">
                        <a href="reservasi.php" class="nav-link" aria-current="page">RESERVASI</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="bg-light position-relative d-flex align-items-center justify-content-center" id="reservasi">
        <div class="container py-3">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center align-items-center">
                    <div class="text-box ">
                        <h1> RESERVASI</h1>
                        <form action="p-order.php">
                            <div class="text-warning p-5 rounded-4">
                                <h2>Order</h2>
                                <hr class=" text-light">
                            </div>
                            <div class="p-5">
                                <?php
                                $sql_nama = "SELECT * FROM user";
                                $query_nama = mysqli_query($connect, $sql_nama);
                                $data_nama = mysqli_fetch_array($query_nama);
                                ?>
                                <div class="input">
                                    <label for="nama" class="form-label">Atas Nama</label>
                                    <input type="text" name="nama" class="form-control" id="nama" value="<?php echo $_SESSION['username']; ?>" readonly>
                                </div>
                                <div class="input">
                                    <label for="nama-product" class="form-label">Nama Product</label>
                                    <input type="text" name="nama_product" class="form-control" id="nama-product" value="<?php echo $data_product['nama_product']; ?>" readonly>
                                </div>
                                <div class="input">
                                    <label for="quantity" class="form-label">Quantity</label>
                                    <input type="number" id="quantity" name="quantity" class="form-control">
                                </div>
                                <div class="input">
                                    <label for="alamat" class="form-label">Alamat Pengiriman</label>
                                    <input type="text-area" class="form-control" id="alamat" name="alamat">
                                </div>
                                <div class="input">
                                    <label for="jenis_pembayaran" class="form-label">Jenis Pembayaran</label>
                                    <select name="jenis_pembayaran" id="jenis_pembayaran">
                                        <option value="cod">COD(Cash On Delivery)</option>
                                        <option value="e-wallet">E-Wallet</option>
                                    </select>
                                </div>
                                <input type="hidden" name="price" value="<?php echo $data_product['harga']; ?>">
                                <div class="input">
                                    <input type="submit" class="btn btn-warning" value="Order">
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="col-lg-5 pr-4">
                    <img src="assets/coffee3.jpg" class="img-fluid" alt="" />
                </div>
            </div>
        </div>
    </section>

</body>

</html>