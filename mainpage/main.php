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
  <title>Travail</title>
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="main.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-paper-plane"></i> Travail </h1>
    <ul>
      <li><a href="">Home</a></li>
      <li><a href="post_add.php">Post</a></li>
      <li><a href="aboutus.php">About</a></li>
      <a href="dashboard.php"><img class="top-corner" src="../images/<?= $image ?>" alt="profile"></a>
    </ul>
  </nav>
  <div class="container">
    <?php show_post() ?>
  </div>
</body>

</html>