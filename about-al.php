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

  <title>C.R.S - About</title>
  <link rel="stylesheet" href="assects/css/about.css" />
</head>

<body>
  <?php include 'includes/nav-af-login.php'; ?>

  <div class="content">
    <section>
      <div class="about">
        <div class="about-containt">
          <div class="about-aricle">
            <h2>About CRS</h2>
            <p>
              This is a crime reportomg system which mainly focused in filing a complaints of a victim. In this system user/victim just need to report a complaint and they can view their report and see the status. Our Admins will analize if the report is autherize or geniune Admin will grant the report to Police. Police simply investigate the crime ang give the status to the victim with related remarks Since,Our system is simple and our user interface is easy to use.
            </p>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </section>
  </div>


  <?php include 'includes/footer.php'; ?>

</body>

</html>