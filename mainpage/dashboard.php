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
  <title>Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-user-tie"></i>&nbsp;Dashboard </h1>
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="">Profile</a></li>
      <li><a href="post_dashboard.php">History</a></li>
      <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
  </nav>
  <div class="container">
    <div class="left-container">
      <div class="image_pfp">
        <img src="../images/<?= $image ?>" alt="profile">
      </div>
      <div class="input">
        <form method="post" action="" enctype="multipart/form-data">
          <?php profile_picture() ?>
          <input name="pfp_image" type="file">
          <div class="button">
            <button name="pfp_submit" type="submit" class="btn btn-primary">Add Picture</button>
          </div>
        </form>

      </div>
    </div>
    <div class="right-container">
      <h1>Personal <span class="details">Details</span></h1>
      <div class="display_name">
        <p class="heading">Author's Name</p>
        <p class="show"><?= $row['fullname'] ?></p>
      </div>
      <div class="display_email">
        <p class="heading">Email</p>
        <p class="show"><?= $row['email'] ?></p>
      </div>
      <div class="display_phone">
        <p class="heading">Phone</p>
        <p class="show"><?= $row['phone'] ?></p>
      </div>
    </div>
  </div>
</body>

</html>