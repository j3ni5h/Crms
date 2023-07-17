<?php
include "config/conn.php";
session_start();
if (!isset($_SESSION['police_username'])) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'includes/header.php'; ?>
  <title>Police - Update Profile</title>
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
            <h1 class="m-0">User Management</h1>
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
              <div class="card-header">
                <h3 class="card-title">Edit - Registered Users</h3>
                <a href="p_profile.php" class="btn btn-danger btn-sm float-right">Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form class="row g-6" method="POST" action="config/edit_p_fun.php" enctype="multipart/form-data"">
<?php
if (isset($_GET['police_id'])) {
  $police_id = $_GET['police_id'];
  $query     = "SELECT * FROM police WHERE pid='$police_id' LIMIT 1";
  $query_run = mysqli_query($conn, $query);

  if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {
?>
   <input type=" hidden" name="police_id" class="form-control" placeholder="Enter name" value="<?php echo $row['pid']; ?>" disabled>

                      <div class="col-md-6">
                        <div class="form-group ">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $row['name']; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>username</label>
                          <input type="text" name="username" class="form-control" placeholder="Enter username" value="<?php echo $row['username']; ?>" disabled>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email" value="<?php echo $row['email']; ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['password']; ?>">
                      </div>
                      <!-- <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['password']; ?>">
                      </div> -->
                      <!-- <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $row['address']; ?>">
                      </div> -->
                      <div class="form-group col-md-6">
                        <label>Post</label>
                        <input type="text" name="post" class="form-control" placeholder="Enter post" value="<?php echo $row['post']; ?>">
                      </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="updatePolice">Update</button>
                  </div>

            <?php
          }
        } else {
          echo "<h4>No Record Found</h4>";
        }
      }

            ?>
            </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>

</body>

<?php include 'includes/footer.php'; ?>

</html>