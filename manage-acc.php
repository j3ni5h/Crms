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
  <title>C.R.S - Manage Account</title>
  <link rel="stylesheet" href="assects/css/mge_acc.css" />
</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <!-- Content -->

  <?php
  $currentUser = $_SESSION['username'];
  $sql         = "SELECT * FROM users WHERE username = '$currentUser'";

  $getUser = mysqli_query($conn, $sql);

  if ($getUser) {
    if (mysqli_num_rows($getUser) > 0) {
      while ($row = mysqli_fetch_array($getUser)) {
  ?>
        <div class="content">

          <div class="container">
            <div class="title">
              Manage Account
            </div>

            <form action="crud/user_u.php" method="POST">
              <div class="form">

                <div class="inputfield">
                  <label>Full Name: </label>
                  <input type="text" class="input" name="name" value="<?php echo $row['name']; ?>" />
                </div>

                <div class="inputfield">
                  <label>Username: </label>
                  <input type="text" class="input" name="username" value="<?php echo $row['username']; ?>" />
                </div>

                <div class="inputfield">
                  <label>Email Address</label>
                  <input type="text" class="input" name="email" value="<?php echo $row['email']; ?>" />
                </div>

                <div class="inputfield">
                  <label>Password</label>
                  <input type="password" name="password" class="input psw" />
                </div>

                <div class="inputfield inputfield1">
                  <label>Confirm Password</label>
                  <input type="password" name="cpassword" class="input psw1" />
                </div>

                <div class="inputfield">
                  <label>Gender</label>
                  <input type="text" class="input" name="email" value="<?php echo $row['gender']; ?>" />
                </div>

                <div class="inputfield">
                  <label> Address </label>
                  <input type="text" class="input" name="address" value="<?php echo $row['address']; ?>" />
                </div>

                <div class="inputfield">
                  <label>Phone Number</label>
                  <input type="text" class="input" name="phone" value="<?php echo $row['phone']; ?>" />
                </div>

                <div class="inputfield">
                  <input type="submit" name="update" value="Update" class="btn" />
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