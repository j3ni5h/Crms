<?php

include 'conn.php';

session_start();

if (isset($_POST['register'])) {
   $name      = $_POST['name'];
   $username  = $_POST['username'];
   $email     = $_POST['email'];
   $password  = md5($_POST['password']);
   $cpassword = md5($_POST['cpassword']);
   $gender    = $_POST['gender'];
   $address   = $_POST['address'];
   $phone     = $_POST['phone'];

   if (strlen($phone) == 10) {
      if (strlen($password) > 6) {
         if ($password == $cpassword) {
            $sql1    = "SELECT * FROM users WHERE email='$email'";
            $result1 = mysqli_query($conn, $sql1);
            if (!$result1->num_rows > 0) {
               $sql    = "SELECT * FROM users WHERE username='$username'";
               $result = mysqli_query($conn, $sql);
               if (!$result->num_rows > 0) {
                  $sql = "INSERT INTO users (name, username, email, password, gender, address, phone) VALUES ('$name','$username', '$email', '$password', '$gender', '$address', '$phone')";
                  $result = mysqli_query($conn, $sql);
                  if ($result) {
                     echo "<script>alert('Wow! User Registration Completed.')</script>";
                     header("location:../login.php");
                  } else {
                     echo "<script>alert('Woops! Something  Went Wrong.')</script>";
                  }
               } else {
                  echo "<script>alert('Woops! Ussername Already Exists.')</script>";
               }
            } else {
               echo "<script>alert('Woops! Email or  Already Exists.')</script>";
            }
         } else {
            echo "<script>alert('Password Not Matched.')</script>";
         }
      } else {
         echo "<script>alert('Password Must be more then 6 Character.')</script>";
      }
   } else {
      echo "<script>alert('Phone Number Must be 10 Digit.')</script>";
   }
}
