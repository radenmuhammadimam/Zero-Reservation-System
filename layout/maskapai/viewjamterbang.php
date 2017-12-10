
<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Jam Penerbangan</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>Jam Berangkat</th>
                         <th>Jam tiba</th>
                         <th>Tanggal Penerbangan</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 

                        $querySelect = "SELECT  * FROM jadwal ";

                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['waktu_brkt'] ?></td>
                         <td><?php echo $pecah['waktu_tiba'] ?></td>
                         <td><?php echo $pecah['tgl_penerbangan'] ?></td>
                         <td> 
                            <a href="index.php?page=maskapai&menu=viewjamterbang&act=edit&id=<?php echo $pecah['id_pesawat']; ?> ">Edit</a>
                            <a href="index.php?page=maskapai&menu=viewjamterbang&act=delete&id=<?php echo $pecah['id_pesawat']; ?> ">Delete</a>
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