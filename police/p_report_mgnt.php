<?php
session_start();
include 'config/conn.php';
if (!isset($_SESSION['police_username'])) {
  header("Location: index.php");
}

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
  <title>Police - Granted Reports</title>
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
            <h5 class="modal-title">Confiration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>


          <form action="config/p_report_fun.php" method="POST">
            <div class="modal-body">
              <h4>ID</h4>
              <input type="text" name="rid" class="update_rid">
              <div>
                <h4>Status</h4>
                <select class="form-select" aria-label="Default select example" name="status">
                  <option selected value="#">Open this select menu</option>
                  <option value="investigating">Investigating</option>
                  <option value="completed">Completed</option>
                </select>
              </div>
              <div class="col-md-9">
                <h4>Remarks</h4>

              </div>
              <div class="col-md-12">
                <div class="form-group">
                  <label>Crime Detail</label>
                  <textarea class="form-control" name="remarks"></textarea>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" name="PopupModel1" class="btn btn-primary">Save </button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Report Management</h1>
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
                <h3 class="card-title"> Registered Report</h3>

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
                    <th>Report</th>
                    <th>Address</th>
                    <th>Identity Number</th>
                    <th>Identity Images</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $query     = "SELECT * FROM report WHERE status='Granted' OR status='investigating' OR status='completed'";
                  $query_run = mysqli_query($conn, $query);

                  if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $row) {

                  ?>
                      <tr>
                        <td>
                          <?php echo $row['rid']; ?>
                        </td>
                        <td>
                          <?php echo $row['cmessage']; ?>
                        </td>
                        <td>
                          <?php echo $row['caddress']; ?>
                        </td>
                        <td>
                          <?php echo $row['identity_num']; ?>
                        </td>
                        <td>
                          <img src="<?php echo "../admin/uploads/identity_img/" . $row['identity_img']; ?>" alt="<?php echo $row['identity_img']; ?>" height="100" width="100">
                        </td>
                        <td>
                          <?php echo $row['dt']; ?>
                        </td>
                        <td>
                          <?php echo $row['status']; ?>
                        </td>
                        <td>
                          <button type="button" value="<?php echo $row['rid']; ?>" class="btn btn-success btn-sm deletebtn">Action</button>
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

      let report_id = $(this).val();
      $('.update_rid').val(report_id);
      $('#DeleteModel').modal('show');
    });
  });
</script>


</html>