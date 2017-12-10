<?php 

if (isset($_POST['id_pesawat'])) {
    $id_pesawat = $_POST['id_pesawat'] ;
    $id_maskapai = $_SESSION['userID'] ;
    $keterangan = $_POST['keterangan'] ;
    $rute = $_POST['rute'] ;
    $jumlah_seat = $_POST['jumlah_seat'] ;
    $tipe = $_POST['tipe'] ;

    $query = "INSERT INTO pesawat VALUES ('$id_pesawat','$id_maskapai','$keterangan','$rute','$jumlah_seat','$tipe')";

    if (mysqli_query($koneksi, $query)) {
        echo "<div class='panel panel-success'>
                 <div class='panel-heading'>         
                 Berhasil Ditambah
             </div>

            </div>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

}

 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Tambah Data Pesawat</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="id_pesawat" maxlength="25" minlength="3" required>
                        <label class="form-label">Nama Pesawat</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="keterangan" maxlength="25" minlength="3" required>
                        <label class="form-label">Keterangan</label>
                    </div>
                    <div class="help-info">Min. 6, Max. 255 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="rute" class="form-control" name="rute" min="6" max="25" required>
                        <label class="form-label">Rute</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="jumlah_seat" required>
                        <label class="form-label">Jumlah Seat</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="tipe" min="6" max="10" required>
                        <label class="form-label">Tipe Pesawat</label>
                    </div>
                    <div class="help-info">Min 6 , Max 10 Characters</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Tambah Pesawat</button>
            </form>
        </div>
    </div>
</div>

