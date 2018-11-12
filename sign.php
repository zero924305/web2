<?php
  include_once "partials/partialsSignup.php";
  include_once "partials/header.php";

  $page_title="Signup";
?>
<div class="container marketing">
  <hr class="featurette-divider">
  <div class="col-md-7">
    <h2 class="featurette-heading">
      Sign Up
    </h2>
  </div>
  <?php if(isset($result)) echo $result; ?>
    <hr class="featurette-divider">
  <div class="row featurette">
<form method="post" action="">
  <div class="form-group">
    <label for="emailField">Email:</label>
    <input type="email" value="<?=(isset($_POST['email']) ? $_POST['email']:'')?>" class="form-control" name="email" id="emailField" placeholder="Email">
  </div>
  <div class="form-group">
    <label for="usernameField">Username:</label>
    <input type="text" value="<?=(isset($_POST['username']) ? $_POST['username']:'')?>" class="form-control" name="username" id="usernameField" placeholder="username">
  </div>
  <div class="form-group">
    <label for="passwordField">Password:</label>
    <input type="password" value="" class="form-control" name="password" id="passwordField" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="passwordField">Confirm Password:</label>
    <input type="password" value="" class="form-control" name="confirm_password" id="confirm_passwordField" placeholder="Confirm Password">
  </div>
  <button type="submit" name="signupButton" value="Signup" class="btn btn-success pull-right">Signup</button>
</form>
</div>
  <hr class="featurette-divider">
<?php
  include_once "partials/footer.php";
?>
