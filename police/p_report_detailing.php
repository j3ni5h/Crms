<?php

session_start();
// include "config/conn.php";
if (!isset($_SESSION['police_username'])) {
 header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'includes/header.php'; ?>
  <title>Document</title>
</head>
<link rel="stylesheet" href="profile-admin.css" />

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
            <h1 class="m-0">Reporting</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">


              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form class="row g-6" method="POST" action="config/reporting.php" enctype="multipart/form-data">
                      <div class="col-md-9">
                        <div class="form-group ">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter name">
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Report Detail</label>
                          <textarea class="form-control" name="detail"></textarea>
                        </div>
                      </div>

                      <div class="col-12">
                        <button type="submit" name="reporting" class="btn btn-primary">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>







      <?php include 'includes/footer.php'; ?>

</html>