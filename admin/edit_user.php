<?php
session_start();
include "config/conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <?php include 'includes/header.php'; ?>
  <title>Document</title>
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
                <a href="user_mgnt.php" class="btn btn-danger btn-sm float-right">Back</a>
              </div>

              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <form class="row g-6" method="POST" action="admin_crud/user_u.php" enctype="multipart/form-data"">
<?php
if (isset($_GET['user_id'])) {
  $user_id   = $_GET['user_id'];
  $query     = "SELECT * FROM users WHERE id='$user_id' LIMIT 1";
  $query_run = mysqli_query($conn, $query);

  if (mysqli_num_rows($query_run) > 0) {
    foreach ($query_run as $row) {

?>
                              <input type=" text" name="user_id" class="form-control" placeholder="Enter name" value="<?php echo $row['id']; ?>">

                      <div class="col-md-6">
                        <div class="form-group ">
                          <label>Name</label>
                          <input type="text" name="name" class="form-control" placeholder="Enter name" value="<?php echo $row['name']; ?>">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label>username</label>
                          <input type="text" name="username" class="form-control" placeholder="Enter username" value="<?php echo $row['username']; ?>">
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
                      <div class="form-group col-md-6">
                        <label>Confirm Password</label>
                        <input type="password" name="cpassword" class="form-control" id="exampleInputPassword1" placeholder="Password" value="<?php echo $row['password']; ?>">
                      </div>
                      <div class="form-group col-md-6">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" placeholder="Enter Address" value="<?php echo $row['address']; ?>">
                      </div>
                      <div class="form-group col-md-3">
                        <label> phone</label>
                        <input type="text" name="phone" class="form-control" placeholder="Enter phone number" value="<?php echo $row['phone']; ?>">
                      </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary" name="updateUser">Update</button>
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