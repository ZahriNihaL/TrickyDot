<?php

include("admin/includes/db.php");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>tryckyDot</title>
    
    <?php include('style.php') ?>
    
</head>

<body>


    <!-- --------------------------navbar start------------------------------ -->

    <?php include('contents/nav.php') ?>
    <span id="circle" class="circle"></span>

    <!-- --------------------------navbar end------------------------------ -->

    <section class="home">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6">
                    <div class="hob-sub-1 d-none d-md-block">
                        <p>Let's take a right way to your plans
                        <p>
                    </div>
                    <img src="images/home.jpg" alt="" class="img-fluid">
                    <div class="hob-sub  d-none d-md-block">
                        <p>Explore our services
                        <p>
                    </div>
                </div>
                <div class="col-lg-6 home-texts">
                    <h1 class="text-right">Ready to go for an <br> Upturn in this <br><b class="fst-italic">World of
                            New</b> </h1>
                    <p class="text-right">Get ready for a new change</p>
                    <div>
                        <form method="post" class="d-flex">
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your phone number" required>
                            <button type="submit" class="btn ">Get a quote</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------------------carousel end---------------------------- -->



    <!-- --------------------------------about start---------------------------- -->


    <section class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-head">
                        <h2 class="fw-bold main-head">About <b class="subhead">Us</b></h2>
                        <div class="col-lg-6 about-img d-block d-md-none">
                            <img src="images/about-img.png" alt="" class="img-fluid vert-move ">
                        </div>
                    </div>
                    <div class="padding-gap">
                        <p class="sub-paragraph">Learn more about us, our firm, and ourselves as you read on. Hope you would be happy with us and our services.
                    </div>
                    </p>
                    <a href="about.html"><button class="btn about-btn">Read more</button></a>
                </div>
                <div class="col-lg-6 about-img d-none d-md-block">
                    <img src="images/about-img.png" alt="" class="img-fluid vert-move ">
                </div>
            </div>


            <div class="map">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/map/OJO4YQ0.jpg" alt="" class="img-fluid ">
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class=" bg-change">
                                    <h5 class="text-center">2 Years</h5>
                                    <p class="text-center">Of Experience</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="experience">
                                    <h5 class="text-center">500+</h5>
                                    <p class="text-center">Projects</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="experience">
                                    <h5 class="text-center">500+</h5>
                                    <p class="text-center">Clients</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="map-paragraph">
                            <div class="padding-gap">
                                <p>We are very happy to provide our services to make your projects better with high quality.
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- --------------------------------about end---------------------------- -->




    <!-- --------------------------------Services start---------------------------- -->


    <section class="services">
        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold">Our <b class="subhead">Services</b></h2>
            </div>
            <div class="service-details padding-gap">
                <p class="sub-paragraph ">For your expansive lifestyle, we have the best services and solutions up here. </p>
            </div>

            <div class="service-cards mt-5">
                <div class="row">
                    <?php

                    $sql = "select * from tbl_services";
                    $run = mysqli_query($con, $sql);
                    while ($row = mysqli_fetch_array($run)) {

                        $img = $row["img"];
                        $title = $row["title"];
                        $description = $row["description"];

                    ?>

                        <div class="col-lg-4 services-card mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-img-bg">
                                    <a href="#"><img src="admin/assets/images/services/<?php echo $img ?>"></a>
                                    </div>
                                    <h6 class="card-title"><?php echo $title ?></h6>
                                    <p class="card-text"><?php echo $description ?></p>
                                    <a href="#">Read more&nbsp;<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                                        </svg></a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>


    <!-- --------------------------------Services end---------------------------- -->







    <!-- --------------------------------Customers start------------------------------->



    <section class="customers">
        <div class="customer-background">
            <div class="container">
                <div class="main-head">
                    <h2 class="fw-bold main-head">Our <b class="subhead">Customers</b></h2><br><br><br>
                </div>
                <div class="customers-details">
                    <!-- <h5 class="sub-paragraph">Our customers! </h5>
                    <h4 class="sub-paragraph">Here to talk about us.</h4>
                    <p class="sub-paragraph">See the happy milestones here.</p> -->
                </div>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner ">

                        <div class="carousel-item active">

                            <div class="row">

                                <?php

                                    $sql = "select * from tbl_customers";

                                    $run = mysqli_query($con, $sql);

                                    $count = mysqli_num_rows($run);

                                    $loopcount = 0;

                                    while ($row = mysqli_fetch_array($run)) {

                                        $loopcount++;
                                        $name = $row["brand_name"];
                                        $img = $row["image"];

                                ?>
                                    <div class="col-4 mb-4 col-lg-3">
                                        <a href="#"><img src="admin/assets/images/customers/<?php echo $img ?>" alt="<?php echo $name ?>"></a>
                                    </div>

                                    <?php
                                        if ($loopcount % 8 == 0 || $loopcount == $count) {
                                    ?>
                            </div>
                        </div>
                        <?php
                                        if ($loopcount !=  $count) { ?>
                            <div class="carousel-item">
                                <div class="row">
                        <?php }
                                    }
                                }

                        ?>

                                </div>
                                <div class="prev-button d-none d-md-block">
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                </div>
                                <div class="next-button d-none d-md-block">
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
    </section>



    <!-- --------------------------------Customers end---------------------------- -->








    <!-- --------------------------------portfolio start---------------------------- -->

    
    <section class="portfolio" id="portfolio">
        
        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold main-head">Our <b class="subhead">Portfolio</b></h2>
            </div>
            <div class="portfolio-details padding-gap">
                <p class="sub-paragraph">There is a lot within a few. For the overview of the services, see our portfolio. </p>
            </div>

            <!-- <div class="portfolio-gallery"></div> -->
            <!-- <div class = "row">
                    
                </div> -->

            <div class="portfolio-gallery">
            
                <!-- <div class = "row">
                    
                </div> -->
          
                <div class = "row mt-3 mb-4 button-group filter-button-group">
                    <div class = "col d-flex filter-buttons">
                        <button type = "button" data-filter = "*" class = "btn btn-primary mx-1 text-dark">All</button>
                        <?php
           
                            $sql = "select * from tbl_category";
                            $run = mysqli_query($con, $sql);
                            while($row = mysqli_fetch_array($run)){

                                $id = $row["id"];
                                $category_name = $row["category_name"];
                            }
                                
                        ?>        
                        <button type = "button" data-filter = ".<?php echo $id ?>" class = "btn btn-primary mx-1 text-dark"><?php echo $category_name ?></button>
          
                    </div>
                </div>
                    
                <div class = "row justify-content-center g-4" id = "portfolio-works">
                    <?php
        
                        $sql = "select * from tbl_portfolio";
                        $run = mysqli_query($con, $sql);
                        while($row = mysqli_fetch_array($run)){

                            $name = $row["name"];
                            $img = $row["img"];
                            $category_name= $row["category_name"];
                            
                        }
                    ?> 
                        <div class="col-lg-4 col-md-6 <?php echo $category_name ?> mt-4">
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

                <div class="load-more">
                    <a href="portfolio.html"><button class="btn">Load more</button></a>
                </div>
        </div>
    </section>

    <!-- --------------------------------portfolio end---------------------------- -->


    <!-- --------------------------------testimonial start---------------------------- -->


    <!-- <section class="testimonials">

        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold main-head">Client <b class="subhead">Reviews</b></h2>
            </div>
             
            <div class="portfolio-details">
                <p class="sub-paragraph"><h5 class="sub-paragraph">Our customers! </h5>
                    <h4 class="sub-paragraph">Here to talk about us.</h4>
                    <p class="sub-paragraph">See the happy milestones here.</p></p>
            </div>

            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/1.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>

                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/2.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>

                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/1.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>
                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/1.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>
                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/1.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>

                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 reviews">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row align-items-center mb-3">
                                            <div class="col-lg-3">
                                                <img src="images/testimonials/1.png" class="card-img-top" alt="">
                                            </div>
                                            <div class="col-lg-9">
                                                <h5 class="card-title client-name mb-0">Riya</h5>
                                                <p class="designation mb-0">UI/UX Designer</p>
                                            </div>
                                        </div>
                                        <div class="client-review">
                                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                elit. Vestibulum risus mi, pharetra sit amet aliquet sit amet, faucibus
                                                in ex. Praesent elementum metus vel suscipit tempus.</p>
                                        </div>
                                        <div class="d-flex stars">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                                                fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path
                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
]                </div>
\
            </div>
        </div>
    </section> -->

    <!-- --------------------------------testimonial end---------------------------- -->


    <!-- --------------------------------hire a developer start---------------------------- -->


    <section class="hire-a-developer">
        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold main-head">Hire a <b class="subhead">Developer</b></h2>
            </div>
            <div class="portfolio-details">
                <p class="sub-paragraph padding-gap">TrickyDot is a company with a vast space for opportunities. We need more of you </p>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4 hire-people">
                        <div class="card-body">
                            <h2 class="card-title text-white">Hire Creative People</h2>
                            <p class="card-text">Lorem ipsum dolor sit amet</p>
                            <div class="apply-button">
                                <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Apply Now</button>
                            </div>
                            <div class="modal-bg">
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-body ">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                <h5 class="modal-title mt-4 fw-bold text-center" id="staticBackdropLabel">Apply Now</h5>
                                                <p class="text-center" style="font-size:12px ;">Please fill out the form and apply now</p>
                                                <form>
                                                    <div class=" p-3">
                                                        <input type="text" class="form-control" id="" placeholder="Full Name">
                                                    </div>
                                                    <div class="p-3">
                                                        <input type="email" class="form-control" id="" placeholder="Email">
                                                    </div>
                                                    <div class="p-3">
                                                        <input type="number" class="form-control" id="" placeholder="Phone numer">
                                                    </div>
                                                    <div class="p-3">
                                                        <input type="file" id="myFile" name="filename">
                                                    </div>

                                                    <div class="d-flex buttons">

                                                        <div class="submit-btn">
                                                            <button type="button btn-sm text-white" class="btn " style="font-size: 13px;">Submit</button>
                                                        </div>
                                                        <div class="close-btn">
                                                            <button type="button btn-sm" class="btn" style="font-size: 13px;" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <button class="btn">Hire Now</button> -->
                        </div>
                    </div>
                    <div class="col-md-8 framework-logos">
                        <p class="text-center mt-3 p-2">TrickyDot Technologies is located in Puthanathani, Kottaykkal with 2 years of experences. We are using latest technologies for doing our services for you. </p>
                        <div class="d-flex logos">
                            <img src="images/hire a developer/html.png" alt="">
                            <img src="images/hire a developer/css-3.png" alt="">
                            <img src="images/hire a developer/bootstrap.png" alt="">
                            <img src="images/hire a developer/jquery.png" alt="">
                            <img src="images/hire a developer/atom.png" alt="">
                            <img src="images/hire a developer/veu.png" alt="">
                            <img src="images/hire a developer/angular.png" alt="">
                            <img src="images/hire a developer/php.png" alt="">
                            <img src="images/hire a developer/python.png" alt="">
                            <img src="images/hire a developer/logo-android.png" alt="">
                        </div>
                        <div class="d-flex logos mt-2 mb-3">
                            <img src="images/hire a developer/apple-logo.png" alt="">
                            <img src="images/hire a developer/flutter-logo.png" alt="">
                            <img src="images/hire a developer/java-script.png" alt="">
                            <img src="images/hire a developer/logo-java.png" alt="">
                            <img src="images/hire a developer/logo-java.png" alt="">
                            <img src="images/hire a developer/c.png" alt="">
                            <img src="images/hire a developer/c++.png" alt="">
                            <img src="images/hire a developer/node-js.png" alt="">
                            <img src="images/hire a developer/dot-net.png" alt="">
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- --------------------------------hire a developer end---------------------------- -->

    <!-- --------------------------------contact start---------------------------- -->


    <section class="contact">
        <div class="container">
            <div class="main-head">
                <h2 class="fw-bold main-head">Contact <b class="subhead">Us</b></h2>
            </div>
            <div class="contact-details padding-gap">
                <p class="sub-paragraph">Please feel free to get in touch with us if you have any additional questions or concerns. We are always available to assist you with further solutions. </p>
            </div>

            <div class="form-contents">
                <div class="row">
                    <div class="col-lg-6 order-1 order-md-0">
                        <form>
                            <div class="mb-3">
                                <input type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Enter your name" Required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" Required>
                            </div>
                            <div class="mb-3">
                                <input type="number" class="form-control" id="exampleInputNumber" aria-describedby="emailHelp" placeholder="Phone number" Required>
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Type your message"></textarea>
                            </div>

                            <button type="submit" class="btn">Send a message</button>
                        </form>
                    </div>
                    <div class="col-lg-6 contact-img order-0 order-md-1">
                        <img src="images/contact.png" alt="" class="img-fluid vert-move">
                    </div>
                </div>
            </div>

            <?php

            $sql = "select * from tbl_company where id='1'";
            $run = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($run);

            $address = $row["place"];
            $mail = $row["email1"];
            $phone1 = $row["phone_number1"];
            $phone2 = $row["phone_number2"];
            ?>

            <div class="address-deatils">
                <div class="row">
                    <!-- <div class="col-lg-4 ">
                        <div class="office-address-img">
                            <img src="images/contact-office.jpg" alt="" class="img-fluid">
                        </div>
                    </div> -->
                    <div class="col-lg-2 ">
                        <div class="office-address">
                            <div class="address-contents ">
                                <img src="images/office-building.png" alt="">
                                <a href="https://goo.gl/maps/DkzZnqK44PezjJtm9">
                                    <h5>Office address</h5>
                                </a>
                                <p>
                                    <?php echo $address ?>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="office-address">
                            <div class="address-contents ">
                                <img src="images/contact-office.png" alt="">
                                <h5>Contact us</h5>
                                <p><a href="#"><?php echo $mail ?></a> <br><?php echo $phone1 ?><br><?php echo $phone2 ?></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3">
                        <div class="office-address">
                            <div class="follow-us">
                                <div class="address-contents">
                                    <img src="images/follow.png" alt="">
                                    <h5>Follow us</h5>
                                    <div class="d-flex followus-icons">

                                        <div class="fb-round">
                                            <div class="office-fb-icons-bg">
                                                <div class="fb-icon">
                                                    <a href="https://www.facebook.com/trickydotofficial/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rounded-icon">
                                            <div class="office-icons-bg">
                                                <div class="insta-icon">
                                                    <a href="https://www.instagram.com/trickydotofficial/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rounded-icon">
                                            <div class="office-icons-bg">
                                                <div class="twitter-icon">
                                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="rounded-icon">
                                            <div class="office-icons-bg">
                                                <div class="youtube-icon">
                                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
                                                            <path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="rounded-icon">
                                            <div class="office-icons-bg">
                                                <div class="behane-icon">
                                                    <a href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-behance" viewBox="0 0 16 16">
                                                            <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="linked-round">
                                            <div class="office-icons-bg">
                                                <div class="linkedin-icon">
                                                    <a href="https://www.linkedin.com/company/trickydot"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                                                        </svg></a>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 office-address-img">
                        <img src="images/about-us/time-line/3.jpg" alt="" class="img-fluid"">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- --------------------------------contact end---------------------------- -->

    <!-- --------------------------------footer start---------------------------- -->

    <?php include('footer.php') ?>

    
    

    <?php include('model.php') ?>




    <?php include('script.php') ?>

       
</body>

</html>