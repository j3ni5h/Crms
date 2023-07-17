  <?php
  session_start();
  include '../config/conn.php';
  if (!isset($_SESSION['username'])) {
  }

  if (isset($_POST['report'])) {
    $username     = ($_SESSION['username']);
    $ctype        = $_POST['ctype'];
    $caddress     = $_POST['caddress'];
    $cmessage     = $_POST['cmessage'];
    $identity_num = $_POST['identity_num'];
    $identity_img = $_FILES['identity_img']['name'];
    $status       = "pending";

    $sql     = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TAble_schema = 'crms' AND TABLE_NAME = 'report'";
    $Execute = mysqli_query($conn, $sql);
    if (mysqli_num_rows($Execute) > 0) {
      while ($row = $Execute->fetch_assoc()) {
        $rid = $row['AUTO_INCREMENT'];
      }
    }

    if ($username != "" && $username != null && $ctype != "#" && $caddress != "" && $caddress != null && $cmessage != "" && $cmessage != null && $identity_num != "" && $cmessage != null) {

      $rep_query     = "INSERT INTO report (`ctype`,`caddress`,`cmessage`, `identity_num`, `identity_img`,`status`) VALUES ('$ctype','$caddress','$cmessage',' $identity_num','$identity_img','$status')";
      $rep_query_run = mysqli_query($conn, $rep_query);
      $sql           = "SELECT id FROM users WHERE username='$username'";
      $execute       = mysqli_query($conn, $sql);
      if (mysqli_num_rows($execute) > 0) {
        while ($row = $execute->fetch_assoc()) {
          $id = $row['id'];
        }
      }
      $sql                = "INSERT INTO display VALUES ('$id','$rid')";
      $display_querry_run = mysqli_query($conn, $sql);
      if ($rep_query_run && $display_querry_run) {
        move_uploaded_file($_FILES["identity_img"]["tmp_name"], "../admin/uploads/identity_img/" . $_FILES["identity_img"]["name"]);
        echo "<script>alert('Woo! Report Reported Successfully.')</script>";
        header("Location: ../complaint.php");
      } else {
        echo "<script>alert('Woo! Something Wrong Went.')</script>";
        header("Location: ../report_a_crime.php");
      }
    } else {
      header("Location: ../report_a_crime.php");
      echo "<script>alert('Not Success')</script>";
    }
  }

  ?>