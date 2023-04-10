<?php 
  $id= $_GET['id'];
  mysqli_query($con, "DELETE FROM tb_mastermapel WHERE id_mMapel='$id' ");
  echo "<script>
  alert('Data Telah Terhapus !!');
  window.location='?page=v_mapel';
  </script>";
 ?>