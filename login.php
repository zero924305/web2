<?php
  include_once "partials/partialsLogin.php";
  include_once "partials/header.php";

  $page_title="Login";
?>
<div class="container marketing">
  <hr class="featurette-divider">
  <div class="col-md-7">
    <h2 class="featurette-heading">
      Login
    </h2>
  </div>
  <div class="row featurette">
<form method="post" action="">
  <div class="form-group">
    <label for="usernameField">Username</label>
    <input type="text" class="form-control" name="username" value="<?=(isset($_POST['username']) ? $_POST['username']:'')?>" id="usernameField" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="passwordField">Password</label>
    <input type="password" class="form-control" name="password" value="" id="passwordField" placeholder="Password">
  </div>
  <div>

  </div>
  <a href="forgotpassword.php">Forgot Password?</a>

  <button type="submit" name="loginButton" value="Signin" class="btn btn-success pull-right">Sign in</button>
</form>
</div>
  <hr class="featurette-divider">
<?php include_once "partials/footer.php";?>
