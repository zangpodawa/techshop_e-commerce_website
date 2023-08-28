<?php
session_start();
include "./redirect_to_login.php";
include "./layouts/header.php";
include "./database/queries/fetch_wish_lists.php";
?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">Wishlist</h1>
    <div class="d-inline-flex">
      <p class="m-0"><a href="">Home</a></p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Wishlist</p>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Wishlist Start -->
<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <div class="col-lg-12 table-responsive mb-5">
      <table class="table table-bordered text-center mb-0">
        <thead class="bg-secondary text-dark">
          <tr>
            <th>Products</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Total</th>
            <th>Remove</th>
            <th>Add to cart</th>
          </tr>
        </thead>
        <tbody class="align-middle">
          <?php foreach ($wishlists as $wishlist) : ?>
            <?php $image = json_decode($wishlist["images"], true)  ?>
            <tr>
              <td class="align-middle">
                <img src="img/<?= $image[0] ?>" alt="" style="width: 50px" />
                <?= $wishlist['name'] ?>
              </td>
              <td class="align-middle"><?= $wishlist['currency'] . $wishlist['price'] ?></td>
              <td class="align-middle">
                <div class="input-group quantity mx-auto" style="width: 100px">
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-minus decrement-quantity" data-price="<?= $wishlist['price'] ?>" data-currency="<?= $wishlist['currency'] ?>" data-id="<?= $wishlist['wishlist_id'] ?>">
                      <i class="fa fa-minus "></i>
                    </button>
                  </div>
                  <input type="text" readonly class="form-control form-control-sm bg-secondary text-center" id="quantity-<?= $wishlist['wishlist_id'] ?>" value="<?= $wishlist['quantity'] ?>" />
                  <div class="input-group-btn">
                    <button class="btn btn-sm btn-primary btn-plus increment-quantity" data-price="<?= $wishlist['price'] ?>" data-currency="<?= $wishlist['currency'] ?>" data-id="<?= $wishlist['wishlist_id'] ?>">
                      <i class="fa fa-plus"></i>
                    </button>
                  </div>
                </div>
              </td>
              <td class="align-middle" id="total-amount-<?= $wishlist['wishlist_id'] ?>"><?= $wishlist["currency"] . $wishlist["quantity"] * $wishlist['price'] ?></td>
              <td class="align-middle">

                <button class="btn btn-sm btn-primary remove-wishlist-item" data-id="<?= $wishlist['wishlist_id'] ?>">
                  <i class="fa fa-times"></i>
                </button>
              </td>
              <td class="align-middle">
                <button class="btn btn-sm btn-primary add-wishlist-to-cart" data-product-id="<?= $wishlist['product_id'] ?>" data-id="<?= $wishlist['wishlist_id'] ?>">
                  <i class="fa fa-cart-plus"></i>
                </button>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- Wishlist End -->

<?php include "./layouts/footer.php" ?>
<script src="./js/notify.js"></script>
<script src="./js/notify.min.js"></script>
<script src="./js/wishlist.js"></script>