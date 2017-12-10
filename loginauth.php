<?php 
	include 'config/db.php'; 

	function setSession($userID,$username,$nama){
		session_start();
		$_SESSION['userID'] = $userID;
		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $nama;
	}

	$username =$_POST['username'];
	$password = $_POST['password'];

	// pastikan username dan password adalah berupa huruf atau angka.
	if (!ctype_alnum($username) OR !ctype_alnum($password)){
	  header('location:login.php');
	}else{
		$queryGetCustomer = "SELECT * FROM customer WHERE username='$username' AND password='$password'"; 
		$queryGetAdmin = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
		$queryGetMaskapai = "SELECT * FROM maskapai WHERE username='$username' AND password='$password'";

		$resultCustomer = mysqli_query($koneksi,$queryGetCustomer);
		$resultAdmin = mysqli_query($koneksi,$queryGetAdmin);
		$resultMaskapai = mysqli_query($koneksi,$queryGetMaskapai);

		$countCustomer = mysqli_num_rows($resultCustomer);
		$countAdmin = mysqli_num_rows($resultAdmin);
		$countMaskapai = mysqli_num_rows($resultMaskapai);

		// jika customer 
		if ($countCustomer > 0) {
			$data = mysqli_fetch_array($resultCustomer,MYSQLI_ASSOC); //get data
			setSession($data["no_ktp"], $data["username"] , $data["nama"]);
			header('location:index.php?page=customer');

		} elseif ($countAdmin > 0) {
			$data = mysqli_fetch_array($resultAdmin,MYSQLI_ASSOC); //get data
			setSession("1", $data["username"] , "Administrator");
			header('location:index.php?page=admin');

		} elseif ($countMaskapai > 0) {
			$data = mysqli_fetch_array($resultMaskapai,MYSQLI_ASSOC); //get data
			setSession($data["id_maskapai"], $data["username"] , $data["nama"]);
			header('location:index.php?page=maskapai');
		} else {
			echo " <script> alert('username password salah') 
    				window.location = 'login.php';
    				</script>";
		}
	}

 ?>


