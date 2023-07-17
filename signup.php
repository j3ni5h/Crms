<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php' ?>
  <title>C.R.S - Registratin</title>
  <link rel="stylesheet" href="assects/css/signup.css" />

</head>

<body>

  <section>
    <div class="form-wrapper">
      <div class="back">
        <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
      </div>
      <h2>Registration Form</h2>
      <div class="form-container">
        <form action="config/signup_conn.php" method="POST">
          <div class="input-name">
            <i class="fa fa-user icon"></i>
            <input type="text" placeholder="Full Name" class="inputfield" name="name" required />
            <span>
              <i class="fa fa-user icon"></i>
              <input type="text" placeholder="username " class="inputfield" name="username" required> </span>
          </div>

          <div class="input-name">
            <i class="fa fa-envelope icon"></i>
            <input type="email" placeholder="Email" class="text-name" name="email" required />
          </div>

          <div class="input-name">
            <i class="fa fa-lock icon"></i>
            <input type="password" placeholder="Password" class="inputfield" name="password" required />

            <span>
              <i class="fa fa-lock icon"></i>
              <input type="password" placeholder="Confirm Password " class="inputfield" name="cpassword" required> </span>
          </div>

          <div class="input-name">
            <input type="radio" class="radio-button" name="gender" value="Male" required />
            <label style="margin-right: 30px; font-size: 15px">Male</label>
            <input type="radio" class="radio-button" name="gender" value="Female" />
            <label style="margin-right: 30px; font-size: 15px">Female</label>
          </div>

          <div class="input-name">
            <i class="fa fa-phone icon"></i>
            <input type="number" class="text-name" placeholder="Contact Number" name="phone" required />
          </div>

          <div class="input-name">
            <i class="fa-solid fa-location-dot icon"></i>
            <input type="text" class="text-name" placeholder="Address" name="address" required />
          </div>

          <div class="input-name">
            <input type="checkbox" id="cb" class="check-button" />
            <label for="cb" class="check">I accept the terms and conditions</label>
          </div>

          <div class="input-name">
            <input type="submit" class="btn" value="Register" name="register" />
          </div>

          <div class="input-name">
            <label class="login">Already have an account?</label>
            <a href="login.php">Login</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>