<?php
require_once 'assets/includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
include("assets/css/style.php");
?>
<title>Subscribe</title>
</head>
<body>
    <?php include("assets/content/navbar.php") ?>
    <section class="home">
        <div class="text">
            <div class="admin-card">
                <div class="card">
                    <div class="card-body">
                      <div class="row align-items-center">
                        <div class="col-lg-11">
                            <h5 class="card-title ms-0 fw-bold mt-3">SUBSCRIBERS</h5>
                        </div>
                      </div>                                   
                    </div>
                </div>
            </div>
            <div class="card custom-card-2 mt-5">
                <div class="card-header p-3">      
                <h5 class="text-center">Subscribers of Newsletter</h5>    
                </div>
                <div class="card-body">
                    <table class="table table-bordered tbl_plugin" style="text-align: center;">
                        <tr class="table table-bordered text-white" style="background-color: #7d1128;"> 
                            <td>ID</td>
                            <td>NAME</td>
                            <td>EMAIL</td>
                            <td>DELETE</td>
                        </tr>                        
                        <tr>
                        <?php
                        $query ="select * from tbl_subscribe";
                        $result = mysqli_query($con,$query);
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $id = $row["id"];
                                $name = $row["name"];
                                $email = $row["email"];
                        ?>  
                            <td><?php echo $row['id']; ?></td> 
                            <td><?php echo $row['name']; ?></td>                             
                            <td><?php echo $row['email']; ?></td>
                           
                            <td>
                                <form method="POST" action="assets/functions/functions.php">    
                                    <input type="hidden" name="id" value="<?php echo $id ?>">     
                                    <button type="submit" name="delete_subscriber" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?');" style="background-color: #ac0404; border: 0;">Delete</button>                    
                                </form>
                            </td>
                        </tr>
                            <?php } ?>
                    </table>
                </div>                 
            </div>                                                       
        </div>
    </section>
    <?php include("assets/content/script.php"); ?>
    <script>
        changeNav("subscribe-nav");
    </script>
</body>
</html>