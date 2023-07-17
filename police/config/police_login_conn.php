<?php

include 'conn.php';

session_start();

if (isset($_POST['login'])) {
 $username = $_POST['username'];
 $password = $_POST['password'];

 $sql    = "SELECT * FROM police WHERE username='$username' AND password='$password'";
 $result = mysqli_query($conn, $sql);
 if ($result->num_rows > 0) {
  $row = mysqli_fetch_assoc($result);

  $_SESSION['police_username'] = $row['username'];
  $_SESSION['police_name']     = $row['name'];
  $_SESSION['police_email']    = $row['email'];
  $_SESSION['police_post']     = $row['post'];

  header("Location: ../p_dashboard.php");
 } else {
  echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
 }
}
