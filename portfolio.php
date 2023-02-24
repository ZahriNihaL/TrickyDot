<?php
include("admin/assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php include('css/style.php') ?>
</head>
<body>
   
    <!-- --------------------------navbar start------------------------------ -->

    <?php include('contents/nav.php') ?>

        <div class="quote-btn">
            <button type="button" class="btn btn-sm" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              Get a Quote
            </button>
        </div>

    <!-- --------------------------navbar end------------------------------ -->

    <!-- --------------------------------portfolio start---------------------------- -->


    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold main-head">Our <b class="subhead">Portfolio</b></h2>
            </div>
            <div class="portfolio-details padding-gap">
                <p class="sub-paragraph">There is a lot within a few. For the overview of the services, see our portfolio. </p>
            </div>
            <div class="portfolio-gallery">
                <div class="row mt-3 mb-4 button-group filter-button-group">
                    <div class="col d-flex filter-buttons">
                        <button type="button" data-filter="*" class="btn btn-primary mx-1 text-dark active">All</button>
                        <?php
                            $sql = "select * from tbl_category";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $category_name = $row["category_name"];
                            }
                        ?>

                        <button type = "button" data-filter = ".id" class = "btn btn-primary mx-1 text-dark"><?php echo $category_name ?></button>
                        
                    </div> 
                </div>
                <div class="row justify-content-center g-4" id="portfolio-works">

                    <?php
                        $sql = "select * from tbl_portfolio";
                        $run = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($run)){

                            $name = $row["name"];
                            $img = $row["img"];
                        
                        }
                    ?> 
                    <div class="col-lg-4 col-md-6 webdevelopment mt-4">
                        <div class="portfolio-item">
                            <div class="hvrbox">
                                <div class="portfolio-img">
                                    <img src="admin/assets/images/portfolio/<?php echo $img ?>" class="img-fluid d-block mx-auto">
                                </div>
                                <div class="hvrbox-layer_top">
                                  <div class="hvr-btn"><a href="https://aalokacreations.com/"><button class="btn">View</button></a></div>
                                  <h5 class="text-center"><?php echo $name ?></h5>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- --------------------------------portfolio end---------------------------- -->
    
<!-- --------------------------------footer start---------------------------- -->

<?php include('contents/footer.php') ?>

<!-- -------------------------------get a quote modal--------------------------- -->

<?php include('model.php') ?>

<!-- -------------------------------get a quote modal--------------------------- -->

<?php include('contents/script.php') ?>

</body>
</html>