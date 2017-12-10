<?php 
$id = $_GET['id'];
 $query = "SELECT * FROM r_penerbangan WHERE id_penerbangan='$id'";

    $result = mysqli_query($koneksi,$query);

    $pecahdata = mysqli_fetch_assoc($result);
if (isset($_POST['id_jadwal'])) {
    $id_pesawat = $_POST['id_pesawat'] ;
    $id_jadwal = $_POST['id_jadwal'] ;
    $id_maskapai = $_SESSION['userID'] ;
    $id_bandara = $_POST['id_bandara'] ;
    $tujuan = $_POST['tujuan'] ;
    $asal = $_POST['asal'] ;
    $harga = $_POST['harga'] ;

    $queryUpdate = "UPDATE r_penerbangan SET id_jadwal='$id_jadwal' , id_pesawat='$id_pesawat',id_bandara='$id_bandara',tujuan='$tujuan',asal='$asal',harga='$harga' WHERE id_penerbangan='$id'";

    if (mysqli_query($koneksi, $queryUpdate)) {
        echo "<div class='panel panel-success'>
                 <div class='panel-heading'>         
                 Berhasil Diedit
             </div>

            </div>";

        echo '<meta http-equiv="refresh" content="1;url=index.php?page=maskapai&menu=viewjadwal">';
    } else {
        echo "Error: " . $queryUpdate . "<br>" . mysqli_error($koneksi);
    }

} else {
    $query = "SELECT * FROM r_penerbangan WHERE id_penerbangan='$id'";

    $result = mysqli_query($koneksi,$query);

    $pecahdata = mysqli_fetch_assoc($result);
} 


 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Edit Data Jadwal Penerbangan</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="id_jadwal">
                            <?php   
                                    $query="SELECT * FROM jadwal";

                                    $result = mysqli_query($koneksi,$query);
                                   while ($pecah = mysqli_fetch_assoc($result)) {

                                    if ($pecah['id_jadwal'] == $pecahdata['id_jadwal']){
                                        echo '<option selected value="'.$pecah['id_jadwal'].'"> '.$pecah['tgl_penerbangan'].' - '.$pecah['waktu_brkt'].' s/d '.$pecah['waktu_tiba'].'</option>';
                                    } else {
                                        echo '<option value="'.$pecah['id_jadwal'].'"> '.$pecah['tgl_penerbangan'].' - '.$pecah['waktu_brkt'].' s/d '.$pecah['waktu_tiba'].'</option>';
                                    }
                                }
                                   
                             ?>
                          
                        </select>
                    </div>
                    <div class="help-info">Select Waktu Keberangkatan </div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <select name="id_pesawat">
                            <?php   
                                    $id_maskapai = $_SESSION['userID'] ;
                                    $query="SELECT id_pesawat FROM pesawat WHERE id_maskapai='$id_maskapai'";

                                    $result = mysqli_query($koneksi,$query);
                                   while ($pecah = mysqli_fetch_assoc($result)) {


                                    if ($pecahdata['id_pesawat'] == $pecah['id_pesawat']){
                                        echo '<option selected value="'.$pecah['id_pesawat'].'"> '.$pecah['id_pesawat'].'</option>';
                                    } else {
                                        echo '<option value="'.$pecah['id_pesawat'].'"> '.$pecah['id_pesawat'].'</option>';
                                    }

                                }
                                   
                             ?>
                          
                        </select>
                    </div>
                    <div class="help-info">Select Kode Pesawat</div>
                </div>
                    <div class="form-group form-float">
                    <div class="form-line">
                        <select name="id_bandara">
                            <?php   
                                    $query="SELECT id_bandara FROM bandara";

                                    $result = mysqli_query($koneksi,$query);
                                   while ($pecah = mysqli_fetch_assoc($result)) {

                                    if ($pecahdata['id_bandara'] == $pecah['id_bandara']){
                                        echo '<option value="'.$pecah['id_bandara'].'" selected > '.$pecah['id_bandara'].'</option>';

                                    } else {
                                        echo '<option value=" '. $pecah['id_bandara'].'"  > '.$pecah['id_bandara'].'</option>';
                                    }
                                }
                                   
                             ?>
                            
                        </select>
                    </div>
                    <div class="help-info">Select Kode Bandara</div>
                </div>      
                


                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="text" class="form-control" name="tujuan" min="3" max="25" value="<?php echo $pecahdata['tujuan']; ?>" required>
                        <label class="form-label">Tujuan Penerbangan</label>
                    </div>
                    <div class="help-info">Min. Value: 3, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="text" class="form-control" name="asal" min="3" max="25" value="<?php echo $pecahdata['asal']; ?>" required>
                        <label class="form-label">Asal Penerbangan</label>
                    </div>
                    <div class="help-info">Min. Value: 3, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                     <div class="form-line">
                        <input type="number" class="form-control" name="harga" value="<?php echo $pecahdata['harga']; ?>" required>
                        <label class="form-label">Harga Penerbangan</label>
                    </div>
                    <div class="help-info">Number Only</div>
                </div>
                
                <button class="btn btn-primary waves-effect" type="submit">Edit Jadwal Penerbangan</button>
            </form>
        </div>
    </div>
</div>

