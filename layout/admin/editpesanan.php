<?php 

$id = $_GET['id'];


if (isset($_POST['no_seat'])) {
    $no_seat = $_POST['no_seat'] ;
    $status = $_POST['status'] ;
    $kode_booking = $_POST['kode_booking'] ;

    $queryUpdate = "UPDATE pesanan SET no_seat='$no_seat', status='$status', kode_booking='$kode_booking' WHERE id_pesan='$id'";
     $result_update = mysqli_query($koneksi, $queryUpdate);

     if (isset($result_update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil dikonfirmasi
             </div>

            </div>';
     }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewpesanan">';

} else {
    $query = "SELECT `id_pesan` , `no_ktp` , `nama`, `no_seat`, `status`, `kode_booking` FROM `pesanan` JOIN `customer` USING (`no_ktp`) WHERE id_pesan='$id'";
    $result = mysqli_query($koneksi, $query);

    $pecah = mysqli_fetch_assoc($result);

}


 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Konfirmasi Pesanan Customer</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" maxlength="25" minlength="3" value="<?php echo $pecah['nama']; ?>" disabled >
                        <label class="form-label">Nama Customer</label>
                    </div>
                    <div class="help-info">Gak bisa diedit</div>
                </div>
                 <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="noktp" maxlength="25" minlength="3" value="<?php echo $pecah['no_ktp']; ?>" disabled >
                        <label class="form-label">No KTP</label>
                    </div>
                    <div class="help-info">Gak bisa diedit</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="no_seat" maxlength="3" minlength="2" value="<?php echo $pecah['no_seat']; ?>" required >
                        <label class="form-label">No Seat</label>
                    </div>
                    <div class="help-info">Input airplane seat, Ex. 10A,10B,10C</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="status" maxlength="3" minlength="2" value="<?php echo $pecah['status']; ?>" required >
                        <label class="form-label">Status Penerbangan</label>
                    </div>
                    <div class="help-info">OK, Cancel, Waiting Payment</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="kode_booking" maxlength="6" minlength="4" value="<?php echo $pecah['kode_booking']; ?>" required >
                        <label class="form-label">Kode Booking</label>
                    </div>
                    <div class="help-info">Unique Code to identify flight</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Confirm</button>
            </form>
        </div>
    </div>
</div>

