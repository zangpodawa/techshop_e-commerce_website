<?php
session_start();
include "./layouts/header.php";
$category_id = 2;
include "./database/queries/fetch_products.php";
?>


<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">Computers</h1>
    <div class="d-inline-flex">
      <p class="m-0"><a href="">Home</a></p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Computers</p>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Shop Start -->
<div class="container-fluid pt-5">
  <div class="row px-xl-5">
    <!-- Shop Product Start -->
    <div class="col-lg-12 col-md-12">
      <div class="row pb-3">
        <?php foreach ($products as $product) : ?>
          <?php $image = json_decode($product["images"], true) ?>

          <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
            <div class="card product-item border-0 mb-4">
              <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                <img class="img-fluid w-100" src="img/<?= $image[0] ?>" alt="" />
              </div>
              <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                <h6 class="text-truncate mb-3"><?= $product['name'] ?></h6>
                <div class="d-flex justify-content-center">
                  <h6><?= $product['currency'] . $product['price'] ?></h6>
                  <h6 class="text-muted ml-2"><del><?= $product['currency'] . $product['price'] ?></del></h6>
                </div>
              </div>
              <div class="card-footer d-flex justify-content-between bg-light border">
                <a href="detail.php?id=<?= $product['id'] ?>" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                <a class="btn btn-sm text-dark p-0 add-to-cart" data-product-id="<?= $product['id'] ?>"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add
                  To Cart</a>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <!-- Shop Product End -->
  </div>
</div>
<!-- Shop End -->

<script src="./js/notify.js"></script>
<script src="./js/notify.min.js"></script>
<script>
  var currentUserId = "<?= $_SESSION['user_id'] ?>";
  var baseURL = "http://localhost/techshopproject2";
</script>
<script src="./js/computer.js"></script>

<?php include "./layouts/footer.php" ?>