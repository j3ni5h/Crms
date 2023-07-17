<?php
session_start();
include '../config/conn.php';

// Edit and Update User
if (isset($_POST['update'])) {

 $name      = $_POST['name'];
 $username  = $_POST['username'];
 $email     = $_POST['email'];
 $password  = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);
 $address   = $_POST['address'];
 $phone     = $_POST['phone'];

 $query = "UPDATE users SET name='$name', username='$username',email='$email', password='$password',address='$address', phone='$phone' WHERE username='$username' ";

 $query_run = mysqli_query($conn, $query);
 if ($query_run) {
  $_SESSION['status'] = "User Updated Successfully";
  header("Location: ../profile.php");
 } else {
  header("Location: ../manage-acc.php");
 }
}
