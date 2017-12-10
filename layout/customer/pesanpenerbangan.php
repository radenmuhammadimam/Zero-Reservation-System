<?php 

$idPenerbangan = $_GET['id'];
$noKTP = $_SESSION['userID'];
$harga = $_GET['harga'];
$status = "Waiting approval";
$seat = "Not Set";
$kodeBooking = "Not Set";
$id_bayar = 0;


if (validPesanan($harga,$koneksi,$noKTP) == true) {
 $queryInsert = "INSERT INTO pesanan (no_ktp, id_bayar, no_seat, total_harga, status, kode_booking) VALUES ('$noKTP','$id_bayar','$seat','$harga','$status', '$kodeBooking')";

 $queryUpdate = "UPDATE detilpesan SET id_penerbangan='$idPenerbangan' WHERE id_penerbangan= 0";
 $totalsaldo = renewSaldo($harga,$koneksi,$noKTP);
 $queryUpdateSaldo = "UPDATE customer SET saldo='$totalsaldo' WHERE no_ktp='$noKTP'";
 $insert = mysqli_query($koneksi, $queryInsert);
 $update = mysqli_query($koneksi, $queryUpdate);
 $updateSaldo = mysqli_query($koneksi, $queryUpdateSaldo);

     if (isset($insert) && isset($update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Penerbangan berhasil dipesan..
             </div>

            </div>';
             echo "<script> alert('Penerbangan berhasil dipesan') </script>";

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=customer">';
     }
 } else {
 	echo '<div class="panel panel-warning">
                 <div class="panel-heading">         
                 Saldo kurang, cek saldo anda.
             </div>

            </div>';
            echo "<script> alert('Saldo kurang, cek saldo anda') </script>";
 }


function renewSaldo($fee,$koneksi,$noKTP){
 $querySaldo = "SELECT saldo FROM customer WHERE no_ktp='$noKTP'";
 $result = mysqli_query($koneksi,$querySaldo);
 $pecah = mysqli_fetch_assoc($result);

 return $pecah['saldo']-$fee;
}

function validPesanan($fee,$koneksi,$noKTP){
	if (renewSaldo($fee,$koneksi,$noKTP) <= 0)
		return false;
	else 
		return true;
}
 ?>
