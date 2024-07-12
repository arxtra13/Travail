<?php

require("../includes/database.php");
require("../includes/function.php");
if (!isset($_SESSION['user_id'])) {
  header('Location: ../index.php');
}
?>
<?php
$query = "SELECT * FROM user_details WHERE id = '{$_SESSION['user_id']}' ";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
if ($row['image_url'] == NULL) $image = "defaultpfp.jpg";
else $image = $row['image_url'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="aboutus.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

  <title>About Us</title>
</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-paper-plane"></i> Travail </h1>
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="post_add.php">Post</a></li>
      <li><a href="">About</a></li>
      <a href="dashboard.php"><img class="top-corner" src="../images/<?= $image ?>" alt="profile"></a>
    </ul>
  </nav>
  <div class="container">
    <h1>About <span>Us</span></h1>
    <div class="para">
      <p>
        &nbsp; Welcome to Travail, your ultimate destination for inspiring travel stories, tips, and guides from around the world. Founded by a group of passionate travelers, our mission is to ignite your wanderlust and help you create unforgettable travel experiences. <br>
        <br>
        &nbsp; At Travail, we believe that travel is more than just visiting new places; it's about immersing yourself in diverse cultures, discovering hidden gems, and forging connections with people from all walks of life. Our team of seasoned explorers is dedicated to sharing authentic travel narratives, practical advice, and stunning photography to fuel your adventures. <br>
        <br>
        &nbsp; Our blog covers a wide range of travel topics, including solo travel, family vacations, luxury escapes, budget-friendly trips, and off-the-beaten-path destinations. Whether you're a seasoned globetrotter or planning your first trip, you'll find valuable insights and inspiration to help you make the most of your journeys. <br>
        <br>
        &nbsp; Join us as we explore the world, one destination at a time. Let's embark on this exciting adventure together and make every journey a story worth telling.
      </p>

    </div>
    <div class="end">
      <p class="ht">Happy travels!</p>
      <p class="ttt">The Travail Team</p>
    </div>

  </div>
</body>

</html>