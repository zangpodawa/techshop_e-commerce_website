<?php
session_start();
include "./redirect_to_login.php";
include "./layouts/header.php";
?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
    <div class="d-inline-flex">
      <p class="m-0"><a href="">Home</a></p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Checkout</p>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Checkout Start -->
<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <div class="col-lg-8">
      <div class="mb-4">
        <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
        <div class="row">
          <div class="col-md-6 form-group">
            <label>Name</label>
            <input class="form-control" type="text" placeholder="Dawa" value="<?= $_SESSION['user_name'] ?>" />
          </div>
          <!-- <div class="col-md-6 form-group">
            <label>Last Name</label>
            <input class="form-control" type="text" placeholder="Zangpo" />
          </div> -->
          <div class="col-md-6 form-group">
            <label>E-mail</label>
            <input class="form-control" type="text" placeholder="techshop@techshop.com.au" value="<?= $_SESSION['user_email'] ?>" />
          </div>
          <div class="col-md-6 form-group">
            <label>Mobile No</label>
            <input class="form-control" type="text" placeholder="+61 0101010101" />
          </div>
          <div class="col-md-6 form-group">
            <label>Address Line 1</label>
            <input class="form-control" type="text" placeholder="349 Queen Street" />
          </div>
          <div class="col-md-6 form-group">
            <label>Address Line 2</label>
            <input class="form-control" type="text" placeholder="349 Queen Street" />
          </div>
          <div class="col-md-6 form-group">
            <label>Country</label>
            <select class="custom-select">
              <option selected>Australia</option>
              <option>Bhutan</option>
              <option>Nepal</option>
              <option>India</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label>City</label>
            <input class="form-control" type="text" placeholder="Brisbane" />
          </div>
          <div class="col-md-6 form-group">
            <label>State</label>
            <input class="form-control" type="text" placeholder="QLD" />
          </div>
          <div class="col-md-6 form-group">
            <label>ZIP Code</label>
            <input class="form-control" type="text" placeholder="4000" />
          </div>
        </div>
      </div>
      <div class="collapse mb-4" id="shipping-address">
        <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
        <div class="row">
          <div class="col-md-6 form-group">
            <label>First Name</label>
            <input class="form-control" type="text" placeholder="John" />
          </div>
          <div class="col-md-6 form-group">
            <label>Last Name</label>
            <input class="form-control" type="text" placeholder="Doe" />
          </div>
          <div class="col-md-6 form-group">
            <label>E-mail</label>
            <input class="form-control" type="text" placeholder="example@email.com" />
          </div>
          <div class="col-md-6 form-group">
            <label>Mobile No</label>
            <input class="form-control" type="text" placeholder="+123 456 789" />
          </div>
          <div class="col-md-6 form-group">
            <label>Address Line 1</label>
            <input class="form-control" type="text" placeholder="123 Street" />
          </div>
          <div class="col-md-6 form-group">
            <label>Address Line 2</label>
            <input class="form-control" type="text" placeholder="123 Street" />
          </div>
          <div class="col-md-6 form-group">
            <label>Country</label>
            <select class="custom-select">
              <option selected>United States</option>
              <option>Afghanistan</option>
              <option>Albania</option>
              <option>Algeria</option>
            </select>
          </div>
          <div class="col-md-6 form-group">
            <label>City</label>
            <input class="form-control" type="text" placeholder="New York" />
          </div>
          <div class="col-md-6 form-group">
            <label>State</label>
            <input class="form-control" type="text" placeholder="New York" />
          </div>
          <div class="col-md-6 form-group">
            <label>ZIP Code</label>
            <input class="form-control" type="text" placeholder="123" />
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
          <h4 class="font-weight-semi-bold m-0">Order Total</h4>
        </div>
        <div class="card-body">
          <h5 class="font-weight-medium mb-3">Products</h5>
          <?php foreach ($_SESSION['carts'] as $cart) : ?>

            <div class="d-flex justify-content-between">
              <p><?= $cart['name'] ?> <?= $cart['quantity'] ?></p>
              <p>$<?= $cart['price'] ?></p>
            </div>
          <?php endforeach ?>

          <hr class="mt-0" />
          <div class="d-flex justify-content-between mb-3 pt-1">
            <h6 class="font-weight-medium">Subtotal</h6>
            <h6 class="font-weight-medium">$<?= $_SESSION['cart_total'] ?></h6>
          </div>
          <div class="d-flex justify-content-between">
            <h6 class="font-weight-medium">Shipping</h6>
            <h6 class="font-weight-medium">$10</h6>
          </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
          <div class="d-flex justify-content-between mt-2">
            <h5 class="font-weight-bold">Total</h5>
            <h5 class="font-weight-bold">$<?= $_SESSION['cart_total'] + 10 ?></h5>
          </div>
        </div>
      </div>
      <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
          <h4 class="font-weight-semi-bold m-0">Payment</h4>
        </div>
        <div class="card-body">
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="payment" id="paypal" />
              <label class="custom-control-label" for="paypal">Paypal</label>
            </div>
          </div>
          <div class="form-group">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="payment" id="directcheck" />
              <label class="custom-control-label" for="directcheck">Direct Check</label>
            </div>
          </div>
          <div class="">
            <div class="custom-control custom-radio">
              <input type="radio" class="custom-control-input" name="payment" id="banktransfer" />
              <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
            </div>
          </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
          <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3 place-order">
            Place Order
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Checkout End -->
<script>
  var baseURL = "http://localhost/techshopproject2";
</script>
<script src="./js/checkout.js"></script>
<?php include "./layouts/footer.php" ?>