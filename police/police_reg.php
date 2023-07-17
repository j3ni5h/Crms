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
  <title>Police - Registration</title>
</head>

<body>
  <section class="vh-100" style="background-color: #508bfc;">
    <div class="container  h-90">
      <div class="row d-flex justify-content-center align-items-center h-90">
        <div class="col-12 col-md-8 col-lg-6">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <h3 class="mb-5">Sign Up As A Police</h3>
              <form class="form-group" action="config/police_reg_conn.php" method="POST">
                <div class="mb-4">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" />
                </div>
                <div class="mb-4">
                  <label>Username</label>
                  <input type="text" class="form-control" name="username" />
                </div>
                <div class="mb-4">
                  <label>Email</label>
                  <input type="text" class="form-control" name="email" />
                </div>
                <div class="mb-4">
                  <label>Password</label>
                  <input type="password" class="form-control" name="password" />
                </div>
                <div class="mb-4">
                  <label>Post</label>
                  <select class="form-select" name="post">
                    <option value="Select">Select</option>
                    <option value="Inspector">Inspector</option>
                    <option value="ACP">ACP</option>
                    <option value="DCP">DCP</option>
                    <option value="Other">Other</option>
                  </select>
                </div>
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="signup">Regester</button>

                <div class="justify-content-start mb-4">
                  <label class="form-check-label"> Already registered <a href="index.php"> Login </a> </label>
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