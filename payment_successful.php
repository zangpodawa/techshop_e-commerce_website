<?php
session_start();
include "./redirect_to_login.php";
include "./layouts/header.php";
include "./database/queries/clear_cart.php";
?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Payment Successful</h1>
        <div class="d-inline-flex">
            You have successfully paid $<?= $_SESSION['cart_total'] ?>. Happy Shopping!
        </div>
    </div><br><br><br><br>
</div>
<!-- Page Header End -->

<!-- Checkout Start -->
<!-- <div class="container-fluid bg-secondary pt-5"> -->
<!-- <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                <div class="row">


                </div>
                
            </div>

        </div>
    </div> -->
<!-- Checkout End -->
<script>

</script>
<?php include "./layouts/footer.php" ?>