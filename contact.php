<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
  <?php include 'includes/header.php'; ?>

  <title>C.R.S - Contact</title>
  <!-- Local css -->
  <link rel="stylesheet" href="assects/css/contactus.css" />

</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <div class="content">
    <div class="contact">
      <div class="contact-wrap">
        <div class="contact-in">
          <h1>Contact Info</h1>
          <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
          <p>100 / 985-1283012</p>
          <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
          <p>policereport@nepalpolice.gov</p>
          <h2><i class="fa fa-map-marker" aria-hidden="true"></i> Address</h2>
          <p>Nepal police station, Teku, Kathmandu</p>
        </div>

        <div class="contact-in">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6711041684716!2d85.30119051453808!3d27.696558432574097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a277c17ddf%3A0x4da29d79c27dc594!2sNepal%20police%20station!5e0!3m2!1sen!2snp!4v1642918675289!5m2!1sen!2snp" width="100%" height="auto" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
      </div>
    </div>
  </div>


  <?php include 'includes/footer.php'; ?>

</body>

<!-- Slider.js -->
<script src="assects/js/header.js"></script>

</html>