<?php 

 if (isset($_POST['jam_brkt'])) {
	$jam_brkt = $_POST['jam_brkt'];
	$jam_tiba = $_POST['jam_tiba'];
	$tgl_penerbangan = date('Y-m-d',strtotime($_POST['tgl_penerbangan']));

	//$query = "INSERT INTO jadwal (waktu_brkt,waktu_tiba,tgl_penerbangan) VALUES ('$jam_brkt','$jam_tiba',$tgl_penerbangan";

	$query = "INSERT INTO `jadwal` (`id_jadwal`, `waktu_brkt`, `waktu_tiba`, `tgl_penerbangan`) VALUES (NULL, '$jam_brkt', '$jam_tiba', '$tgl_penerbangan')";
	 $insert = mysqli_query($koneksi, $query);

     if (isset($insert)) {
        echo '<div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil ditambah
                 '.$jam_brkt.' '.$tgl_penerbangan.'
             </div>

            </div>';
     } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

     //echo '<meta http-equiv="refresh" content="1;url=index.php?page=maskapai&menu=viewjamterbang">';

 }

 ?>

<div class="container-fluid">
	<div class="card">
		<div class="header">
			<h2> 
				Tambah Jam Terbang
			</h2>
		</div>		
		<div class="body">
			<form action="" method="POST">
				<div class="demo-masked-input">
					<div class="input-group">
		                <span class="input-group-addon">
							Jam Berangkat
		                </span>
		                <div class="form-line">
		                    <input type="text" class="form-control time24" name="jam_brkt" placeholder="Ex: 23:59">
		                </div>
		            </div>
				</div>
				<div class="demo-masked-input">
					<div class="input-group">
		                <span class="input-group-addon">
							Jam Tiba
		                </span>
		                <div class="form-line">
		                    <input type="text" class="form-control time24" name="jam_tiba" placeholder="Ex: 23:59">
		                </div>
		            </div>
				</div>

				<div class="input-group">
					  <span class="input-group-addon">
							Jam Tiba
		              </span>
		              <div class="form-line">
		                  <input type="date" class="form-control " name="tgl_penerbangan" >
		              </div>
				</div>
	
                <button class="btn btn-primary waves-effect" type="submit">Tambah</button>

			</form>
		</div>
	</div>
</div>