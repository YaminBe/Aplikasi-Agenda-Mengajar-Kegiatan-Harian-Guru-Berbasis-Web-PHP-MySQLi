<?php include '../koneksi.php'; ?>	
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>

<?php
session_start();
if (@$_SESSION['guru']) {
?>
	<?php
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>


<style type="text/css">
	.table{
		font-family: Arial, Helvetica, sans-serif;

	}
.tex{
	font-family: Arial, Helvetica, sans-serif;
</style>


<center>
	<img src="../images/logo.jpg" width="60">
	<h3 class="tex">LAPORAN KEGIATAN HARIAN GURU <br>
SMK NEGERI 4 PAYAKUMBUH</h3>
</center>
<hr>


	 <table class="table" cellpadding="4">
	 		<tr>
	 			<td>Nip</td>
	 			<td>:</td>
	 			<td> <?php echo $data['nip']; ?> </td>
	 		</tr>
	 		<tr>
	 			<td>Nama Guru</td>
	 			<td>:</td>
	 			<td><?php echo $data['nama_guru']; ?></td>
	 		</tr>



	 
	 </table>
	  		<p class="tex">Tanggal :<?php echo $_GET['tgl1']." - ". $_GET['tgl1']; ?>
	</p>
	
	<h3 class="tex"><b>Kegiatan Teaching</b></h3>

		<table class="table" width="100%" border="2" style="border-collapse: collapse;" cellpadding="3" cellspacing="0">
		<thead>
		<tr style="height: 40px;background-color:#E9FEBE;">
		<th width="30">No.</th>
		<th>Tanggal</th>
		<th>Pukul</th>
		<th>Kegiatan</th>
		<th>Materi</th>
		<th>Kehadiran</th>
		<th>Keterangan</th>

		</tr>
		</thead>
		<tbody>
		<?php 
	
		$no=1;

		$sql_Bayar = mysqli_query($con, "SELECT * FROM tb_agenda 

			INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
		WHERE tb_agenda.tgl BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'AND tb_agenda.id_guru='$sesi' ORDER BY tb_agenda.id_guru='$sesi' ASC") or die(mysqli_error($con)) ;
		while ($d = mysqli_fetch_array($sql_Bayar)) {
		?>
		<tr>
		<td><?php echo $no++; ?>.</td>
		<td><?php echo $d['tgl']; ?> </td>
		<td><?php echo $d['jam']; ?> </td>
		<td>Mengajar <?php echo $d['nama_mapel']; ?></td>
		<td><?php echo $d['materi']; ?> </td>
		<td><?php echo $d['absen']; ?> </td>
		<td><?php echo $d['ket']; ?> </td>

		</tr>
		<?php 


		}

		?>

		</tbody>
		</table>
		<h3 class="tex"><b>Kegiatan Non Teaching</b></h3>

	<table class="table" width="100%" border="2" style="border-collapse: collapse;" cellpadding="3" cellspacing="0">
	<thead>
	<tr style="height: 40px;background-color:rgb(203,215,224);">
	<th width="30">No.</th>
	<th>Tanggal</th>
	<th>Kegiatan</th>
	<th>Isi Kegiatan</th>
	<th>Keterangan</th>

	</tr>
	</thead>
	<tbody>
	<?php 

	$no=1;

	$sql_Bayar = mysqli_query($con, "SELECT * FROM tb_agendalain
	WHERE tgl_kgt BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]'AND id_guru='$sesi' ORDER BY id_guru='$sesi' ASC") or die(mysqli_error($con)) ;
	while ($d = mysqli_fetch_array($sql_Bayar)) {
	?>
	<tr>
	<td><?php echo $no++; ?>.</td>
	<td><?php echo $d['tgl_kgt']; ?> </td>
	<td><?php echo $d['kegiatan']; ?> </td>
	<td><?php echo $d['isi']; ?> </td>
	<td><?php echo $d['keterangan']; ?> </td>

	</tr>
	<?php 


	}

	?>

	</tbody>
	</table>

	    <?php 
    include '../koneksi.php';

  $sqlMapel= mysqli_query($con, "SELECT * FROM tb_kepsek ORDER BY id_kepsek DESC LIMIT 1
     ");
       $data= mysqli_fetch_array($sqlMapel);

   ?>
     <table width="100%" class="tex">
      <!--  <a href="#" class="no-print" onclick="window.print();"> <button style="height: 40px; width: 70px; background-color: dodgerblue;border:none; color: white; border-radius:7px;font-size: 17px; " type=""> Cetak</button> </a> -->
        <tr>
          <td align="right" colspan="6" rowspan="" headers="">
            <p>Payakumbuh, <?php echo date (" d F Y") ?>  <br> <br>
            Kepala Sekolah </p> <br> <br>
            <p> <?php echo $data['nama'] ?> <br>______________________</p>
          </td>
        </tr>
      </table>


		<?php
} else{

echo "<script>
window.location='../index.php';</script>";

}
