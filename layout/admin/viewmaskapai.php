

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Maskapai</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>ID Maskapai</th>
                         <th>Username</th>
                         <th>Nama</th>
                         <th>Jumlah Pesawat</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $querySelect = "SELECT * FROM maskapai";
                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['id_maskapai'] ?></td>
                         <td><?php echo $pecah['username'] ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['jmlh_pesawat'] ?></td>
                         <td> 
                            <a href="index.php?page=admin&menu=viewmaskapai&act=edit&id=<?php echo $pecah['id_maskapai']; ?> ">Edit</a>
                            <a href="index.php?page=admin&menu=viewmaskapai&act=delete&id=<?php echo $pecah['id_maskapai']; ?> ">Delete</a>
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