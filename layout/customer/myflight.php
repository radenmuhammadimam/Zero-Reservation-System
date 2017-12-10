
<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Penerbangan Saya</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>Kode Booking</th>
                         <th>Nama Maskapai</th>
                         <th>Kode Pesawat</th>
                         <th>Tipe Pesawat</th>
                         <th>Tujuan</th>
                         <th>Asal</th>
                         <th>Tanggal Penerbangan</th>
                         <th>Waktu Berangkat</th>
                         <th>Waktu Tiba</th>
                         <th>Harga</th>
                         <th>Status</th>
                         <th>Waktu Pesan</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $id = $_SESSION['userID'];

                        $querySelect = "SELECT * FROM detilpesan INNER JOIN pesanan ON detilpesan.id_pesan=pesanan.id_pesan INNER JOIN r_penerbangan ON r_penerbangan.id_penerbangan=detilpesan.id_penerbangan INNER JOIN pesawat ON pesawat.id_pesawat=r_penerbangan.id_pesawat INNER JOIN maskapai ON pesawat.id_maskapai=maskapai.id_maskapai INNER JOIN jadwal ON jadwal.id_jadwal=r_penerbangan.id_jadwal WHERE pesanan.no_ktp='$id'";

                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['kode_booking'] ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['id_pesawat'] ?></td>
                         <td><?php echo $pecah['tipe'] ?></td>
                         <td><?php echo $pecah['tujuan'] ?></td>
                         <td><?php echo $pecah['asal'] ?></td>
                         <td><?php echo $pecah['tgl_penerbangan'] ?></td>
                         <td><?php echo $pecah['waktu_brkt'] ?></td>
                         <td><?php echo $pecah['waktu_tiba'] ?></td>
                         <td><?php echo $pecah['harga'] ?></td>
                         <td><?php echo $pecah['status'] ?></td>
                         <td><?php echo $pecah['tanggal_pesan'] ?></td>
                                      
                     </tr>

                     <?php 
                        $no++;
                        }
                      ?>
                 </tbody>
             </table>
        </div>
    </div>
</div>