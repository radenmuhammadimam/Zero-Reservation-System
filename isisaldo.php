<?php 
	include 'config/db.php';
	session_start();
	$noKTP = $_SESSION['userID'];
	$saldo = $_POST['saldo'];
	$saldoLama = $_POST['saldolama'];
	$totalsaldo = $saldo + $saldoLama;

	$queryUpdate = "UPDATE customer SET saldo='$totalsaldo' WHERE no_ktp='$noKTP'";

	if (mysqli_query($koneksi, $queryUpdate)) {
	    echo "<script> alert('Berhasil..') 
    				window.location = 'index.php?page=customer&menu=isisaldo';
    				</script>";
	} else {
	    echo "Error updating record: " . mysqli_error($koneksi);
	}

 ?>