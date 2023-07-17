<?php

session_start();

if (!isset($_SESSION['admin_username'])) {
 header("Location:index.php");
} ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'includes/header.php'; ?>
  <title>Adnin - Dashboard</title>
</head>

<body>
  <?php
include 'includes/topbar.php';
include 'includes/sidebar.php';
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin Dashboard</h1>
            <p class="m-0">Welcome to Admin Dashboard</p>
          </div><!-- /.col -->
          <div class="col-sm-6">

          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->









    <?php include 'includes/footer.php'; ?>

</html>