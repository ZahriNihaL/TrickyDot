<?php
include("assets/includes/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  include("assets/css/style.php");
  ?>
  <title>Services</title>
</head>
<body>
  <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="card custom-card-2">
                <div class="card-body p-3 d-flex align-items-center justify-content-between">
                    <h5 class="mb-0 fw-bold">ADD SERVICES</h5>
                </div>
            </div>
            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image2 :</label>
                            <input type="file" class="form-control" name="image2" id="image" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="description">Description :</label>
                            <textarea class="form-control" name="description" id="summernote" placeholder="Enter the description" required></textarea>
                        </div>
                        <br>
                        <div class="mb-3"> 
                            <button type="submit" class="btn btn-success float-end" name="add_services" style="background-color: #7d1128;">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div> 
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("services-nav");
    </script>
</body>
</html>