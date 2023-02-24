<?php
// session_start();
include("assets/includes/db.php");
?>
<!doctype html>
<html lang="en">
<head>
<?php
include("assets/css/style.php");
?>
<title>Dashboard</title>
</head>
<body>
<?php include("assets/content/navbar.php") ?>
<section class="home">
    <div class="text">
        <div class="admin-card">
            <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-6">
                        <h4 class="card-title ms-0 fw-bold mt-2">DASHBOARD</h4>
                    </div>
                  </div>                           
                </div>
            </div>
        </div>
        <?php
        $slid_sql = "select * from tbl_slideshow";
        $run_slid = mysqli_query($con, $slid_sql);
        $slid_count = mysqli_num_rows($run_slid);
        ?>
          <div class="home-cards">
            <div class="row">
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <h6 class="card-title fw-bold">SLIDESHOW</h6>
                                    <h4 class="fw-bold text-black"><?php echo $slid_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-card-checklist icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Slideshows</p>
                        </div>
                    </div>
                </div>
        <?php
        $port_sql = "select * from tbl_portfolio";
        $run_port = mysqli_query($con, $port_sql);
        $port_count = mysqli_num_rows($run_port);
        ?>    
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">PORTFOLIO</h6>
                                    <h4 class="fw-bold text-black"><?php echo $port_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-display icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Portfolio</p>
                        </div>
                    </div>
                </div>
        <?php
        $test_sql = "select * from tbl_testimonial";
        $run_test = mysqli_query($con, $test_sql);
        $test_count = mysqli_num_rows($run_test);
        ?>    
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">TESTIMONIAL</h6>
                                    <h4 class="fw-bold text-black"><?php echo $test_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-display icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Testimonial</p>
                        </div>
                    </div>
                </div>
        <?php
        $cus_sql = "select * from tbl_customers";
        $run_cus = mysqli_query($con, $cus_sql);
        $cus_count = mysqli_num_rows($run_cus);
        ?>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">CUSTOMERS</h6>
                                    <h4 class="fw-bold text-black"><?php echo $cus_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                <i class="bi bi-play-btn-fill icon"></i>
                                </div>
                            </div>
                          <p class="card-text">Total Customers</p>
                        </div>
                    </div>
                </div>
        <?php
        $team_sql = "select * from tbl_team";
        $run_team = mysqli_query($con, $team_sql);
        $team_count = mysqli_num_rows($run_team);
        ?>
                <div class="col-lg-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h6 class="card-title fw-bold">TEAM</h6>
                                    <h4 class="fw-bold text-black"><?php echo $team_count ?></h4>
                                </div>
                                <div class="col-lg-4 icon-dash card-img-bg">
                                    <i class="bi bi-person-lines-fill icon"></i>                                   
                                </div>
                            </div>
                          <p class="card-text">Total Teams</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include("assets/content/script.php"); ?>
<script>
    changeNav("home-nav");
</script>
</body>
</html>