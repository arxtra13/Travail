<?php

require("./includes/database.php");
require("./includes/function.php");

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <title>Log In</title>
  <link rel="stylesheet" href="login.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="login_container">
    <div class="heading">
      <img src="favicon.png" alt="logo" class="logo" />
      <h1>Log <span class="in">In</span></h1>
    </div>
    <form method="post" action="">
      <?php login() ?>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email<span> *</span></label>
        <br>
        <input name="login_email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password<span> *</span></label>
        <br>
        <input name="login_password" type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Remember Me</label>
      </div>
      <div class="button">
        <button name="login_submit" type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
</body>

</html>