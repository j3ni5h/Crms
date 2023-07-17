<?php
session_start();
include '../config/conn.php';

// Edit and Update User
if (isset($_POST['updateUser'])) {

 $user_id   = $_POST['user_id'];
 $name      = $_POST['name'];
 $username  = $_POST['username'];
 $email     = $_POST['email'];
 $password  = md5($_POST['password']);
 $cpassword = md5($_POST['cpassword']);
 $address   = $_POST['address'];
 $phone     = $_POST['phone'];

 $query = "UPDATE users SET name='$name', username='$username',email='$email', password='$password',address='$address', phone='$phone' WHERE id='$user_id' ";

 $query_run = mysqli_query($conn, $query);
 if ($query_run) {
  $_SESSION['status'] = "User Updated Successfully";
  header("Location: ../user_mgnt.php");
 } else {
  header("Location: ../user_mgnt.php");
 }
}
