<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assects/css/nav-aft-login.css">
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
          <li><a href="about-al.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
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
    <div class="banner-header"></div>
  </section>
</body>

<script src="assects/js/stickynav.js"></script>

</html>