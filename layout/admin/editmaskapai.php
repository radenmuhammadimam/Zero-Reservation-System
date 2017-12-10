<?php 

$id = $_GET['id'];


if (isset($_POST['nama'])) {
    $nama = $_POST['nama'] ;
    $id_maskapai = $_POST['id_maskapai'] ;
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $jumlah = $_POST['jmlh_pesawat'] ;

    $queryUpdate = "UPDATE maskapai SET username='$username', password='$password', nama='$nama', jmlh_pesawat='$jumlah' WHERE id_maskapai='$id'";
     $result_update = mysqli_query($koneksi, $queryUpdate);

     if (isset($result_update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil diedit
             </div>

            </div>';
     }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewmaskapai">';

} else {
    $query = "SELECT * FROM maskapai WHERE id_maskapai='$id'";
    $result = mysqli_query($koneksi, $query);

    $pecah = mysqli_fetch_assoc($result);

}


 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Edit Data Maskapai</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" maxlength="25" minlength="3" value="<?php echo $pecah['nama']; ?>" required >
                        <label class="form-label">Nama Maskapai</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="id_maskapai" maxlength="3" minlength="2" value="<?php echo $pecah['id_maskapai']; ?>" >
                        <label class="form-label">Kode Maskapai</label>
                    </div>
                    <div class="help-info">Gak usah diedit</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" maxlength="25" minlength="3" value="<?php echo $pecah['username']; ?>" required>
                        <label class="form-label">Username</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="pwd" type="password" class="form-control" name="password" min="6" max="25" value="<?php echo $pecah['password']; ?>" required>
                        <label class="form-label">Password</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" min="6" max="25" oninput="check(this)" value="<?php echo $pecah['password']; ?>" required>
                        <label class="form-label">Confirm Password</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <script language='javascript' type='text/javascript'>
                    function check(input) {
                        if (input.value != document.getElementById('pwd').value) {
                            input.setCustomValidity('Password Must be Matching.');
                        } else {
                            // input is valid -- reset the error message
                            input.setCustomValidity('');
                        }
                    }
                </script>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="jmlh_pesawat" value="<?php echo $pecah['jmlh_pesawat']; ?>" required>
                        <label class="form-label">Jumlah Pesawat</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>

