<?php
session_start();
if (!isset($_SESSION['admin_username'])) {
  header("Location:index.php");
}
include 'config/conn.php';

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
  <title>Admin - Registered Report </title>
</head>

<body>
  <?php
  include 'includes/topbar.php';
  include 'includes/sidebar.php';
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Declined Button Popup Model -->
    <div class="modal" id="NotGrandModel" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confiration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST">

            <div class="modal-body">
              <p>Are you sure you want to Decline permisiion for user id</p>
              <input type="hidden" name="rid" class="update_rid">
              <div>
              </div>
              <div class="col-md-12">
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" name="PopupModelDecline" class="btn btn-primary" value="Confirm"> </input>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
          <?php
          include '../config/conn.php';
          if (isset($_POST['PopupModelDecline'])) {
            $id  = $_POST['rid'];
            $sql = "UPDATE report SET status='Decline' WHERE rid='$id'";
            try {
              $ps = $conn->prepare($sql);
              $ps->execute();
            } catch (Exception $e) {
              echo $e;
            }
          }
          ?>
        </div>
      </div>
    </div>

    <div class="modal" id="GrandModel" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Confiration</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="POST">
            <div class="modal-body">
              <p>Are you sure you want to grant permisiion for user id</p>
              <input type="hidden" name="rid" class="update_rid">
              <div>
              </div>
              <div class="col-md-12">
              </div>
            </div>
            <div class="modal-footer">
              <input type="submit" name="PopupModelgrand" class="btn btn-primary" value="Confirm"> </input>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </form>
          <?php
          include '../config/conn.php';
          if (isset($_POST['PopupModelgrand'])) {
            $id  = $_POST['rid'];
            $sql = "UPDATE report SET status='Granted' WHERE rid='$id'";
            try {
              $ps = $conn->prepare($sql);
              $ps->execute();
            } catch (Exception $e) {
              echo $e;
            }
          }
          ?>
        </div>
      </div>
    </div>


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registered Report</h1>
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
                  $query     = "SELECT * FROM report";
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
                          <img src="<?php echo "uploads/identity_img/" . $row['identity_img']; ?>" alt="<?php echo $row['identity_img']; ?>" height="100" width="100">
                        </td>
                        <td>
                          <?php echo $row['dt']; ?>
                        </td>
                        <td>
                          <?php echo $row['status']; ?>
                        </td>
                        <td>
                          <button type="button" name="PopupModel1" value="<?php echo $row['rid']; ?>" class="btn btn-success btn-sm deletebtn1">Grant</button>

                          <button type="button" name="PopupModel2" value="<?php echo $row['rid']; ?>" class="btn btn-danger btn-sm deletebtn2">Not Grant</button>
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
    $('.deletebtn1').click(function(e) {
      e.preventDefault();
      let report_id = $(this).val();
      $('.update_rid').val(report_id);
      $('#GrandModel').modal('show');
    });
  });
</script>

<script>
  $(document).ready(function() {
    $('.deletebtn2').click(function(e) {
      e.preventDefault();
      let report_id = $(this).val();
      $('.update_rid').val(report_id);
      $('#NotGrandModel').modal('show');
    });
  });
</script>

</html>