<?php
$idg = $_GET['idg'];
$sqlMapel= mysqli_query($con, "SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

WHERE tb_agenda.id_agenda = '$idg'");
$data= mysqli_fetch_array($sqlMapel);
?>
<!-- YamibBae Says !! Koding diatas gak harus ada karena saya capek ngetik ulang ya copas aja [ yang perlu itu cuma mengambil data id mapel nya aja supaya bisa kembali ke halaman semula] -->




<?php 
$idg= $_GET['idg'];
mysqli_query($con,"DELETE FROM tb_agenda WHERE id_agenda='$idg' ") or die(mysqli_error($con)) ;
echo " 
<script>
alert('Data Telah Terhapus !!');
window.location='?page=v_mapelagenda& idg=  $data[id_mapel] ';


</script> ";

?>