<?php
session_start();
include 'conn.php';
if (!isset($_SESSION['police_username'])) {
  header("Location: index.php");
}

if (isset($_POST['PopupModel1'])) {
  $status  = $_POST['status'];
  $remarks = $_POST['remarks'];
  $id      = $_POST['rid'];

  $search = mysqli_query($conn, 'SELECT remarks from report WHERE rid="' . $id . '"');
  if (mysqli_num_rows($search) > 0) {
    while ($row = $search->fetch_assoc()) {
      $detail = $row['remarks'];
    }
  }

  $detail = $detail . ' ' . $remarks;
  // echo $detail;
  header("Location: ../p_report_mgnt.php");



  $sql     = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TAble_schema = 'crms' AND TABLE_NAME = 'police'";
  $Execute = mysqli_query($conn, $sql);
  if (mysqli_num_rows($Execute) > 0) {
    while ($row = $Execute->fetch_assoc()) {
      $pid = $row['AUTO_INCREMENT'];
    }
    if ($status != "#" && $remarks != "") {
      $updateStatus  = "UPDATE report SET status='$status' WHERE rid='$id'";
      $updateRemarks = "UPDATE report SET remarks='$detail' WHERE rid='$id'";
      try {
        $ps = $conn->prepare($updateStatus);
        $ps->execute();
        $pp = $conn->prepare($updateRemarks);
        $pp->execute();
      } catch (Exception $e) {
        echo $e;
        header("Location: ../p_report_mgnt.php");
      }
    } else {
      header("Location: ../p_report_mgnt.php");
    }
  }
}
