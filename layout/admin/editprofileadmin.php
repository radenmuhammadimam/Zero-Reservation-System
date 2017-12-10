<?php 
$uname = $_SESSION['username'];

if(isset($_POST['username'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryUpdate = "UPDATE admin SET username='$username', password='$password'";

    $resultUpdate = mysqli_query($koneksi, $queryUpdate);

    if(isset($resultUpdate)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil diedit
             </div>

            </div>';
    } 

    echo "<script> alert('Silahkan Logout..') </script>";
    echo '<meta http-equiv="refresh" content="1;url=logout.php">';

} else {
	$query = "SELECT * FROM admin WHERE username='$uname'";

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
                
              
                <button class="btn btn-primary waves-effect" type="submit">Save</button>
            </form>

		</div>
	</div>
</div>