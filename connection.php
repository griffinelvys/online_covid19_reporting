<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_covid-19_db";



$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

