<?php
session_start();
include '../config/conn.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <style>
    div.dataTables_wrapper {
      width: 100%;
      margin: 0 auto;
    }
  </style>

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

    <!-- Delete Button Popup Model -->
    <div class="modal" id="DeleteModel" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete Users</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="admin_crud/user_d.php" method="POST">
            <input type="hidden" name="delete_id" class="delete_user_id">

            <div class="modal-body">
              <p>Modal body text goes here.</p>
            </div>
            <div class="modal-footer">
              <button type="submit" name="DeleteUserBtn" class="btn btn-primary">Yes Delete</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>

        </div>
      </div>
    </div>
    </form>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Users</h1>
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
                <h3 class="card-title"> Registered Users</h3>
                <!-- <a href="add_user.php" class="btn btn-primary btn-sm float-right">Add User</a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped display nowrap" style="width:100%">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Information</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query     = "SELECT * FROM users";
                  $query_run = mysqli_query($conn, $query);

                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {

                  ?>
                      <tr>
                        <td>
                          <?php echo $row['id']; ?>
                        </td>
                        <td>
                          <?php echo $row['name']; ?>
                        </td>
                        <td>
                          <div style="line-height: 0.5;">
                            <p> <strong> Username: </strong> <?php echo $row['username']; ?></p>
                            <p> <strong>Email: </strong> <?php echo $row['email']; ?> </p>
                            <p> <strong>Gender: </strong><?php echo $row['gender']; ?></p>
                            <p> <strong>Address: </strong><?php echo $row['address']; ?></p>
                            <p> <strong>Phone:</strong><?php echo $row['phone']; ?></p>
                          </div>
                        </td>
                        <td>
                          <?php echo $row['dt']; ?>
                        </td>
                        <td>
                          <a href="edit_user.php?user_id=<?php echo $row['id']; ?>" class="btn btn-info btn-sm">Edit</a>
                          <button type="button" name="DeleteUserBtn" value="<?php echo $row['id']; ?>" class="btn btn-danger btn-sm deletebtn">Delete</button>
                        </td>
                      </tr>
                    <?php
                    }
                  } else {
                    ?>
                    <tr>
                      <td>No Record Found</td>
                    </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>


  </div>
  </div>

</body>
<?php include 'includes/footer.php'; ?>
<!-- Delete popup Script -->
<script>
  $(document).ready(function() {
    $('.deletebtn').click(function(e) {
      e.preventDefault();

      let user_id = $(this).val();
      $('.delete_user_id').val(user_id);
      $('#DeleteModel').modal('show');
    });
  });
</script>


</html>