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
  <title>Update Report</title>
  <link rel="stylesheet" href="assects/css/mge_acc.css" />
</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <!-- Content -->

  <?php
  if (isset($_GET['rid'])) {
    $rid  = $_GET['rid'];
    $query     = "SELECT * FROM report WHERE rid='$rid' LIMIT 1";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      foreach ($query_run as $row) {
  ?>
        <div class="content">

          <div class="container">
            <div class="title">
              Update Report
            </div>

            <form action="crud/report_u.php" method="POST">
              <div class="form">
                <input type="hidden" name="rid" class="input" value="<?php echo $row['rid']; ?>">

                <div class="inputfield">
                  <label>Crime Type</label>
                  <input type="text" name="ctype" class="input" value="<?php echo $row['ctype']; ?>">
                </div>
                <div class="inputfield">
                  <label>Address</label>
                  <input type="text" name="caddress" class="input" value="<?php echo $row['caddress']; ?>">
                </div>
                <div class="inputfield">
                  <label>Message</label>
                  <input class="input" name="cmessage" value="<?php echo $row['cmessage']; ?>">
                </div>
                <div class="inputfield">
                  <label>Identity Number</label>
                  <input type="text" name="identity_num" class="input" value="<?php echo $row['identity_num']; ?>" disabled>
                </div>
                <div class="inputfield">
                  <input type="submit" onclick="validation()" name="UpdateReport" value="Update" class="btn">
                </div>
            </form>

      <?php
      }
    }
  }
      ?>



          </div>
        </div>

        </div>

        <?php include 'includes/footer.php'; ?>

</body>

<!-- Header.js -->
<script src="assects/js/header.js"></script>
<script>
  function menuToggle() {
    const toggleMenu = document.querySelector(".acc-menu");
    toggleMenu.classList.toggle("active");
  }
</script>

</html>