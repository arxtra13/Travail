<?php

function signup()
{
  global $connect;

  if (isset($_POST['signup_submit'])) {
    $fname = filter_var($_POST['fname'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_var($_POST['signup_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $phone = filter_var($_POST['signup_phone'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $confirm_password = filter_var($_POST['confirm_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $check = "SELECT * FROM user_details WHERE email ='$email' OR phone ='$phone'";
    $check_result = mysqli_query($connect, $check);
    if (mysqli_num_rows($check_result) > 0) {
      echo "<p style='color:red;'>User already exists</p>";
    } else if ($password == $confirm_password) {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      $query = "INSERT INTO user_details(fullname, email, password, phone) VALUES('$fname', '$email', '$hash', '$phone' )";
      $result =  mysqli_query($connect, $query);
      header("Location: login.php");
    } else {
      echo "<p style='color:red;'>Password doesn't match<p>";
    }
  }
}

function login()
{
  global $connect;
  if (isset($_POST['login_submit'])) {
    $email = filter_var($_POST['login_email'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_var($_POST['login_password'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $query = "SELECT * FROM user_details WHERE email = '$email' ";
    $result = mysqli_query($connect, $query);
    if (mysqli_num_rows($result) > 0) {
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row['password'])) {
        $_SESSION['user_id'] = $row['id'];
        header('Location: ./mainpage/main.php');
      } else {
        echo "<p style='color:red;'>Password doesn't match</p>";
      }
    } else {
      echo "<p style='color:red;'>User doesnt' exist</p>";
    }
  }
}

function profile_picture()
{
  global $connect;
  if (isset($_POST['pfp_submit'])) {
    $file_name = $_FILES['pfp_image']['name'];
    $tempname = $_FILES['pfp_image']['tmp_name'];
    $folder = '../images/' . $file_name;
    $query = "UPDATE user_details SET image_url = '$file_name' WHERE id = '{$_SESSION['user_id']}'";
    $result = mysqli_query($connect, $query);
    if ($result) {
      if (move_uploaded_file($tempname, $folder)) {
        header("Location: dashboard.php");
      }
    } else {
      echo "File was not uploaded";
    }
  }
}
function post()
{
  global $connect;

  if (isset($_POST['post_submit'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $content = filter_var($_POST['content'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $post_image = $_FILES['post_image']['name'];
    $tempname = $_FILES['post_image']['tmp_name'];
    $folder = '../images/' . $post_image;
    move_uploaded_file($tempname, $folder);

    $query = "INSERT INTO post( post_user_id , title , content , post_img) VALUES( '{$_SESSION['user_id']}','$title' , '$content' , '$post_image')";
    $result = mysqli_query($connect, $query);
    header("Location: main.php");
  }
}

function show_post()
{
  global $connect;
  $query = " SELECT * FROM post";
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    if ($row['post_img'] == NULL) $image = "defaulbcg.png";
    else $image = $row['post_img'];
    $select_user_query = "SELECT * FROM user_details WHERE id='{$row['post_user_id']}'";
    $select_user_result = mysqli_query($connect, $select_user_query);
    $user = mysqli_fetch_assoc($select_user_result);
    echo "
      <a href='post.php?post={$row['id']}' class='card'>
      <img id='content-image' src='../images/$image' alt='post image'>
      <div class='post-content'>
        <h1> {$row['title']} </h1>
        <p>{$user['fullname']}</p>
      </div>
    </a>
    ";
  }
}

function comment_post()
{
  global $connect;
  if (isset($_POST['comment_submit'])) {
    $comment = filter_var($_POST['post_comment'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $post_id = $_GET['post'];
    $comment_query = "INSERT INTO comments(comment, post_id, post_user_id) VALUES('$comment', '$post_id', '{$_SESSION['user_id']}')";
    $comment_result = mysqli_query($connect, $comment_query);
    header("Location: post.php?post=$post_id");
  }
}

function show_comment()
{
  global $connect;
  $query = "SELECT * FROM comments WHERE post_id = {$_GET['post']} ORDER BY comment_id DESC";
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    $img_query = "SELECT * FROM user_details WHERE id = '{$row['user_id']}' ";
    $img_result = mysqli_query($connect, $img_query);
    $img_row = mysqli_fetch_assoc($img_result);
    if ($row['image_url'] == NULL) $image = "defaultpfp.jpg";
    else $image = $row['image_url'];

    $select_user_query = "SELECT * FROM user_details WHERE id='{$row['post_user_id']}'";
    $select_user_result = mysqli_query($connect, $select_user_query);
    $user = mysqli_fetch_assoc($select_user_result);
    echo
    "
    <div class='show_comment'>
    <div class='upper'>
        <img src='../images/{$user['image_url']}' alt='' class='pfp_comment'>
        <p class='author_name'>{$user['fullname']}</p>
      </div>
      <p class='cmnt'>
        {$row['comment']}</p>
        </div>";
  }
}
function post_management()
{
  global $connect;
  $query = "SELECT * FROM post WHERE post_user_id='{$_SESSION['user_id']}'";
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_assoc($result)) {
    echo "
    <tr>
          <td class='title-col'>{$row['title']}</td>
          <td class='post-col'>{$row['content']}</td>
          <td class='image-col'><img src='../images/{$row['post_img']}' alt='' class='pfp_comment'></td>
          <td class='created-col'>{$row['added']}</td>
          
        </tr>
    ";
  }
}
