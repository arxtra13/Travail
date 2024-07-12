<?php

require("./includes/database.php");
require("./includes/function.php");

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travail</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
</head>

<body>
  <div class="hero">

    <nav>
      <img src="favicon.png" alt="logo" class="logo" />

    </nav>
    <video autoplay loop muted plays-inline class="bcg">
      <source src="background.mp4" />
    </video>
    <div class="container">


      <h1>Travail</h1>
      <p>Explore the world with us!</p>
      <div>
        <button class="button">
          <a href="login.php">Log In</a>
        </button>
        <button class="button">
          <a href="signup.php">Sign up</a>
        </button>

      </div>
    </div>
  </div>
</body>

</html>