<?php 
  $id= $_GET['id'];
  mysqli_query($con, "DELETE FROM tb_tajaran WHERE id_tajaran='$id' ");
  echo "<script>
  alert('Data Telah Terhapus !!');
  window.location='?page=v_tajaran';
  </script>";
 ?>