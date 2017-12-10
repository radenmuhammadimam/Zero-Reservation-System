

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Pesanan (Transaksi)</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>ID Pesan</th>
                         <th>No KTP</th>
                         <th>Nama Customer</th>
                         <th>No Seat</th>
                         <th>Status</th>
                         <th>Kode Booking</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $querySelect = "SELECT `id_pesan` , `no_ktp` , `nama`, `no_seat`, `status`, `kode_booking` FROM `pesanan` JOIN `customer` USING (`no_ktp`)";
                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['id_pesan'] ?></td>
                         <td><?php echo $pecah['no_ktp'] ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['no_seat'] ?></td>
                         <td><?php echo $pecah['status'] ?></td>
                         <td><?php echo $pecah['kode_booking'] ?></td>
                         <td> 
                            <a href="index.php?page=admin&menu=viewpesanan&act=edit&id=<?php echo $pecah['id_pesan']; ?> ">Edit</a>
                            <a href="index.php?page=admin&menu=viewpesanan&act=delete&id=<?php echo $pecah['id_pesan']; ?> ">Delete</a>
                         </td>
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