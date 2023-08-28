<?php session_start() ?>
<?php include "./layouts/header.php" ?>
<?php include "./database/queries/fetch_products.php" ?>

<!-- Products Start -->
<div class="container-fluid pt-5">
  <div class="text-center mb-4">
    <h2 class="section-title px-5">
      <span class="px-2">What's Hot!</span>
    </h2>
  </div>
  <div class="row px-xl-5 pb-3">
    <?php foreach ($products as $product) : ?>
      <?php $image = json_decode($product["images"], true) ?>
      <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
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
            <a class="btn btn-sm text-dark p-0 add-to-cart" data-product-id="<?= $product['id'] ?>"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To
              Cart</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>

  </div>
</div>
<!-- Products End -->

<!-- Subscribe Start -->
<div class="container-fluid bg-secondary my-5">
  <div class="row justify-content-md-center py-5 px-xl-5">
    <div class="col-md-6 col-4 py-5">
      <h2>
        <span class="bg-secondary px-1">Get instant deals & exclusive offers!</span>
      </h2>
    </div>
    <div class="col-md-6 col-8 py-5">
      <form action="">
        <div class="input-group">
          <input type="text" class="form-control border-white p-4" placeholder="Email Goes Here" />
          <div class="input-group-append">
            <button class="btn btn-primary px-4">Subscribe</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Subscribe End -->
<script src="./js/notify.js"></script>
<script src="./js/notify.min.js"></script>

<?php include "./layouts/footer.php" ?>
<script>
  var currentUserId = "<?= $_SESSION['user_id'] ?>";
  var baseURL = "http://localhost/techshopproject2";
</script>
<script src="./js/index.js"></script>