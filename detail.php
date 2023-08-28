<?php
session_start();
include "./layouts/header.php";
include "./database/queries/fetch_single_product.php";
?>
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
  <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
    <h1 class="font-weight-semi-bold text-uppercase mb-3">
      Product Detail
    </h1>
    <div class="d-inline-flex">
      <p class="m-0"><a href="">Home</a></p>
      <p class="m-0 px-2">-</p>
      <p class="m-0">Product Detail</p>
    </div>
  </div>
</div>
<!-- Page Header End -->

<!-- Shop Detail Start -->
<div class="container-fluid py-5">
  <div class="row px-xl-5">
    <div class="col-lg-5 pb-5">
      <div id="product-carousel" class="carousel slide" data-ride="carousel">

        <div class="carousel-inner border">
          <?php $images = json_decode($product["images"], true) ?>
          <?php $count = 0; ?>
          <?php foreach ($images as $img) : ?>
            <?php $count++; ?>
            <div class="carousel-item <?= $count === 1 ? 'active' : '' ?>">
              <img class="w-100 h-100" src="img/<?= $img ?>" alt="Image" />
            </div>
          <?php endforeach ?>

        </div>
        <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
          <i class="fa fa-2x fa-angle-left text-dark"></i>
        </a>
        <a class="carousel-control-next" href="#product-carousel" data-slide="next">
          <i class="fa fa-2x fa-angle-right text-dark"></i>
        </a>
      </div>
    </div>

    <div class="col-lg-7 pb-5">
      <h3 class="font-weight-semi-bold"><?= $product['name'] ?></h3>
      <div class="d-flex mb-3">
        <div class="text-primary mr-2">
          <small class="fas fa-star"></small>
          <small class="fas fa-star"></small>
          <small class="fas fa-star"></small>
          <small class="fas fa-star-half-alt"></small>
          <small class="far fa-star"></small>
        </div>
        <small class="pt-1">(10 Reviews)</small>
      </div>
      <h3 class="font-weight-semi-bold mb-4"><?= $product['currency'] . $product['price'] ?></h3>
      <p class="mb-4">
        <?= $product['description'] ?>
      </p>
      <div class="d-flex align-items-center mb-4 pt-2">
        <div class="input-group quantity mr-3" style="width: 130px">
          <div class="input-group-btn">
            <button class="btn btn-primary btn-minus">
              <i class="fa fa-minus"></i>
            </button>
          </div>
          <input type="text" readonly class="form-control bg-secondary text-center" id="quantity" value="1" />
          <div class="input-group-btn">
            <button class="btn btn-primary btn-plus">
              <i class="fa fa-plus"></i>
            </button>
          </div>
        </div>
        <button class="btn btn-primary px-3 add-to-cart" data-product-id="<?= $product['id'] ?>">
          <i class="fa fa-shopping-cart mr-1"></i> Add To Cart
        </button>
        &nbsp;
        <button class="btn btn-primary px-3 add-to-wishlist" data-product-id="<?= $product['id'] ?>">
          <i class="fa fa-heart mr-1"></i> Add To Wishlist
        </button>

      </div>


      <div class="d-flex align-items-center mb-4 pt-2" style="width: 450px">

        <input type="text" class="px-3 form-control" id="comment-body" placeholder="Leave your review here"> <button class="btn btn-primary px-3" data-product-id="<?= $product['id'] ?>" id="add-comment">Submit</button>

      </div>

      <div id="comment-wrapper">

      </div>
    </div>
  </div>
</div>
<!-- Shop Detail End -->

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
<script>
  var productId = "<?= $product['id'] ?>";
</script>
<script src="./js/detail.js"></script>

<?php include "./layouts/footer.php" ?>