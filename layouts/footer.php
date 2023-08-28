<!-- Footer Start -->
<div class="container-fluid bg-secondary text-dark mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-6 col-md-12 mb-5 pr-3 pr-xl-5">
            <a href="" class="text-decoration-none">
                <h1 class="mb-4 display-5 font-weight-semi-bold">
                    <span class="text-primary font-weight-bold border border-white px-3 mr-1">Techshop</span>
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
                        <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-dark mb-2" href="about.php"><i class="fa fa-angle-right mr-2"></i>About us</a>
                        <a class="text-dark mb-2" href="apple.php"><i class="fa fa-angle-right mr-2"></i>Apple</a>
                        <a class="text-dark mb-2" href="samsung.php"><i class="fa fa-angle-right mr-2"></i>Samsung</a>
                        <a class="text-dark mb-2" href="lg.php"><i class="fa fa-angle-right mr-2"></i>LG</a>
                        <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
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
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- JavaScript Libraries -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script> -->

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
        $("#search-product").autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: `./database/queries/search_products.php?search_term=${request.term}`,
                    type: 'get',
                    dataType: "json",
                    success: function(data) {
                        response(data);
                    }
                });
            },
            select: function(e, ui) {
                console.log("ss", ui.item);
                $.ajax({
                    url: `./database/queries/search_products.php?search_term=${ui.item.value}`,
                    type: 'get',
                    dataType: "json",
                    success: function(data) {
                        let searchTerm = ui.item.value;
                        if (ui.item.category_id == "1") {
                            window.location = `http://localhost/techshopproject2/mobile.php?search_term=${searchTerm}&category_id=1`

                        } else if (ui.item.category_id == "2") {
                            window.location = `http://localhost/techshopproject2/computer.php?search_term=${searchTerm}&category_id=2`

                        } else if (ui.item.category_id == "3") {
                            window.location = `http://localhost/techshopproject2/tv.php?search_term=${searchTerm}&category_id=3`


                        }

                    }
                });

            },

            change: function(e, ui) {
                console.log(ui.item.label);

            }
        });
    })
</script>
</body>

</html>