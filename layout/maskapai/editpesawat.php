<?php 
$id = $_GET['id'];

if (isset($_POST['id_pesawat'])) {
    //$id_pesawat = $_POST['id_pesawat'] ;
    $id_maskapai = $_SESSION['userID'] ;
    $keterangan = $_POST['keterangan'] ;
    $rute = $_POST['rute'] ;
    $jumlah_seat = $_POST['jumlah_seat'] ;
    $tipe = $_POST['tipe'] ;

    $queryUpdate = "UPDATE pesawat SET keterangan='$keterangan', rute='$rute', jumlah_seat='$jumlah_seat' , tipe = '$tipe' WHERE id_pesawat='$id'";

    if (mysqli_query($koneksi, $queryUpdate)) {
        echo "<div class='panel panel-success'>
                 <div class='panel-heading'>         
                 Berhasil Diedit
             </div>

            </div>";
    } else {
        echo "Error: " . $queryUpdate . "<br>" . mysqli_error($koneksi);
    }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=maskapai&menu=viewpesawat">';


} else {
    $id_pesawat = $_GET['id'] ;

    $selectQuery = "SELECT * FROM pesawat WHERE id_pesawat='$id'";
    $result = mysqli_query($koneksi,$selectQuery);

    $pecah = mysqli_fetch_assoc($result);
}

 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Edit Data Pesawat</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="id_pesawat" maxlength="25" minlength="3" required value="<?php echo $pecah['id_pesawat'] ?>" >
                        <label class="form-label">Kode Pesawat</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="keterangan" maxlength="25" minlength="3" required value="<?php echo $pecah['keterangan'] ?>">
                        <label class="form-label">Keterangan</label>
                    </div>
                    <div class="help-info">Min. 6, Max. 255 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="rute" class="form-control" name="rute" min="6" max="25" required value="<?php echo $pecah['rute'] ?>">
                        <label class="form-label">Rute</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="jumlah_seat" required value="<?php echo $pecah['jumlah_seat'] ?>">
                        <label class="form-label">Jumlah Seat</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="tipe" min="6" max="10" required value="<?php echo $pecah['tipe'] ?>">
                        <label class="form-label">Tipe Pesawat</label>
                    </div>
                    <div class="help-info">Min 6 , Max 10 Characters</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Edit Pesawat</button>
            </form>
        </div>
    </div>
</div>

