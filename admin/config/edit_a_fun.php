<?php
session_start();
include '../config/conn.php';

// Edit and Update User
if (isset($_POST['updateUser'])) {

  $admin_id  = $_POST['admin_id'];
  $name      = $_POST['name'];
  $username  = $_POST['username'];
  $email     = $_POST['email'];
  $password  = $_POST['password'];
  $address   = $_POST['address'];

  $query = "UPDATE admin SET name='$name', username='$username',email='$email', password='$password',address='$address' WHERE aid='$admin_id' ";

  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    $_SESSION['status'] = "User Updated Successfully";
    header("Location: ../a_profile.php");
  } else {
    header("Location: ../a_edit_profile.php");
  }
}
