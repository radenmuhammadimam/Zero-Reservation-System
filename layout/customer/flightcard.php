<div class="container-fluid">
        <div class="row clearfix">
			 <?php 
			    $id = $_SESSION['userID'];

			    $querySelect = "SELECT * FROM detilpesan INNER JOIN pesanan ON detilpesan.id_pesan=pesanan.id_pesan INNER JOIN r_penerbangan ON r_penerbangan.id_penerbangan=detilpesan.id_penerbangan INNER JOIN pesawat ON pesawat.id_pesawat=r_penerbangan.id_pesawat INNER JOIN maskapai ON pesawat.id_maskapai=maskapai.id_maskapai INNER JOIN jadwal ON jadwal.id_jadwal=r_penerbangan.id_jadwal WHERE pesanan.no_ktp='$id'";

			    $result = mysqli_query($koneksi,$querySelect);
			    $no = 1;

			    while ($pecah = mysqli_fetch_assoc($result)) {

			   ?>

	   		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header <?php if ($pecah['status']=='OK')  echo 'bg-green' ; else echo 'bg-red'; ?>">
                            <h2>
                              Booking Code : <?php echo $pecah['kode_booking'] ?> <small> <?php echo $pecah['nama'] ?> </small>
                            </h2>
                        </div>
                        <div class="body">
                            <p> Airplane : <?php echo $pecah['id_pesawat'] ?> Seri <?php echo $pecah['tipe'] ?></p>
	                         <p>Destination  : <?php echo $pecah['tujuan'] ?> - <?php echo $pecah['asal'] ?></p>
	                         <p>Flight Date :<?php echo $pecah['tgl_penerbangan'] ?> <?php echo $pecah['waktu_brkt'] ?> s/d <?php echo $pecah['waktu_tiba'] ?></p>
	                         <p>Price : IDR <?php echo $pecah['harga'] ?></p>
	                         <p>Status : <?php echo $pecah['status'] ?></p>
	                         <small class="text-info">Order on <?php echo $pecah['tanggal_pesan'] ?></small class="text">
                        </div>
                    </div>
                </div>

                <?php 



                } 
                ?>

	   </div>
	

</div>