<?php
session_start();
if(!isset($_SESSION["trickydot_loggedin"])){
    header("Location: login.php");
}
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="assets/css/style.css">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="icon" type="image/x-icon" href="images/title image.jpg">
<link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">