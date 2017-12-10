<?php 

if (isset($_POST['id_pesawat'])) {
    $id_pesawat = $_POST['id_pesawat'] ;
    $id_jadwal = $_POST['id_jadwal'] ;
    $id_maskapai = $_SESSION['userID'] ;
    $id_bandara = $_POST['id_bandara'] ;
    $tujuan = $_POST['tujuan'] ;
    $asal = $_POST['asal'] ;
    $harga = $_POST['harga'] ;

    echo $id_pesawat;
    echo $id_jadwal;
    echo $id_maskapai;
    echo $id_bandara;
    echo $tujuan;
    echo $asal;
    echo $harga;

    $query = "INSERT INTO r_penerbangan(id_jadwal, id_pesawat, id_bandara, tujuan, asal, harga) VALUES ('$id_jadwal','$id_pesawat','$id_bandara','$tujuan','$asal','$harga')";

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
            <h2>Tambah Data Jadwal Penerbangan</h2>
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
                                   
                             ?>
                          <option value="<?php  echo $pecah['id_jadwal'] ?>"><?php  echo $pecah['tgl_penerbangan'].' - '.$pecah['waktu_brkt'].' s/d '.$pecah['waktu_tiba']?> </option>
                            <?php   }
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
                                   
                             ?>
                          <option value="<?php  echo $pecah['id_pesawat'] ?>"><?php  echo $pecah['id_pesawat'] ?> </option>
                            <?php   }
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
                                   
                             ?>
                          <option value="<?php  echo $pecah['id_bandara'] ?>"><?php  echo $pecah['id_bandara'] ?> </option>
                            <?php   }
                             ?>
                        </select>
                    </div>
                    <div class="help-info">Select Kode Bandara</div>
                </div>      
                


                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="text" class="form-control" name="tujuan" min="3" max="25" required>
                        <label class="form-label">Tujuan Penerbangan</label>
                    </div>
                    <div class="help-info">Min. Value: 3, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="text" type="text" class="form-control" name="asal" min="3" max="25" required>
                        <label class="form-label">Asal Penerbangan</label>
                    </div>
                    <div class="help-info">Min. Value: 3, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                     <div class="form-line">
                        <input type="number" class="form-control" name="harga" required>
                        <label class="form-label">Harga Penerbangan</label>
                    </div>
                    <div class="help-info">Number Only</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Tambah Jadwal Penerbangan</button>
            </form>
        </div>
    </div>
</div>

