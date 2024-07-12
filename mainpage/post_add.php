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
  <title>Create Post</title>
  <link rel="stylesheet" href="post_add.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-paper-plane"></i> Travail </h1>
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="">Post</a></li>
      <li><a href="aboutus.php">About</a></li>
      <a href="dashboard.php"><img class="top-corner" src="../images/<?= $image ?>" alt="profile"></a>

    </ul>
  </nav>
  <div class="container">
    <div class="heading">
      <h1 class="create_post">Create<span class="purple_part"> Post</span></h1>
    </div>
    <form method="post" action="" enctype="multipart/form-data">
      <?php post() ?>
      <label for="">Title of your blog</label> <br>
      <input name="title" id="title" type="text" required> <br>
      <label for="">Write your blog</label> <br>
      <textarea name="content" id="" rows="9" cols="60" required></textarea> <br>
      <input name="post_image" type="file">
      <div class="button">
        <button name="post_submit" type="submit" class="btn btn-primary"><span><i class="fa-solid fa-plus"></i></span> Add Post</button>
      </div>
    </form>
  </div>
</body>

</html>