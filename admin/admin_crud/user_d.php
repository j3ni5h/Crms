<?php
session_start();
include '../config/conn.php';

// Delete User
if (isset($_POST['delete_id'])) {
  $user_id = $_POST['delete_id'];

  $query     = "DELETE FROM users WHERE id='$user_id'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    $_SESSION['status'] = "User Deleted Successfully";
    header("Location: ../user_mgnt.php");
  } else {
    header("Location: ../user_mgnt.php");
  }
}
