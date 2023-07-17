<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />


  <link rel="stylesheet" href="assects/font-awesome/css/all.css" />


  <title> Welcome | <?php echo $_SESSION['name']; ?></title>
  <link rel="stylesheet" href="assects/css/welcome.css" />
</head>

<body>
  <nav class="navbar">
    <div class="nav-content">
      <div class="logo">
        <a href="welcome.php">CRS</a>
      </div>
      <center>
        <div class="menu-list">
          <div class="icon cancel-btn">
            <i class="fas fa-times"></i>
          </div>
          <li><a href="welcome.php">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
      </center>
      <li>
        <!-- My Account -->
        <div class="acc-action">
          <div class="acc-profile" onclick="menuToggle();">
            <img src="assects/img/user-a.png" alt="" />
          </div>

          <div class="acc-menu">
            <h3>
              <?php echo $_SESSION['name']; ?>
              <div>Victim</div>
            </h3>
            <ul>
              <li>
                <span class="icons-size"><i class="fas fa-user"></i></span>
                <a href="profile.php">My Profile</a>
              </li>
              <li>
                <span class="icons-size"><i class="fas fa-pen-to-square"></i></span>
                <a href="manage-acc.php">Manage Account</a>
              </li>
              <li>
                <span class="icons-size"><i class="fas fa-list"></i></span>
                <a href="complaint.php">My Complaint</a>
              </li>
              <li>
                <span class="icons-size"><i class="fas fa-right-from-bracket"></i></span>
                <a href="loggout.php">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>


  <!-- Banner -->
  <section class="section-1">
    <div class="image">
      <img src="assects/img/bg1.png" alt="">
    </div>
    <div class="banner-header">
      <h1> CRS </h1>
      <p>Report And Be Safe!!!!! </p>
      <div class="banner-btn">
        <a href="report_a_crime.php"><span></span>Report</a>
      </div>

    </div>
  </section>

  <div class="m-content">
    <!-- Content -->
    <!-- About Section -->
    <section id="about">
      <div class="about">
        <div class="title">
          <h1>About Us</h1>
        </div>

        <div class="about-content">
          <div class="img-section">
            <img src="assects/img/hammer-ge0f4f0ffb_1920.jpg" alt="" />
          </div>
          <div class="article">
            <!-- <h2></h2> -->
            <p>

              This is a crime reportomg system which mainly focused in filing a complaints of a victim. In this system user/victim just need to report a complaint and they can view their report and see the status. Our Admins will analize if the report is autherize or geniune Admin will grant the report to Police. Police simply investigate the crime ang give the status to the victim with related remarks Since,Our system is simple and our user interface is easy to use

            </p>
            <div class="banner-btn">
              <a href="content.html"><span></span>Read More</a>
            </div>
          </div>
        </div>
    </section>

    <hr />

    <!-- Contact -->
    <section id="contact">
      <div class="contact">
        <div class="title">
          <h1>Contact Us</h1>
        </div>

        <div class="contact-wrap">
          <div class="contact-in">
            <h1>Contact Info</h1>
            <h2><i class="fa fa-phone" aria-hidden="true"></i> Phone</h2>
            <p>100 / 985-1283012</p>
            <h2><i class="fa fa-envelope" aria-hidden="true"></i> Email</h2>
            <p>policereport@nepalpolice.gov</p>
            <h2>
              <i class="fa fa-map-marker" aria-hidden="true"></i> Address
            </h2>
            <p>Nepal police station, Teku, Kathmandu</p>
          </div>

          <div class="contact-in">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6711041684716!2d85.30119051453808!3d27.696558432574097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19a277c17ddf%3A0x4da29d79c27dc594!2sNepal%20police%20station!5e0!3m2!1sen!2snp!4v1642918675289!5m2!1sen!2snp" width="100%" height="auto" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer>
    <div class="footer-content">
      <h3>CRS</h3>
      <p>
        This is a crime reportomg system which mainly focused in filing a complaints of a victim. In this system user/victim just need to report a complaint and they can view their report and see the status. Our Admins will analize if the report is autherize or geniune Admin will grant the report to Police. Police simply investigate the crime ang give the status to the victim with related remarks Since,Our system is simple and our user interface is easy to use

      </p>
      <ul class="socials">
        <li>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-twitter"></i></a>
        </li>
        <li>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </li>
      </ul>
    </div>
    <div class="footer-bottom">
      <p>
        copyright &copy;2022 CRS designed by
        <span>Jenish Maharjan & Abhinash Upreti</span>
      </p>
    </div>
  </footer>
</body>

<!-- js -->
<script src="assects/js/stickynav.js"></script>
<script>
  function menuToggle() {
    const toggleMenu = document.querySelector(".acc-menu");
    toggleMenu.classList.toggle("active");
  }
</script>

</html>