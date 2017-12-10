<?php 
$id = $_GET['id'];
$query = "DELETE FROM customer WHERE no_ktp='$id'";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewcustomer">';
 ?>


<div class="container-fluid">
            <div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil didelete
             </div>

            </div>
</div>