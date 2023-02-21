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
          <h5 class="mb-0 fw-bold">CUSTOMERS</h5>
          <a href="add_customers.php" class="btn btn-success" style="background-color: #7d1128;">Add Customers</a>
        </div>
      </div>
      <div class="card custom-card-2 mt-3">
        <div class="card-body p-3">
          <div class="row">

            <?php

            $sql = "select * from tbl_customers";
            $run = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_array($run)) {

              $id = $row["id"];
              $image = $row["image"];
              $brand_name = $row["brand_name"];
                  
            ?>

              <div class="col-md-3">
                <div class="card">
                  <div class="card-body p-2 text-center">
                    <img src="assets/images/customers/<?php echo $image ?>" class="img-fluid">
                    <h4 class="fw-bold"><?php echo $brand_name ?></h4>

                    <div class="d-flex justify-content-center">
                      <form method="post" action="editcustomers.php">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="update_customers" class="btn btn-primary me-2">Update</button>
                      </form>
                      <form method="post" action="functions/functions.php" class="form1">
                        <input type="hidden" name="id" value="<?php echo $id ?>">
                        <button type="submit" name="delete_customers" class="btn btn-danger">Delete</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>


            <?php } ?>

          </div>
        </div>
      </div>
    </div>

  </div>
</body>

</html>