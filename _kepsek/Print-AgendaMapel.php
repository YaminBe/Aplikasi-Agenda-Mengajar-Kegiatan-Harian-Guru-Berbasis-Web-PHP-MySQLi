<!DOCTYPE html>
<html>
<head>
	<title>Laporan Agenda Harian Mata Pelajaran</title>
	<style>
	body{
		font-family: "Arial Narrow", Arial, sans-serif;
		
	
	}
	</style>
</head>
<body>
		<?php 
		include '../koneksi.php';
	$idg = $_GET['idg'];
	$sqlMapel= mysqli_query($con, "SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru,tb_guru.nama_guru,tb_guru.nip
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_mapel.id_mapel = '$idg'
		 ");
	     $data= mysqli_fetch_array($sqlMapel);

	 ?>
<!-- 	<center>
		 <h3><p>
	 	Agenda Mengajar Guru <br> SMKN 4 PAYAKUMBUH <br>
	 	Tahun Ajaran 2017/2018 </h3>
	 </p>
	</center> -->


	<table width="100%" height="100%" style="border: 2px dashed;">
  <tr>
    <td><h2><p align="center">LAPORAN KEGIATAN HARIAN GURU</p>
    <p align="center">TAHUN AJARAN 2018-2018  </p></h2>
    <hr style="border: 2px;">
    <br>
  
    <p align="center" class="style1"><img src="../images/logo.jpg" width="155" height="149" /></p>
    <table width="200" align="center">
      <tr>
        <td><span class="style2">NAMA</span></td>
        <td><span class="style2">:</span></td>
        <td><span class="style2"><?php echo $data['nama_guru']; ?></span></td>
      </tr>
      <tr>
        <td><span class="style2">NIP/NUPTK</span></td>
        <td><span class="style2">:</span></td>
        <td><span class="style2"><?php echo $data['nip']; ?></span></td>
      </tr>
    </table>
       <br>
    <br>
  
    <center><p><h2>SMK NEGERI 4 PAYAKUMBUH</h2></p></center>
    <p align="center" class="style1">Jl.Koto Kaciak, Padang Sikabu, Kec Lamposi Tigo Nagori</p>
    <p align="center" class="style1"> Email : smkn4pyk@com</p>
    <p align="center" class="style1">&nbsp; </p>
    <p align="center" class="style1">&nbsp;</p></td>
  </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


	 <table>
	 		<tr>
	 			<td>Guru Pengampu</td>
	 			<td>:</td>
	 			<td><?php echo $data['nama_guru']; ?></td>
	 		</tr>
	 		<tr>
	 			<td>Mata Pelajaran</td>
	 			<td>:</td>
	 			<td> <?php echo $data['nama_mapel']; ?> </td>
	 		</tr>
	 		<tr>
	 			<td>Kelas</td>
	 			<td>:</td>
	 			<td><?php echo $data['kelas']; ?></td>
	 		</tr>
	 		<tr>
	 			<td>Dicetak Pada Tanggal</td>
	 			<td>:</td>
	 			<td> <?php echo date('d F Y'); ?> </td>
	 		</tr>
	 
	 </table>
	 <hr>
	<table border="2" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
   
                      <tr height="40">
                        <th>No.</th>
                        <th>Tanggal</th>
                       <!--  <th>Kelas</th> -->
                        <th>Materi</th>
                        <th>Absen</th>
                        <th>Keterangan</th>                 
                      </tr>

                      <?php 
                      $no=1;
                        $sql = mysqli_query($con,"SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
                        FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

                        WHERE tb_mapel.id_mapel = '$idg'") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td align="center"> <?=$no++; ?>.</td>
                        <td> <?=$data['tgl'];?> </td>
                        <!-- <td> <?=$data['nama_mapel'];?></td> -->
                        <!-- <td><?=$data['kelas'];?></td> -->
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                      </tr>
                      <?php 
                       }

                       ?>
                     
                

    <?php 
    include '../koneksi.php';

  $sqlMapel= mysqli_query($con, "SELECT * FROM tb_kepsek ORDER BY id_kepsek DESC LIMIT 1
     ");
       $data= mysqli_fetch_array($sqlMapel);

   ?>
     <table width="100%">
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
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>


</body>
</html>