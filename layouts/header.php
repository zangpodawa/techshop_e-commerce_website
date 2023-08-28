<?php session_start(); ?>
<?php require_once "./database/config.php" ?>
<?php include "./database/queries/fetch_categories.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Techshop</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="http://localhost/techshopproject2" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold">
                        <span class="text-primary font-weight-bold border px-3 mr-1">Techshop</span>
                    </h1>
                </a>
            </div>
            <div class="col-lg-5 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products" id="search-product" />
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-4 col-6 text-right">
                <a href="http://localhost/techshopproject2" class="btn border">
                    <i class="fas fa-home text-primary"></i><br />
                    <span class="badge">Home</span>
                </a>
                <a href="wishlist.php" class="btn border">
                    <i class="fas fa-heart text-primary"></i><br />
                    <span class="badge">Wishlist</span>
                </a>
                <!-- <a href="account.php" class="btn border">
                    <i class="fas fa-user text-primary"></i><br />
                    <span class="badge">Account</span>
                </a> -->
                <a href="cart.php" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i><br />
                    <span class="badge">Cart</span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 120px">
                        <?php foreach ($categories as $category) : ?>
                            <a href="<?= $category['link'] ?>" class="nav-item nav-link"><?= $category['name'] ?></a>
                        <?php endforeach ?>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="http://localhost/techshopproject2" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold">
                            <span class="text-primary font-weight-bold border px-3 mr-1">T</span>echshop
                        </h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Products</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="mobile.php" class="dropdown-item">Mobile Phones</a>
                                    <a href="computer.php" class="dropdown-item">Computers</a>
                                    <a href="tv.php" class="dropdown-item">TVs</a>
                                </div>
                            </div>
                            <!-- <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Brands</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="apple.php" class="dropdown-item">Apple</a>
                                    <a href="samsung.php" class="dropdown-item">Samsung</a>
                                    <a href="lg.php" class="dropdown-item">LG</a>
                                </div>
                            </div> -->
                            <a href="contact.php" class="nav-item nav-link">Contact</a>
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                            <?php if (isset($_SESSION["user_id"])) : ?>
                                <a href="logout.php" class="nav-item nav-link">Logout</a>

                            <?php else : ?>
                                <a href="login.php" class="nav-item nav-link">Login</a>
                                <a href="register.php" class="nav-item nav-link">Register</a>
                            <?php endif ?>
                        </div>
                    </div>
                </nav>
                <?php if (stripos($_SERVER['PHP_SELF'], "index.php")) : ?>
                    <!-- added for index -->
                    <div id="header-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active" style="height: 410px">
                                <img class="img-fluid" src="img/carousel-1.jpg" alt="Image" />
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">
                                            10% Off Your First Order
                                        </h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">
                                            Apple iPhones
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item" style="height: 410px">
                                <img class="img-fluid" src="img/carousel-2.jpg" alt="Image" />
                                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                    <div class="p-3" style="max-width: 700px">
                                        <h4 class="text-light text-uppercase font-weight-medium mb-3">
                                            10% Off Your First Order
                                        </h4>
                                        <h3 class="display-4 text-white font-weight-semi-bold mb-4">
                                            Samsung Galaxy Note
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                            <div class="btn btn-dark" style="width: 45px; height: 45px">
                                <span class="carousel-control-prev-icon mb-n2"></span>
                            </div>
                        </a>
                        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                            <div class="btn btn-dark" style="width: 45px; height: 45px">
                                <span class="carousel-control-next-icon mb-n2"></span>
                            </div>
                        </a>
                    </div>
                    <!-- added for index -->
                <?php endif ?>
            </div>
        </div>
    </div>
    <!-- Navbar End -->