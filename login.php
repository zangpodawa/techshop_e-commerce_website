<?php session_start();
if ($_SESSION["user_id"]) {
  header("Location: index.php");
}
?>
<?php include "./layouts/header.php" ?>
<!-- Login Start -->
<div class="container-fluid py-2">
  <div class="container">
    <div class="wrapper">
      <div class="title"><span>Login Form</span></div>
      <form method="post">
        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" placeholder="Email" id="email" name="email" required>
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" placeholder="Password" id="password" name="password" required>
        </div>
        <div class="pass"><a href="#">Forgot password?</a></div>
        <div class="row button">
          <input type="submit" id="login" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="register.php">Signup now</a></div>
      </form>
    </div>
  </div>
</div>
</div>
<!-- Login End -->

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
<script src="./js/login.js"></script>

<?php include "./layouts/footer.php" ?>