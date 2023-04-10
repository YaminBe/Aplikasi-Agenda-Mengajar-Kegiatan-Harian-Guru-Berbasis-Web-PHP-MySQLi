<?php 
$id= $_GET['id'];
mysqli_query($con,"DELETE FROM tb_kelas WHERE idkelas='$id' ") or die(mysqli_error($con)) ;
echo "<script>
alert('Data Telah Terhapus !!');
window.location='?page=v_kejur';
</script>";

 ?>