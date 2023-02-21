<?php

session_start();
if (isset($_SESSION["loggedin"])) {
  header("Location:index.php");
}

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Bootstrap demo</title>

  <link rel="stylesheet" href="assets/css/login_style.css">
 
</head>

<body>

  <section class="login-page">
  <div class="container">
    <div class="card my-5">
      <div class="card-body">
        <div class="row">
          <div class="col-12 col-md-6">
            <img src="assets/images/tri.jpg" class="img-fluid">
          </div>
          <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
            <form method="POST" class="w-75" action="functions/functions.php">
              <h4 class="fw-bold text-center">Log In</h4>
              <?php
              if(isset($_GET["error"])){
              ?>
              <div class="alert alert-danger text-center" role="alert">
                <?php
                $error = $_GET["error"];
                echo $error;
                ?>
              </div>
              <?php
              }
              ?>
              <div class="form_input mb-3">
                <input type="text" name="username" class="form-control" id="exampleDropdownFormEmail1" placeholder="Username" required>
              </div>
              <div class="form_input mb-3">
                <input type="password" name="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password" required>
              </div>
              <input type="submit" name="login" value="LOGIN" class="btn text-white  w-100" style="background-color: #7d1128;">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
  <?php include('script.php') ?>
</html>