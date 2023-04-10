<?php
$idg = $_GET['idg'];
$sqlMapel= mysqli_query($con, "SELECT download.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
FROM download INNER JOIN tb_mapel ON download.id_mapel=tb_mapel.id_mapel
INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

WHERE download.id_perangkat = '$idg'");
$data= mysqli_fetch_array($sqlMapel);
?>
<!-- YamibBae Says !! Koding diatas gak harus ada karena saya capek ngetik ulang ya copas aja [ yang perlu itu cuma mengambil data id mapel nya aja supaya bisa kembali ke halaman semula] -->




<?php 
$idg= $_GET['idg'];
mysqli_query($con,"DELETE FROM download WHERE id_perangkat='$idg' ") or die(mysqli_error($con)) ;
echo " 
<script>
alert('Data Telah Terhapus !!');
window.location='?page=add-file& idg=  $data[id_mapel] ';


</script> ";

?>