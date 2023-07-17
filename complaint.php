<?php

session_start();
include "config/conn.php";
if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php'; ?>
  <title> My Complaint</title>
  <link rel="stylesheet" href="assects/css/complaint-rep.css" />


</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <div class="container">

    <!-- Content -->

    <div class="container-main">
      <h1>My Complaint</h1>
    </div>
  </div>
  <div>
    <table class="rwd-table">
      <tbody>
        <tr>
          <th>RID No.</th>
          <th>Crime Type</th>
          <th>Report</th>
          <th> Crime Address</th>
          <th>Date</th>
          <th>Status</th>
          <th>Remarks</th>
          <th>Action</th>
        </tr>
        <?php
        $currentUser = $_SESSION['username'];
        $sql         = "SELECT id FROM users WHERE username='$currentUser'";
        $execute     = mysqli_query($conn, $sql);
        if (mysqli_num_rows($execute) > 0) {
          while ($row = $execute->fetch_assoc()) {
            $id = $row['id'];
          }
        }

        $sql       = "SELECT U.id, R.rid, R.ctype, R.caddress, R.cmessage, R.dt, R.status, R.remarks FROM report R RIGHT JOIN display D ON R.rid=D.rid RIGHT JOIN users U ON D.id=U.id WHERE U.id = '$id'";
        $getReport = mysqli_query($conn, $sql);
        if ($getReport) {
          if (mysqli_num_rows($getReport) > 0) {
            while ($row = mysqli_fetch_array($getReport)) {
        ?>

              <tr>
                <td data-th="RID No.">
                  <?php echo $row['rid']; ?>
                </td>
                <td data-th="Crime Type">
                  <?php echo $row['ctype']; ?>
                </td>
                <td data-th="Report">
                  <?php echo $row['cmessage']; ?>
                </td>
                <td data-th="Crime Address">
                  <?php echo $row['caddress']; ?>
                </td>
                <td data-th="Date">
                  <?php echo $row['dt']; ?>
                </td>
                <td data-th="Status"> <?php echo $row['status']; ?> </td>
                <td data-th="remarks"><?php echo $row['remarks']; ?></td>
                <td>
                  <a href="update_report.php?rid=<?php echo $row['rid']; ?>">Edit</a>

                  <a href="crud/report_d.php?rid=<?php echo $row['rid']; ?>" style="background-color: #C82333;" onclick="return checkdelete()">Delete</a>




                  <!-- <a href="crud/report_d.php?id=$result[id]"> <input type="submit" name="Delete" class="delete" style="background-color: #C82333;" onclick="return checkdelete() "></a> -->
                </td>
              </tr>
        <?php
            }
          }
        }
        ?>

        <!-- <tr>
            <td data-th="SNo."> 2 </td>
            <td data-th="CID Number">  00002  </td>
            <td data-th="Crime Type">  Rubbery </td>
            <td data-th="Report"> Rubb my golden ring </td>
            <td data-th="Crime Address"> KTM </td>
            <td data-th="Date"> 2022/3/22 09:26PM </td>
            <td data-th="Status"> Receive </td>
          </tr> -->
      </tbody>
    </table>
  </div>

  <?php include 'includes/footer.php'; ?>

</body>
<script>
  function checkdelete() {
    return confirm('Are You sure you want to delete ');
  }
</script>

</html>