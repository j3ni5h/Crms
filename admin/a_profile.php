<?php

session_start();
include "config/conn.php";
if (!isset($_SESSION['admin_username'])) {
 header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'includes/header.php'; ?>
  <title>Admin - My Profile</title>
</head>
<link rel="stylesheet" href="a_profile.css" />

<body>
  <?php
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <!-- Content -->
      <div class="content">
        <div class="profile">
          <?php
$currentUser = $_SESSION['admin_username'];
$sql         = "SELECT * FROM admin WHERE username = '$currentUser'";

$getUser = mysqli_query($conn, $sql);

if ($getUser) {
 if (
  mysqli_num_rows($getUser) >
  0
 ) {
  while ($row = mysqli_fetch_array($getUser)) {
   ?>
          <div class="prof-left">
            <img src="assects/img/admin.png" alt="Admin" width="100" />
            <h4><?php echo $row['name']; ?></h4>
            <p>Admin</p>
            <a href="a_edit_profile.php?admin_id=<?php echo $row['aid']; ?>" class="btn btn-primary btn-sm">Edit Profile</a>

          </div>
          <div class="prof-right">
            <div class="prof-info">
              <h3>Information</h3>
              <div class="prof-info_data">
                  <div class="prof-data">
                    <h4>Name</h4>
                    <p><?php echo $row['name']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Username</h4>
                    <p><?php echo $row['username']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Email</h4>
                    <p><?php echo $row['email']; ?></p>
                  </div>
                <?php
}
 }
}
?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>







  <?php include 'includes/footer.php'; ?>

</html>