<?php
include("../includes/db.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once "../../../PHPMailer/src/PHPMailer.php";
require_once "../../../PHPMailer/src/SMTP.php";

session_start();

if (isset($_POST['logout'])) {
  unset($_SESSION['trickydot_loggedin']);
  header("Location:../../login.php");
}

if (isset($_POST["login"])) {
  $username = mysqli_real_escape_string($con, $_POST["username"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where username='$username' and password='$passhash'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count === 0) {
    header("Location: ../../login.php?error=Invalid credential");
  } else {
    $_SESSION["trickydot_loggedin"] = true;
    header("Location: ../../index.php");
  }
}


if (isset($_POST["add_service"])) {
  $title = $_POST["title"];
  $description = $_POST["description"];
  $img = $_FILES["img"]["name"];
  $tmp_name = $_FILES["img"]["tmp_name"];
  $to = "../images/service/" . $img;
  move_uploaded_file($tmp_name, $to);
  
  $img2 = $_FILES["image2"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];

  $to = "../images/service/" . $img2;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_services(title, img, img2, description) values('$title', '$img' , '$img2' , '$description')";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../services.php?success=services added successfully");
  } else {
    header("Location: ../../add_services.php?error=failed to add services!");
  }
}


// if (isset($_POST["add_services"])) {

//   $title = $_POST["title"];
//   $description = $_POST["description"];

//   $img = $_FILES["image"]["name"];
//   $tmp_name = $_FILES["image"]["tmp_name"];

//   $to = "../../assets/images/services/" . $img;

//   move_uploaded_file($tmp_name, $to);


//   $img2 = $_FILES["image2"]["name"];
//   $tmp_name = $_FILES["image"]["tmp_name"];

//   $to = "../../images/services/" . $img2;

//   move_uploaded_file($tmp_name, $to);

//   $sql = "insert into tbl_services(title, img, img2, description) values('$title', '$img' , '$img2' , '$description')";
//   $run = mysqli_query($con, $sql);
//   if ($run == TRUE) {
//     header("Location: ../../services.php?success=services added successfully");
//   } else {
//     header("Location: ../../add_services.php?error=failed to add services!");
//   }
// }

if (isset($_POST["delete_services"])) {

  $id = $_POST["id"];
  $sql = "delete from tbl_services where id='$id'"; 
  $run = mysqli_query($con, $sql);
  
  if ($run == TRUE) {
    header("Location: ../../services.php?success=services deleted successfully");
  } else {
    header("Location: ../../services.php?error=Failed to delete services!");
  }
}

if (isset($_POST["update_services"])) {
  $id = $_POST["id"];
  $title = $_POST["title"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../images/services/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $img2 = "";
  if ($_FILES['image2']['size'] == 0) {
    $img2 = $_POST["old_img2"];
  } else {
    $img2 = $_FILES["image2"]["name2"];
    $tmp_name2 = $_FILES["image2"]["tmp_name2"];

    $to = "../images/services/" . $img2;

    move_uploaded_file($tmp_name2, $to);
  }


  $sql = "update tbl_services set title='$title', img='$img' ,  img2='$img2', description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../../services.php?success=services edited successfully");
  } else {
    header("Location: ../../services.php?error=failes to edit services!");
  }
}


if (isset($_POST["add_portfolio"])) {
  $name = $_POST["name"];
  $category_name = $_POST["category_name"];
  $img = $_FILES["img"]["name"];
  $description = $_POST["description"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/portfolio/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_portfolio(name,img,description,category_name) values('$name','$img','$description','$category_name')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio added successfully");
  } else {
    header("Location: ../portfolio.php?error=failed to add portfolio!"); 

  }
}

if (isset($_POST["delete_portfolio"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_portfolio where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio deleted successfully");
  } else {
    header("Location: ../portfolio.php?error=failed to delete portfolio!");
  }
}

if (isset($_POST["update_portfolio"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];
  $category_name = $_POST["category_name"];
  $description = $_POST["description"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/portfolio/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_portfolio set name='$name', img='$img', category_name='$category_name', description='$description' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../portfolio.php?success=portfolio updated successfully");
  } else {
    header("Location: ../portfolio.php?error=failes to update portfolio!");
  }
}

if (isset($_POST["add_testimonial"])) {
  $name = $_POST["name"];
  $designation = $_POST["designation"];
  $img = $_FILES["img"]["name"];
  $description = $_POST["description"];
  $tmp_name = $_FILES["img"]["tmp_name"];

  $to = "../assets/images/testimonial/" . $img;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_testimonial(name,designation,img,description) values('$name','$designation','$img','$description')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial added successfully");
  } else {
    header("Location: ../testimonial.php?error=failed to add testimonial!");
  }
}

if (isset($_POST["delete_testimonial"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_testimonial where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial deleted successfully");
  } else {
    header("Location: ../testimonial.php?error=failed to delete testimonial!");
  }
}

if (isset($_POST["update_testimonial"])) {
  $id = $_POST["id"];
  $name = $_POST["name"];

  $img = "";
  if ($_FILES['img']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {

    $img = $_FILES["img"]["name"];
    $tmp_name = $_FILES["img"]["tmp_name"];

    $to = "../assets/images/testimonial/" . $img;

    move_uploaded_file($tmp_name, $to);
  }

  $sql = "update tbl_testimonial set name='$name', img='$img' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../testimonial.php?success=testimonial updated successfully");
  } else {
    header("Location: ../testimonial.php?error=failes to update testimonial!");
  }
}

if (isset($_POST["add_customers"])) {

  $brand_name = $_POST["brand_name"];
  $image = $_FILES["image"]["name"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  $to = "../assets/images/customers/" . $image;

  move_uploaded_file($tmp_name, $to);

  $sql = "insert into tbl_customers(brand_name,image) values('$brand_name','$image')";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers added successfully");
  } else {
    header("Location: ../customers.php?error=Failed to add customers!");
  }
}

if (isset($_POST["delete_customers"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_customers where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customer deleted successfully");
  } else {
    header("Location: ../customers.php?error=failed to delete customer!");
  }
}

if (isset($_POST["update_customers"])) {
  $id = $_POST["id"];
  $brand_name = $_POST["brand_name"];
  $image = "";
  if ($_FILES['image']['size'] == 0) {
    $img = $_POST["old_img"];
  } else {
    $image = $_FILES["image"]["name"];
    $tmp_name = $_FILES["image"]["tmp_name"];

    $to = "../assets/images/customers/" . $image;

    move_uploaded_file($tmp_name, $to);
  }
  $sql = "update tbl_customers set brand_name='$brand_name', image='$image' where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run == TRUE) {
    header("Location: ../customers.php?success=customers edited successfully");
  } else {
    header("Location: ../customers.php?error=failes to edit customers!");
  }
}

  if (isset($_POST["add_category"])) {
    $category_name = $_POST["category_name"];
    $sql = "insert into tbl_category(category_name) values('$category_name')";
    $run = mysqli_query($con, $sql);
    if ($run == TRUE) {
      header("Location: ../category.php?success=category added successfully");
    } else {
      header("Location: ../category.php?error=Failed to add category!");
    }
  }

  if (isset($_POST["delete_category"])) {
    $id = $_POST["id"];
    $sql = "delete from tbl_category where id='$id'";
    $run = mysqli_query($con, $sql);

    if ($run == TRUE) {
      header("Location: ../category.php?success=category deleted successfully");
    } else {
      header("Location: ../category.php?error=failes to delete category!");
    }
  }
  
  if (isset($_POST["update_category"])) {
    $id = $_POST["id"];
    $category_name = $_POST["category_name"];
  
    $sql = "update tbl_category set category_name='$category_name' where id='$id'";
    $run = mysqli_query($con, $sql);

    if ($run == TRUE) {
      header("Location: ../category.php?success=category updated successfully");
    } else {
      header("Location: ../category.php?error=failes to update category!");
    }
  }

  if (isset($_POST["update_settings"])) {
    $company_name = mysqli_real_escape_string($con, $_POST["company_name"]);
    $place = mysqli_real_escape_string($con, $_POST["place"]);
    $email1 = mysqli_real_escape_string($con, $_POST["email1"]);
    $phone_number1 = mysqli_real_escape_string($con, $_POST["phone_number1"]);
    $phone_number2 = mysqli_real_escape_string($con, $_POST["phone_number2"]);
    $link = mysqli_real_escape_string($con, $_POST["link"]);
    $facebook = mysqli_real_escape_string($con, $_POST["facebook"]);
    $instagram = mysqli_real_escape_string($con, $_POST["instagram"]);
    $twitter = mysqli_real_escape_string($con, $_POST["twitter"]);
    $youtube = mysqli_real_escape_string($con, $_POST["youtube"]);
    $linkedin = mysqli_real_escape_string($con, $_POST["linkedin"]);
    $sql = "update tbl_company set company_name='$company_name' , place='$place' , email1='$email1' , phone_number1='$phone_number1' , phone_number2='$phone_number2' , link='$link' , facebook='$facebook' , instagram='$instagram' , twitter='$twitter', youtube='$youtube' , linkedin='$linkedin'  where id='1'";
    $run = mysqli_query($con, $sql);
    if ($run === TRUE) {
      header("Location: ../../settings.php?success=Settings Updated Successfully");
    } else {
      header("Location: ../../settings.php?error=Failes to Update Settings!");
    }
  }

 
if (isset($_POST["change_password"])) {
  $password = $_POST["old_pass"];
  $new_password = $_POST["new_pass"];
  $confirm_password = $_POST["retype_pass"];
  $passhash = hash("sha256", $password);
  $sql = "select * from tbl_users where password='$passhash' AND id='1'";
  $run = mysqli_query($con, $sql);
  $count = mysqli_num_rows($run);
  if ($count != 0) {
    if ($new_password == $confirm_password) {
      $newpass_hash = hash("sha256", $new_password);
      $sql = "update tbl_users set password='$newpass_hash' where id='1'";
      $run = mysqli_query($con, $sql);
      if ($run == TRUE) {
        header("Location: ../../settings.php?success=Password Changed Successfully!");
      } else {
        header("Location: ../../settings.php?error=Failed to Change Password!");
      }
    } else {
      header("Location: ../../settings.php?error=New Passwords Not Match!");
    }
  } else {
    header("Location: ../../settings.php?error=Old Password Is Incorrect!");
  }
}

if (isset($_POST["delete_message"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_message where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../contact.php?success=Message Deleted Successfully");
  } else {
    header("Location: ../../contact.php?error=Failed to Delete Message!");
  }
}

if (isset($_POST["delete_subscriber"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_subscribe where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../subscribe.php?success=Subscriber Deleted Successfully");
  } else {
    header("Location: ../../subscribe.php?error=Failed to Delete Subscriber!");
  }
}

if (isset($_POST["delete_quote"])) {
  $id = $_POST["id"];
  $sql = "delete from tbl_quotes where id='$id'";
  $run = mysqli_query($con, $sql);
  if ($run === TRUE) {
    header("Location: ../../quotes.php?success=Quote Deleted Successfully");
  } else {
    header("Location: ../../quotes.php?error=Failed to Delete quote!");
  }
}

if (isset($_POST["news_letter"])) {
  $subject = mysqli_real_escape_string($con, $_POST["subject"]);
  $description = mysqli_real_escape_string($con, $_POST["desc"]);
    $mail = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Username = "zaahrinrcet@gmail.com";
    $mail->Password = "zikziggolnevmzfj";
    $mail->SMTPSecure = "tls";
    $mail->Port = 587;
    $mail->From = "zaahrinrcet@gmail.com";
    $mail->FromName = "Hanna Zahrin";
    $sql = "select * from tbl_subscribe";
    $run = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($run)){
      $id = $row["id"];
      $email = $row["email"];
      $mail->addAddress($email, $email);
    }
      $mail->isHTML(true);
      $mail->Subject = $subject;
    $mail->Body = $description;
    try {
        $mail->send();
    } catch (Exception $e) {
        echo "Mailer error: " . $mail->ErrorInfo;
    }
    $new_sql = "insert into tbl_news_letter(subject,description) values('$subject','$description')";
    if (mysqli_query($con, $new_sql)) {
      header("Location: ../../news_letter.php?success=News Letter Send Successfully"); 
    } else {
      header("Location: ../../news_letter.php?error=Failes to Send News Letter!");
    }
    mysqli_close($con);
}
?>
