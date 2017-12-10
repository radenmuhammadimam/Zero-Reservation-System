<?php 
$id = $_GET['id'];
$query = "DELETE FROM r_penerbangan WHERE id_penerbangan='$id'";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="1;url=index.php?page=maskapai&menu=viewjadwal">';

 ?>


<div class="container-fluid">
            <div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil didelete
             </div>

            </div>
</div>