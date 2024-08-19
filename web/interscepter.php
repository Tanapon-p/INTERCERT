<?php
    $host = "43.249.35.194";
    $database = "intercert_db";
    $user = "intercert_db";
    $pass = "G7JvEqLejTptL3cWCgUW";
    $con=mysqli_connect($host, $user, $pass, $database);
    $conn = new mysqli($host, $user, $pass, $database);
    
    $dbh = new PDO("mysql:host=$host; dbname=$database; charset=utf8;", $user, $pass);
    $dbh->exec("set names utf8");
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
	// Check connection
	if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }
	
	// Change character set to utf8
    mysqli_set_charset($con,"utf8");

    date_default_timezone_set('Asia/Bangkok');
    setlocale(LC_TIME, 'th_TH.utf8');
?>