<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assects/bootstrap-4.3.1/css/bootstrap.css">
  <script src="../assects/bootstrap-4.3.1/js/bootstrap.js"></script>
  <title>Admin - Login</title>
</head>

<body>
  </section>
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Sign In To Admin Pannel</h3>
              <form class="form-group" action="config/admin_login_conn.php" method="post">
                <div class="form-outline mb-4">
                  <label class="form-label">Username</label>
                  <input type="text" class="form-control form-control-lg" name="username" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control form-control-lg" name="password" />
                </div>
                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <label class="form-check-label" for="form1Example3"> Remember Me </label>
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>

                <div class="justify-content-start mb-4">
                  <label class="form-check-label"> I don't have Account <a href="admin_reg.php"> Registered Me </a> </label>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>
