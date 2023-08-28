<?php include "./layouts/header.php" ?>

<!-- Registration Start -->
<div class="container-fluid py-5">
  <div class="wrapper">
    <h2>Registration</h2>
    <form method="post" id="registration-form">
      <div class="input-box">
        <input type="text" placeholder="Enter your name" id="name" name="name" required />
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter your email" id="email" name="email" required />
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" id="password" name="password" required />
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" id="confirm-password" name="confirm_password" required />
      </div>
      <div class="policy">
        <input id="checkbox" type="checkbox" />
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" id="submit-registration" value="Register Now" />
      </div>
      <div class="text">
        <h3>Already have an account? <a href="login.php">Login now</a></h3>
      </div>
    </form>
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
  var baseURL = "http://localhost/techshopproject2";
</script>
<script src="./js/register.js"></script>

<?php include "./layouts/footer.php" ?>