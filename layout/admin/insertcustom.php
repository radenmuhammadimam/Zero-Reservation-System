<?php 


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

    $queryInsert = "INSERT INTO customer (no_ktp,username,password,nama,alamat,umur,jenis_kelamin,no_telepon,saldo) VALUES ('$no_ktp','$username','$password','$nama','$alamat','$umur','$jenis_kelamin','$no_telepon','$saldo')";
     $insert = mysqli_query($koneksi, $queryInsert);

     if (isset($insert)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil ditambah
             </div>

            </div>';
     }

     echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewcustomer">';

} 

 ?>

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>Insert Data Customer</h2>
        </div>
        <div class="body">
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" maxlength="25" minlength="3"  required >
                        <label class="form-label">Nama Customer</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="no_ktp" maxlength="3" minlength="2" required >
                        <label class="form-label">No KTP</label>
                    </div>
                    <div class="help-info">Number only</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" maxlength="25" minlength="3"  required>
                        <label class="form-label">Username</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="pwd" type="password" class="form-control" name="password" min="6" max="25"  required>
                        <label class="form-label">Password</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" min="6" max="25" oninput="check(this)" required>
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
                        <input type="text" class="form-control" name="alamat" required>
                        <label class="form-label">Alamat Customer</label>
                    </div>
                    <div class="help-info">Min. Value: 6 , Max. Value : 25</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="umur" required>
                        <label class="form-label">Umur Customer</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div> 

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="jenis_kelamin"  min="1" max="1" required>
                        <label class="form-label">Jenis Kelamin</label>
                    </div>
                    <div class="help-info">L : Laki-Laki , P : Perempuan</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="no_telepon"   required>
                        <label class="form-label">No Telepon</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="saldo" required>
                        <label class="form-label">Saldo</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
              
                <button class="btn btn-primary waves-effect" type="submit">Tambah</button>
            </form>
        </div>
    </div>
</div>

