<?php

session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
}

include("includes/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    
    <?php include('style.php') ?>

    <title>Dashboard</title>


</head>

<body>
    <div class="row min-vh-100 g-0">

        <?php include("content/navbar.php") ?>

        <div class="col-lg-10 wrapper">

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

              <?php
              
              $id = $_POST["id"];
              $sql = "select * from tbl_category where id='$id'";
              $run = mysqli_query($con,$sql);
              $row = mysqli_fetch_array($run);

            $category_name = $row["category_name"];
              
              ?>

            <div class="card custom-card mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Category :</label>
                            <input type="text" class="form-control" name="category_name" id="title" value="<?php echo $category_name ?>" placeholder="Enter Any Category" required>
                        </div>
                        <div class="mb-3">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <button type="submit" class="btn btn-success float-end" name="update_category" style="background-color: #7d1128;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("category-nav");
    </script>
</body>
</html>