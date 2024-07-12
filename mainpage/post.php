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
<?php
global $connect;
$query = " SELECT * FROM post WHERE id='{$_GET['post']}'";
$result = mysqli_query($connect, $query);
$row = mysqli_fetch_assoc($result);
$select_user_query = "SELECT * FROM user_details WHERE id='{$row['post_user_id']}'";
$select_user_result = mysqli_query($connect, $select_user_query);
$user = mysqli_fetch_assoc($select_user_result);


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="post.css">
  <title><?= $row['title'] ?></title>
</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-paper-plane"></i> Travail </h1>
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="post_add.php">Post</a></li>
      <li><a href="aboutus.php">About</a></li>
      <a href="dashboard.php"><img src="../images/<?= $image ?>" alt="profile"></a>
    </ul>
  </nav>
  <div class="container">
    <div class="post-container">
      <h1 class="title"><?= $row['title'] ?></h1>
      <div class="content">

        <h2 class="author"><span class="by">by </span> <?= $user['fullname'] ?></h2>
        <p class="content"><?= $row['content'] ?></p>
      </div>
      <div class="imagee">
        <img id='content-image' src='../images/<?= $row['post_img'] ?>' alt=''>
      </div>
      <p class="added">Posted at <?= $row['added'] ?></p>
    </div>
    <div class="comment">
      <form action="" method="post" enctype="multipart/form-data">
        <?php comment_post() ?>
        <!-- <label id="write" for="">Write a comment...</label> <br> -->
        <div class="section">
          <input type="text" name="post_comment" id="cmt" placeholder="Leave your thoughts..">
          <button type="submit" name="comment_submit" class="comment_submit"><i class="fa-solid fa-paper-plane comment_plane"></i></button>
        </div>
      </form>
    </div>
    <div class="show_comment">
      <h1>Comments</h1>
      <?= show_comment() ?>
    </div>

  </div>
</body>

</html>