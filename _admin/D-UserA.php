<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_user WHERE id_admin='$id'  ");
  echo " <script>alert('Data Telah Terhapus !!');window.location='?page=v_user';</script> ";


 ?>