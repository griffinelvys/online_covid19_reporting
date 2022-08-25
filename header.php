<?php
error_reporting(1);
   session_start();
   if(!$_SESSION['user_name']){
    Print '<script>alert("You need to be logged in first!");</script>';
           $URL="login.php";
  echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
   }  ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="image/favicon.png" type="image/png">
    <title>Covid 19 Reporting System</title>
   <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    </head>
<body>


