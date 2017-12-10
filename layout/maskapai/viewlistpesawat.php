
<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Pesawat</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>ID Pesawat</th>
                         <th>ID Maskapai</th>
                         <th>Keterangan</th>
                         <th>Rute</th>
                         <th>Jumlah Seat</th>
                         <th>Tipe</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 

                        $id = $_SESSION['userID'];
                        $querySelect = "SELECT  * FROM pesawat WHERE id_maskapai='$id'";

                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['id_pesawat'] ?></td>
                         <td><?php echo $pecah['id_maskapai'] ?></td>
                         <td><?php echo $pecah['keterangan'] ?></td>
                         <td><?php echo $pecah['rute'] ?></td>
                         <td><?php echo $pecah['jumlah_seat'] ?></td>
                         <td><?php echo $pecah['tipe'] ?></td>
                         <td> 
                            <a href="index.php?page=maskapai&menu=viewpesawat&act=edit&id=<?php echo $pecah['id_pesawat']; ?> ">Edit</a>
                            <a href="index.php?page=maskapai&menu=viewpesawat&act=delete&id=<?php echo $pecah['id_pesawat']; ?> ">Delete</a>
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