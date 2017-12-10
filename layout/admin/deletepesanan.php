<?php 
$id = $_GET['id'];
$query = "DELETE FROM pesanan WHERE id_pesan='$id'";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewpesanan">';

 ?>


<div class="container-fluid">
            <div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil didelete
             </div>

            </div>
</div>