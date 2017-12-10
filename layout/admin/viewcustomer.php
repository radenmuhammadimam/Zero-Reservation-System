

<div class="container-fluid">
    <div class="card">
        <div class="header">
            <h2>List Data Customer</h2>
        </div>
        <div class="body">


             <table class="table">
                 <thead>
                     <tr>
                         <th>NO</th>
                         <th>NO KTP</th>
                         <th>Nama</th>
                         <th>Username</th>
                         <th>Alamat</th>
                         <th>Umur</th>
                         <th>Jenis Kelamin</th>
                         <th>No Telepon</th>
                         <th>Saldo</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody>
                      <?php 
                        $querySelect = "SELECT * FROM customer";
                        $result = mysqli_query($koneksi,$querySelect);
                        $no = 1;

                        while ($pecah = mysqli_fetch_assoc($result)) {


                     ?>
                     <tr>
                         <td><?php echo $no ?></td>
                         <td><?php echo $pecah['no_ktp'] ?></td>
                         <td><?php echo $pecah['nama'] ?></td>
                         <td><?php echo $pecah['username'] ?></td>
                         <td><?php echo $pecah['alamat'] ?></td>
                         <td><?php echo $pecah['umur'] ?></td>
                         <td><?php echo $pecah['jenis_kelamin'] ?></td>
                         <td><?php echo $pecah['no_telepon'] ?></td>
                         <td><?php echo $pecah['saldo'] ?></td>
                         <td> 
                            <a href="index.php?page=admin&menu=viewcustomer&act=edit&id=<?php echo $pecah['no_ktp']; ?> ">Edit</a>
                            <a href="index.php?page=admin&menu=viewcustomer&act=delete&id=<?php echo $pecah['no_ktp']; ?> ">Delete</a>
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