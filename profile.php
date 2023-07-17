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

  <title>My Profile</title>
  <link rel="stylesheet" href="assects/css/my-profile-1.css" />
</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <!-- Content -->
  <div class="content">
    <?php
    $currentUser = $_SESSION['username'];
    $sql         = "SELECT * FROM users WHERE username = '$currentUser'";

    $getUser = mysqli_query($conn, $sql);

    if ($getUser) {
      if (
        mysqli_num_rows($getUser) >
        0
      ) {
        while ($row = mysqli_fetch_array($getUser)) {
    ?>
          <div class="profile">
            <div class="prof-left">
              <img src="assects/img/user-a-p.png" alt="user" width="100" />
              <h4><?php echo $row['name']; ?></h4>
              <p>Victim</p>
            </div>
            <div class="prof-right">
              <div class="prof-info">
                <h3>Information</h3>
                <div class="prof-info_data">
                  <div class="prof-data">
                    <h4>Name</h4>
                    <p><?php echo $row['name']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Username</h4>
                    <p><?php echo $row['username']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Email</h4>
                    <p><?php echo $row['email']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Gender</h4>
                    <p><?php echo $row['gender']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Address</h4>
                    <p><?php echo $row['address']; ?></p>
                  </div>
                  <div class="prof-data">
                    <h4>Phone</h4>
                    <p>+977 <?php echo $row['phone']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    <?php
        }
      }
    }
    ?>
  </div>

  <?php include 'includes/footer.php'; ?>
</body>

<!-- Header.js -->
<script src="js/header.js"></script>
<script>
  function menuToggle() {
    const toggleMenu = document.querySelector(".acc-menu");
    toggleMenu.classList.toggle("active");
  }
</script>

</html>