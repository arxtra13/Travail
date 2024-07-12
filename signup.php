<?php

require("./includes/database.php");
require("./includes/function.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SignUp</title>
  <link rel="stylesheet" href="signup.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="signup_container">


    <div class="heading">
      <img src="favicon.png" alt="logo" class="logo" />
      <h1>Sign <span class="in">Up</span></h1>
    </div>



    <form class="row g-3 needs-validation" method="post" action="">
      <?php signup() ?>
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">Full Name<span> *</span></label><br>
        <input name="fname" type="text" class="form-control" id="validationCustom01" required>

      </div>
      <div class="one-line">
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label ">Email<span> *</span></label><br>
          <input name="signup_email" type="text" class="form-control same" id="validationCustom02" required>

        </div>
        <div class="col-md-4">
          <label for="validationCustom02" class="form-label phone">Phone<span> *</span></label><br>
          <input name="signup_phone" type="tel" class="form-control same1" id="validationCustom02" minlength="10" maxlength="10" pattern="\d*" title="Enter your phone number" required>

        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Password<span> *</span></label><br>
        <input name="password" type="password" class="form-control" id="validationCustom02" required>

      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Confirm Password<span> *</span></label><br>
        <input name="confirm_password" type="password" class="form-control" id="validationCustom02" required>

      </div>

      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
          <label class="form-check-label" for="invalidCheck">
            Agree to terms and conditions
          </label>

        </div>
      </div>
      <div class="col-12 button">
        <button name="signup_submit" class="btn btn-primary" type="submit">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>