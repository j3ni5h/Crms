<?php

include 'conn.php';

session_start();

if (isset($_POST['signup'])) {
  $name      = $_POST['name'];
  $username  = $_POST['username'];
  $email     = $_POST['email'];
  $password  = $_POST['password'];

  // Email already exist
  $user_query     = "SELECT * FROM admin WHERE email='$email'";
  $user_query_run = mysqli_query($conn, $user_query);
  if (!$user_query_run->num_rows > 0) {

    //   Data insert Query
    $user_query = "INSERT INTO police (name, username, email, password)
         VALUES ('$name','$username', '$email', '$password')";
    $user_query_run = mysqli_query($conn, $user_query);
    if ($user_query_run) {
      print_r("<script>alert('Police Regestered Successfully!!');</script>");

      header("Location: ../index.php");
    } else {
      header("Location: ../police_reg.php");
    }
  }
} else {
}
