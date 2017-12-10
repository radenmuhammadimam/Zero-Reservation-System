<?php 
$id = $_GET['id'];
$query = "DELETE FROM maskapai WHERE id_maskapai='$id'";
$result = mysqli_query($koneksi, $query) or die(mysqli_error($koneksi));

echo '<meta http-equiv="refresh" content="1;url=index.php?page=admin&menu=viewmaskapai">';

 ?>


<div class="container-fluid">
            <div class="panel panel-success">
                 <div class="panel-heading">         
                 Berhasil didelete
             </div>

            </div>
</div>