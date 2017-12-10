<?php 

$id = $_GET['id'];


if (isset($_POST['nama'])) {
    $nama = $_POST['nama'] ;
    $no_ktp = $_POST['no_ktp'] ;
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $alamat = $_POST['alamat'] ;
    $umur = $_POST['umur'] ;
    $saldo = $_POST['saldo'] ;
    $no_telepon = $_POST['no_telepon'] ;
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $queryUpdate = "UPDATE customer SET username='$username', password='$password', nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin',no_telepon='$no_telepon', saldo='$saldo' WHERE no_ktp='$id'";
     $result_update = mysqli_query($koneksi, $queryUpdate);

     if (isset($result_update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil diedit
             </div>

            </div>';
     }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewcustomer">';

} else {
    $query = "SELECT * FROM customer WHERE no_ktp='$id'";
    $result = mysqli_query($koneksi, $query);

    $pecah = mysqli_fetch_assoc($result);

}


 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Edit Data Customer</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" maxlength="25" minlength="3" value="<?php echo $pecah['nama']; ?>" required >
                        <label class="form-label">Nama Customer</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="no_ktp" maxlength="3" minlength="2" value="<?php echo $pecah['no_ktp']; ?>" >
                        <label class="form-label">Kode Customer</label>
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
                        <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat']; ?>" required>
                        <label class="form-label">Alamat Customer</label>
                    </div>
                    <div class="help-info">Min. Value: 6 , Max. Value : 25</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="umur" value="<?php echo $pecah['umur']; ?>" required>
                        <label class="form-label">Umur Customer</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div> 

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $pecah['jenis_kelamin']; ?>" min="1" max="1" required>
                        <label class="form-label">Jenis Kelamin</label>
                    </div>
                    <div class="help-info">L : Laki-Laki , P : Perempuan</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="no_telepon" value="<?php echo $pecah['no_telepon']; ?>"  required>
                        <label class="form-label">No Telepon</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="saldo" value="<?php echo $pecah['saldo']; ?>" required>
                        <label class="form-label">Saldo</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>

