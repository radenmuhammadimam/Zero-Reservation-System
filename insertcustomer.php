<?php 
  include 'config/db.php';

  $noktp = $_POST['noktp'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $address = $_POST['address'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $notel = $_POST['notel'];


  $insertQuery = "INSERT INTO customer (no_ktp,username,password,nama,alamat,umur,jenis_kelamin,no_telepon) VALUES ('$noktp','$username','$password','$name','$address','$age','$gender','$notel')";


  if (mysqli_query($koneksi, $insertQuery)) {
     echo "
        <script> alert('Registrasi Sukses') 
        window.location = 'login.php';
        </script>
      ";
  } else {
      echo "Error: " . $insertQuery . "<br>" . mysqli_error($koneksi);
  }
  
 ?>