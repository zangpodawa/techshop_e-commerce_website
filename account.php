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
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row align-items-center py-3 px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a href="" class="text-decoration-none">
            <h1 class="m-0 display-5 font-weight-semi-bold">
              <span class="text-primary font-weight-bold border px-3 mr-1"
                >Techshop</span
              >
            </h1>
          </a>
        </div>
        <div class="col-lg-5 col-6 text-left">
          <form action="">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Search for products"
              />
              <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
          <a href="store.php" class="btn border">
            <i class="fas fa-home text-primary"></i><br />
            <span class="badge">Store</span>
          </a>
          <a href="wishlist.php" class="btn border">
            <i class="fas fa-heart text-primary"></i><br />
            <span class="badge">Wishlist</span>
          </a>
          <a href="account.php" class="btn border">
            <i class="fas fa-user text-primary"></i><br />
            <span class="badge">Account</span>
          </a>
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
          <a
            class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 65px; margin-top: -1px; padding: 0 30px"
          >
            <h6 class="m-0">Categories</h6>
            <i class="fa fa-angle-down text-dark"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 1"
          >
            <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
              <a href="mobile.php" class="nav-item nav-link">Mobile Phones</a>
              <a href="computer.php" class="nav-item nav-link">Computers</a>
              <a href="tv.php" class="nav-item nav-link">TVs</a>
            </div>
          </nav>
        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0"
          >
            <a href="" class="text-decoration-none d-block d-lg-none">
              <h1 class="m-0 display-5 font-weight-semi-bold">
                <span class="text-primary font-weight-bold border px-3 mr-1"
                  >T</span
                >echshop
              </h1>
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav mr-auto py-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Products</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="mobile.php" class="dropdown-item"
                      >Mobile Phones</a
                    >
                    <a href="computer.php" class="dropdown-item">Computers</a>
                    <a href="tv.php" class="dropdown-item">TVs</a>
                  </div>
                </div>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Brands</a
                  >
                  <div class="dropdown-menu rounded-0 m-0">
                    <a href="apple.php" class="dropdown-item">Apple</a>
                    <a href="samsung.php" class="dropdown-item">Samsung</a>
                    <a href="lg.php" class="dropdown-item">LG</a>
                  </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
              </div>
              <div class="navbar-nav ml-auto py-0">
                <a href="login.php" class="nav-item nav-link">Login</a>
                <a href="register.php" class="nav-item nav-link">Register</a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height: 300px"
      >
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Account page</h1>
        <div class="d-inline-flex">
          <p class="m-0"><a href="">Home</a></p>
          <p class="m-0 px-2">-</p>
          <p class="m-0">Account page</p>
        </div>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Account Start -->
    <div class="container-fluid pt-5">
      <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
          <h2>Account page will be here</h2>
        </div>
      </div>
    </div>
    <!-- Account End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
      <div class="row px-xl-5 pt-5">
        <div class="col-lg-6 col-md-12 mb-5 pr-3 pr-xl-5">
          <a href="" class="text-decoration-none">
            <h1 class="mb-4 display-5 font-weight-semi-bold">
              <span
                class="text-primary font-weight-bold border border-white px-3 mr-1"
                >Techshop</span
              >
            </h1>
          </a>
          <p>Brisbane best tech shop.</p>
          <p class="mb-2">
            <i class="fa fa-map-marker-alt text-primary mr-3"></i>349 Queen
            Street, Brisbane, QLD, AU
          </p>
          <p class="mb-2">
            <i class="fa fa-envelope text-primary mr-3"></i>info@techshop.com.au
          </p>
          <p class="mb-0">
            <i class="fa fa-phone-alt text-primary mr-3"></i>+010 101 01010
          </p>
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="row">
            <div class="col-md-6 mb-5">
              <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
              <div class="d-flex flex-column justify-content-start">
                <a class="text-dark mb-2" href="index.php"
                  ><i class="fa fa-angle-right mr-2"></i>Home</a
                >
                <a class="text-dark mb-2" href="about.php"
                  ><i class="fa fa-angle-right mr-2"></i>About us</a
                >
                <a class="text-dark mb-2" href="apple.php"
                  ><i class="fa fa-angle-right mr-2"></i>Apple</a
                >
                <a class="text-dark mb-2" href="samsung.php"
                  ><i class="fa fa-angle-right mr-2"></i>Samsung</a
                >
                <a class="text-dark mb-2" href="lg.php"
                  ><i class="fa fa-angle-right mr-2"></i>LG</a
                >
                <a class="text-dark" href="contact.php"
                  ><i class="fa fa-angle-right mr-2"></i>Contact Us</a
                >
              </div>
            </div>
            <div class="col-md-6 mb-5">
              <div class="d-inline-flex align-items-center">
                <a class="text-dark px-2" href="">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a class="text-dark px-2" href="">
                  <i class="fab fa-twitter"></i>
                </a>
                <a class="text-dark px-2" href="">
                  <i class="fab fa-linkedin-in"></i>
                </a>
                <a class="text-dark px-2" href="">
                  <i class="fab fa-instagram"></i>
                </a>
                <a class="text-dark pl-2" href="">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row border-top border-light mx-xl-5 py-4">
        <div class="col-md-12 px-xl-0">
          <p class="mb-md-0 text-center text-md-left text-dark">
            &copy;
            <a class="text-dark font-weight-semi-bold" href="#">Techshop</a>.
            All Rights Reserved. Designed by JCUB student 2023.
          </p>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
