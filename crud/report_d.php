<?php
session_start();
include '../config/conn.php';

// Delete User

$id = $_GET['rid'];
$query     = "DELETE FROM report WHERE rid='$id'";
$query_run = mysqli_query($conn, $query);
if ($query_run) {
  header("Location: ../complaint.php");
} else {
  header("Location: ../complaint.php");
}
