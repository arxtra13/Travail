<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: ../index.php');
}
unset($_SESSION);
session_destroy();
header("Location: ../index.php");
