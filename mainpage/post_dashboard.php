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
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/7dc99611d3.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="post_dashboard.css">
  <title>Manage your posts</title>
  <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">

</head>

<body>
  <nav>
    <h1><i class="fa-solid fa-user-tie"></i>&nbsp;Dashboard </h1>
    <ul>
      <li><a href="main.php">Home</a></li>
      <li><a href="dashboard.php">Profile</a></li>
      <li><a href="post_dashboard.php">History</a></li>

      <li><a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i></a></li>
    </ul>
  </nav>
  <div class="post_heading">
    <h1>Post <span>History</span></h1>
  </div>
  <div class="post_table">
    <table border="#2b192e">
      <thead>
        <tr>
          <th class="title-col">Title</th>
          <th class="post-col">Post</th>
          <th class="image-col">Image</th>
          <th class="added-col">Created at</th>
        </tr>
      </thead>
      <tbody>
        <?= post_management() ?>
      </tbody>

    </table>
  </div>
</body>

</html>