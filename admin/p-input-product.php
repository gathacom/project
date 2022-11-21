<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/styles.css">
    <title>Gustoro Coffee Shop</title>

    <style>
        .form-input {
            margin-top: 10rem;
            color: white;
        }

        .form-input .input {
            padding: 20px;
        }
    </style>
</head>

<body class="home-bg">

    <center>
        <div class="form-input col-6 bg-dark rounded-4">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="">
                    <div class="p-3">
                        <h2>Tambahkan Product</h2>
                    </div>
                    <hr>
                    <div class="col-10">
                        <div class="input">
                            <label for="nama-product" class="form-label">Nama Produk</label>
                            <input type="text" name="nama_product" id="nama-product" class="form-control">
                        </div>
                        <div class="input">
                            <label for="harga-product" class="form-label">Harga Produk</label>
                            <input type="text" name="harga_product" id="harga-product" class="form-control">
                        </div>
                        <div class="input">
                            <label for="jenis-product" class="form-label">Harga Produk</label>
                            <select name="jenis_product" class="form-control" id="jenis-product">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="input">
                            <label for="gambar-product" class="form-label">Gambar Produk</label>
                            <input type="file" name="gambar_product" id="gambar-product" class="form-control">
                        </div>
                        <div class="input">
                            <label for="jumlah-product" class="form-label">Gambar Produk</label>
                            <input type="number" name="jumlah_tersedia" id="jumlah-product" class="form-control">
                        </div>
                        <div class="input">
                            <input type="submit" class="btn btn-warning" value="Tambah">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </center>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>