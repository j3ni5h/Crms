<?php
include('../config/conn.php');

// Edit and Update Report
if (isset($_POST['UpdateReport'])) {
  $rid      = $_POST['rid'];
  $ctype    = $_POST['ctype'];
  $cmessage = $_POST['cmessage'];
  $caddress = $_POST['caddress'];

  $query     = "UPDATE report SET ctype='$ctype',cmessage='$cmessage',caddress='$caddress'WHERE rid='$rid'";
  $query_run = mysqli_query($conn, $query);
  if ($query_run) {
    header("Location: ../complaint.php");
  } else {
    header("Location: ../update_report.php");
  }
}
