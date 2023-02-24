<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("assets/css/style.php");
  ?>
  <title>Customers</title>
</head>
<body>
  <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">CUSTOMERS</h5>
                </div>
            </div>

            <?php
              if(isset($_GET["error"])){
              ?>
              <div class="alert alert-danger text-center mt-2" role="alert">
                <?php
                $error = $_GET["error"];
                echo $error;
                ?>
              </div>
              <?php
              }else if(isset($_GET["success"])){
              ?>
              <div class="alert alert-success text-center mt-2" role="alert">
                <?php
                $error = $_GET["success"];
                echo $error;
                ?>
              </div>
              
              <?php } ?>

            <div class="card custom-card mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Brand Name :</label>
                            <input type="text" class="form-control" name="brand_name" id="title" placeholder="Enter Brand Name" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="add_customers" style="background-color: #7d1128;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("customers-nav");
    </script>
</body>
</html>