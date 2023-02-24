<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("assets/css/style.php");
  ?>
  <title>Category</title>
</head>
<body>
  <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">CATEGORY</h5>
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

            <div class="card custom-card text-black mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Category Name :</label>
                            <input type="text" class="form-control" name="category_name" id="title" placeholder="Enter Any Category" required>
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn dashboard-btn float-end" name="add_category" style="background-color: #7d1128;">SUBMIT</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("category-nav");
    </script>
</body>
</html>