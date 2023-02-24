<?php
include("assets/includes/db.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <?php
    include("assets/css/style.php");
    ?>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<title>News Letter</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>   
        <section class="home">
            <div class="text">
                <div class="admin-card mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-11">
                                    <h5 class="card-title ms-0 fw-bold mt-2">NEWS LETTER</h5>
                                </div>                                                            
                            </div>
                        </div>
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
                    
                <div class="card custom-card-2 mt-2">
                    <div class="card-body p-4">
                        <form method="post" action="assets/functions/functions.php" enctype="multipart/form-data">  
                            <div class="mb-3">
                                <label class="form-label" for="title">Subject :</label>
                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter the Subject" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="title">Description :</label>
                                <div id="editor"></div>
                            </div>                                                       
                            <div class="mb-3">
                                <input type="hidden" name="desc" id="desc">
                                <button type="submit" class="btn btn-success btn-sm float-end" name="news_letter" style="background-color:#0d4c91;">SEND</button>
                            </div>
                        </form>
                    </div>
                </div>            
            </div>
        </section>

        <?php include("assets/content/script.php"); ?>
        <script>
             changeNav("newsletter-nav");
            quill.on("text-change", function() {
                $("#desc").val(quill.container.innerHTML);
            })
        </script>
</body>
</html>
