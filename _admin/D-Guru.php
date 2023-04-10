<?php
$idg = $_GET['idg'];
mysqli_query($con, " DELETE FROM tb_guru WHERE id_guru='$idg' ");
echo " <script>alert('Data Tealah Terhapus !!');window.location='?page=v_guru';</script> ";
?>