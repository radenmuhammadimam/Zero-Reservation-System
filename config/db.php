<?php 
	$serverDB ="localhost";
	$DB = "zeroreservationdb";
	$username = "root";
	$pass = "";

	$koneksi = mysqli_connect($serverDB,$username,$pass,$DB);

	if (!$koneksi)
	  {
	 	die("Connection failed: " . mysqli_connect_error());
	  }
 ?>