<?php

include 'conn.php';

session_start();

if (isset($_POST['login'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql    = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);

  $_SESSION['admin_username'] = $row['username'];
  $_SESSION['admin_name']     = $row['name'];
  $_SESSION['admin_email']    = $row['email'];

  header("Location: ../dashboard.php");
 } else {
  echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
 }
}
