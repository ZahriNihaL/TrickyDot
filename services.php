
<?php

include("admin/includes/db.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?php include('style.php') ?>

  </head>
  <body>
   

 <!-- -----------------------------Nav start----------------------------------- -->

 
 <?php include('contents/nav.php') ?>
    
    <div class="quote-btn">
        <button type="button" class="btn btn-sm" style="display: block; margin: 0 auto;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
          Get a Quote
        </button>
    </div>


 <!-- -----------------------------Nav end----------------------------------- -->



<!-- -----------------------------services start----------------------------------------->


  
<!-- -----------------------------services end----------------------------------------->


<section class="our-services">
      <div class="services-bg">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="text-white mt-5">Giving the best Services</h2>
              <h4>For your expansive lifestyle, we have the best services and solutions up here.
              </h4>
            </div>
            <div class="col-lg-6">
              <div class="service-image-bg">
                <img src="images/our-services/2022_ani_cartoon_21-removebg-preview.png" alt="" class="img-fluid">
              </div>
            </div>
    
          </div>
        </div>
      </div>

        <div class="container">
          <div class="our-services-cards">
            <div class="row">
              <?php

              $sql = "select * from tbl_services";
              $run = mysqli_query($con, $sql);
              while ($row = mysqli_fetch_array($run)) {

                $img2 = $row["img2"];
                $title = $row["title"];
                $description = $row["description"];
              
              ?>
              <div class="col-lg-6 mt-3">
                <a href="#">
                  <div class="card">
                    <div class="card-body">
                      <a href="#"><img src="admin/assets/images/services/<?php echo $img2 ?>"></a>
                      <h5 class="card-title fw-bold mt-2"><?php echo $title ?></h5>
                      <p class="card-text"><?php echo $description ?></p>
                    </div>
                  </div>
                </a>
              </div>
             
            <?php } ?>  
            </div>
          </div>
        </div>
  </section>


  <?php include('footer.php') ?>

<!-- -------------------------------get a quote modal--------------------------- -->

 
<?php include('model.php') ?>

<!-- -------------------------------get a quote modal--------------------------- -->



<?php include('script.php') ?>

</body>
</html>