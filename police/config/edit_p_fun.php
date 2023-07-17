<?php
session_start();
include 'conn.php';

// Edit and Update User
if (isset($_POST['updatePolice'])) {

  $police_id = $_POST['police_id'];
  $name      = $_POST['name'];
  $username  = $_POST['username'];
  $email     = $_POST['email'];
  $password  = $_POST['password'];
  //  $address   = $_POST['address'];
  $post = $_POST['post'];

  $query = "UPDATE police SET name='$name', username='$username',email='$email', password='$password', post='$post' WHERE pid='$police_id' ";

  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    $_SESSION['status'] = "User Updated Successfully";
    header("Location: ../p_profile.php");
  } else {
    header("Location: ../p_edit_profile.php");
  }
}
