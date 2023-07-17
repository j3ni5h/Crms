<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php'; ?>

  <title> Report A Crime </title>
  <link rel="stylesheet" href="assects/css/report__a_crime.css" />

</head>

<body>

  <?php include 'includes/nav-af-login.php'; ?>

  <!-- Content -->

  <div class="content">

    <div class="container">
      <div class="title">
        Report A Crime
      </div>
      <form action="crud/report_r.php" method="POST" enctype="multipart/form-data">
        <div class="form">
          <div class="inputfield">
            <label>Crime Type</label>
            <div class="custom_select">
              <select name="ctype" id="crime_type" required>
                <option value="#" selected="selected">Select crime Type</option>
                <option value="Murder">Murder</option>
                <option value="Rape">Rape</option>
                <option value="Harassment">Harassment</option>
                <option value="Cyber Bully">Cyber Bully</option>
                <option value="Privacy Voilation">Privacy Voilation</option>
                <option value="Stolen">Stolen</option>
                <option value="Rabbery">Rabbery</option>
                <option value="Threten">Threten</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="inputfield">
            <label>Address</label>
            <input type="text" name="caddress" class="input" required>
          </div>
          <div class="inputfield">
            <label>Message</label>
            <textarea class="textarea" name="cmessage" required></textarea>
          </div>
          <div class="inputfield">
            <label>Identity Number</label>
            <input type="text" name="identity_num" class="input" required>
          </div>
          <div class="inputfield">
            <label>Upload Identity</label>
            <input type="file" name="identity_img" class="input" required>
          </div>
          <div class="inputfield">
            <input type="submit" onclick="validation()" name="report" value="Report" class="btn">
          </div>
      </form>
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