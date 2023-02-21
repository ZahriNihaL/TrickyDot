<?php

session_start();
if (!isset($_SESSION["loggedin"])) {
    header("Location:login.php");
}

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
                    <h5 class="mb-0 fw-bold">Add Slideshow</h5>
                </div>
            </div>

            <div class="card custom-card-2 mt-2">
                <div class="card-body p-4">
                    <form method="post" action="functions/functions.php" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label class="form-label" for="title">Title :</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Enter title" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="image">Image :</label>
                            <input type="file" class="form-control" name="image" id="image" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success float-end" name="add_slide" style="background-color: #7d1128;"> Add Slide</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</body>

</html>