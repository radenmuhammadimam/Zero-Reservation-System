<?php 
	$noKTP = $_SESSION['userID'];
	$queryCekSaldo = "SELECT saldo FROM customer WHERE no_ktp='$noKTP'";

	$result = mysqli_query($koneksi,$queryCekSaldo);

	$pecah = mysqli_fetch_assoc($result);

 ?>

<div class="container-fluid">
	<div class="card" >
		<div style="padding : 10px 10px 10px 10px" >
			
		<h3><small>Saldo saya : IDR </small><?php echo $pecah['saldo'] ?></h3>
		<form action="isisaldo.php" id="form_advanced_validation" method="POST">
			<div class="form-group form-float">
                    <div class="form-line">
                        <input type="number" class="form-control" name="saldo" required>
                        <label class="form-label">Masukkan Saldo Kamu</label>
                    </div>
                    <div class="help-info">Numbers only</div>
                </div>
                <input type="hidden" value="<?php echo $pecah['saldo'] ?>" name="saldolama" />

                <button class="btn btn-primary waves-effect" type="submit">Isi Saldo</button>

		</form>
		</div>
	</div>	
</div>