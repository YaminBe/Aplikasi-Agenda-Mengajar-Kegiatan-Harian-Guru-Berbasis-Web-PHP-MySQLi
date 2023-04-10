<?php 
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_kepsek WHERE id_kepsek='$id'  ");
  echo " <script>alert('Data Telah Terhapus !!');window.location='?page=v_user';</script> ";


 ?>