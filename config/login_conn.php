<?php

include 'conn.php';

session_start();

if (isset($_SESSION['username'])) {
  header("Location: welcome.php");
}

if (isset($_POST['login'])) {
  $username = $_POST['username'];
  $password = md5($_POST['password']);

  $sql    = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);

    $_SESSION['username'] = $row['username'];
    $_SESSION['name']     = $row['name'];
    $_SESSION['email']    = $row['email'];
    $_SESSION['gender']   = $row['gender'];
    $_SESSION['address']  = $row['address'];
    $_SESSION['phone']    = $row['phone'];

    header("Location: ../welcome.php");
  } else {
    echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    header("Location: ../login.php");
  }
}
