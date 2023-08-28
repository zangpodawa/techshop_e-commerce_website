<?php
session_start();
include "./redirect_to_login.php";
include "./layouts/header.php";
//include "./database/queries/fetch_cart_items.php";
include "./database/queries/fetch_cart_items.php";
// $carts = array();
// print_r($categories);die;
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping cart</h1>
    <div class="d-inline-flex">
      <p class="m-0"><a href="">Home</a></p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Shopping cart</p>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Cart Start -->
<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <div class="col-lg-8 table-responsive mb-5">
      <table class="table table-bordered text-center mb-0">
        <thead class="bg-secondary text-dark">
          <tr>
            <th>Products</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
          </tr>
        </thead>
        <tbody class="align-middle">
          <?php foreach ($carts as $cart) : ?>
            <?php $image = json_decode($cart["images"], true)  ?>
            <tr>
              <td class="align-middle">
                <img src="img/<?= $image[0] ?>" alt="" style="width: 50px" />
                <?= $cart['name'] ?>
              </td>
              <td class="align-middle"><?= $cart['currency'] . $cart['price'] ?></td>
              <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-minus" data-price="<?= $cart['price'] ?>" data-cart-id="<?= $cart['cart_id'] ?>" data-currency="<?= $cart['currency'] ?>">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <input type="text" readonly class="form-control form-control-sm bg-secondary text-center" id="cart-quantity-<?= $cart['cart_id'] ?>" value="<?= $cart['quantity'] ?>" />
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-plus" data-price="<?= $cart['price'] ?>" data-cart-id="<?= $cart['cart_id'] ?>" data-currency="<?= $cart['currency'] ?>">
                      <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="align-middle" id="total-<?= $cart['cart_id'] ?>"><?= $cart["currency"] . $cart["quantity"] * $cart['price'] ?></td>
              <td class="align-middle">
                <button class="btn btn-sm btn-primary remove-cart" data-cart-id="<?= $cart['cart_id'] ?>">
                  <i class="fa fa-times"></i>
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
    <div class="col-lg-4">
      <div class="card border-secondary mb-5">
        <div class="card-header bg-secondary border-0">
          <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-between mb-3 pt-1">
            <h6 class="font-weight-medium">Subtotal</h6>
            <h6 class="font-weight-medium" id="subtotal">$<?= $cart_total ?></h6>
          </div>
          <div class="d-flex justify-content-between">
            <h6 class="font-weight-medium">Shipping</h6>
            <h6 class="font-weight-medium"> <?= count($carts) > 0 ? '$10' : 0 ?></h6>
          </div>
        </div>
        <div class="card-footer border-secondary bg-transparent">
          <div class="d-flex justify-content-between mt-2">
            <h5 class="font-weight-bold">Total</h5>
            <h5 class="font-weight-bold" id="total">$<?= count($carts) > 0 ? ($cart_total + 10) : 0 ?></h5>
          </div>
          <a href="checkout.php"><button class="btn btn-block btn-primary my-3 py-3">
              Proceed To Checkout
            </button>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Cart End -->
<script src="./js/notify.js"></script>
<script src="./js/notify.min.js"></script>
<script src="./js/cart.js"></script>

<?php include "./layouts/footer.php" ?>