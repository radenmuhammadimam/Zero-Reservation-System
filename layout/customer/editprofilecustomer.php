<?php 
$id = $_SESSION['userID'];


if(isset($_POST['nama'])){
    $nama = $_POST['nama'] ;
    $no_ktp = $_POST['no_ktp'] ;
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;
    $alamat = $_POST['alamat'] ;
    $umur = $_POST['umur'] ;
    $no_telepon = $_POST['no_telepon'] ;
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $queryUpdate = "UPDATE customer SET username='$username', password='$password', nama='$nama', alamat='$alamat', umur='$umur', jenis_kelamin='$jenis_kelamin',no_telepon='$no_telepon' WHERE no_ktp='$id'";
     $result_update = mysqli_query($koneksi, $queryUpdate);

     if (isset($result_update)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil diedit
             </div>

            </div>';
     }

     echo "<script> alert('Silahkan Logout..') </script>";
      echo '<meta http-equiv="refresh" content="1;url=logout.php">';
} else {
	$query = "SELECT * FROM customer WHERE no_ktp='$id'";

	$result = mysqli_query($koneksi,$query);

	$pecah = mysqli_fetch_assoc($result);
}

 ?>



<div class="container-fluid">
	<div class="card">
		<div class="header">
			<h2>My Profile</h2>
		</div>


		<div class="body">
			
            <form id="form_advanced_validation" method="POST" action="">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama']; ?>" maxlength="25" minlength="3"  required >
                        <label class="form-label">Nama Customer</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="no_ktp" value="<?php echo $pecah['no_ktp']; ?>" maxlength="3" minlength="2" required >
                        <label class="form-label">No KTP</label>
                    </div>
                    <div class="help-info">Number only</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" value="<?php echo $pecah['username']; ?>" maxlength="25" minlength="3"  required>
                        <label class="form-label">Username</label>
                    </div>
                    <div class="help-info">Min. 3, Max. 25 characters</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input id="pwd" type="password" class="form-control" name="password" value="<?php echo $pecah['password']; ?>" min="6" max="25"  required>
                        <label class="form-label">Password</label>
                    </div>
                    <div class="help-info">Min. Value: 6, Max. Value: 25</div>
                </div>
                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" value="<?php echo $pecah['password']; ?>" min="6" max="25" oninput="check(this)" required>
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
                        <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat'] ?>" required>
                        <label class="form-label">Alamat Customer</label>
                    </div>
                    <div class="help-info">Min. Value: 6 , Max. Value : 25</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="text" class="form-control" name="umur" value="<?php echo $pecah['umur'] ?>" required>
                        <label class="form-label">Umur Customer</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div> 

                <div class="form-group form-float">
                    <div>Jenis Kelamin : </div>
                    <select name="jenis_kelamin" >
						<?php 
							if ($pecah['jenis_kelamin'] == 'L'){

                                echo '<option value="$pecah["jenis_kelamin"]" selected> Laki-Laki </option>';
                                echo '<option value="P" > Perempuan </option>';
                            } else {
                                echo '<option value="$pecah["jenis_kelamin"]" selected> Perempuan </option>';
                                echo '<option value="L" > Laki-Laki </option>';
                            } 
						 ?>
                    </select>
                    <div class="help-info">L : Laki-Laki , P : Perempuan</div>
                </div>

                <div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="no_telepon" value="<?php echo $pecah['no_telepon'] ?>"   required>
                        <label class="form-label">No Telepon</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>

              
                <button class="btn btn-primary waves-effect" type="submit">Save</button>
            </form>

		</div>
	</div>
</div>