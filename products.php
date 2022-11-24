<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/styles.css" />
    <title>Gustoro Coffee Shop</title>
</head>

<body>
    <nav class="nav nav-bg navbar-expand-lg sticky-top navbar-dark p-3">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsMiddle"
                aria-controls="#navbarsMiddle" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
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
    <section class="bg-dark py-5 position-relative" id="landing">
        <div class="container px-2">
            <div class="row gx-3 d-flex align-items-center justify-content-center">
                <div class="col-6 col-lg-5 col-xl-5 col-xxl-4">
                    <div class="my-5 text-warning text-center text-xl-start">
                        <h1 class="display-2 fw-bolder mb-2">Our Products</h1>
                        <h5 class="lead fw-normal mb-4">Tell us what do you want</h5>
                    </div>
                </div>
                <div class="col-6 col-xl-4 col-xxl-5 text-center">
                    <div class="lottie-product">
                        <lottie-player src="https://assets4.lottiefiles.com/private_files/lf30_fpdvsz3i.json"
                            background="transparent" style="width: 400px; height: 400px" speed="1" loop autoplay>
                        </lottie-player>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="custom-shape-divider-bottom-1669189821">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path d="M1200 0L0 0 892.25 114.72 1200 0z" class="shape-fill"></path>
            </svg>
        </div> -->
    </section>

    <section id="home1">
        <div class="row">
            <div class="col-3 container-category">
                <div class="container mx-1 category">
                    <h2 class="mb-3">Categories</h2>
                    <ul>
                        <li><a href="#list-coffee">Coffee</a></li>
                        <li><a href="#list-tea">Tea</a></li>
                        <li><a href="#list-food">Food</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9 container-product bg-light">
                <div id="list-coffee" class="pt-5">
                    <ul>
                        while(){
                        <li>
                            <div class="product">
                                <div class="container-image  img-hover-zoom--blur">
                                    <img src="assets/product-1.png" alt="" />
                                </div>
                                <div class="description">
                                    <h3>Biji Kopi House Blend ETC 50% Robusta 50% Arabica</h3>
                                    <h5>Rp50.000 - Rp100.000</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="list-tea" class="pt-5 ">
                    <ul>
                        while(){
                        <li>
                            <div class="product">
                                <div class="container-image img-hover-zoom--blur">
                                    <img src="assets/product-1.png" alt="" />
                                </div>
                                <div class="description">
                                    <h3>Biji Kopi House Blend ETC 50% Robusta 50% Arabica</h3>
                                    <h5>Rp50.000 - Rp100.000</h5>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="list-food" class="pt-5">
                    <ul>
                        while(){
                        <li>
                            <div class="product img-hover-zoom--blur">
                                <div class="container-image  img-hover-zoom--blur">
                                    <img src="assets/product-1.png" alt="" />
                                </div>
                                <div class="description">
                                    <h3>Biji Kopi House Blend ETC 50% Robusta 50% Arabica</h3>
                                    <h5>Rp50.000 - Rp100.000</h5>
                                </div>
                            </div>

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</body>

</html>