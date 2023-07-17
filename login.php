<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php include 'includes/header.php' ?>
  <title>C.R.S - Login</title>
  <link rel="stylesheet" href="assects/css/loggin.css" />

</head>

<body>

  <section>
    <div class="form-wrapper">
      <div class="back">
        <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
      </div>
      <h2>Login</h2>
      <div class="form-container">
        <form action="config/login_conn.php" method="POST">
          <div class="input-name">
            <i class="fa fa-user icon"></i>
            <input type="text" placeholder="Username" class="text-name" name="username" required />
          </div>
          <div class="input-name">
            <i class="fa fa-lock icon"></i>
            <input type="password" placeholder="Password" class="text-name" name="password" required />
          </div>

          <div class="input-name">
            <input type="checkbox" id="cb" class="check-button" />
            <label for="cb" class="check">Remember Me!!</label>
          </div>

          <div class="input-name">
            <input type="submit" class="btn" value="Login" name="login" />
          </div>

          <div class="input-name">
            <label class="login">I don't have an account?</label>
            <a href="signup.php">Register Now!!!</a>
          </div>
        </form>
      </div>
    </div>
  </section>
</body>

</html>