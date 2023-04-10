  <?php
include '../koneksi.php';
$idg= $_GET['idg'];
$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$idg'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
<style>
.tex{
	font-family: Arial, Helvetica, sans-serif;
}
.table{
	font-family: Arial, Helvetica, sans-serif;
}
	
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
	 <br>
<table width="100%" border="3" cellpadding="3" style="border-collapse: collapse;" class="tex">
<thead>
  <tr style="height: 40px;">
    <th>No.</th>
    <th>Tanggal</th>
    <th>Kegiatan</th>
    <th>Keterangan</th>

                      
  </tr>
</thead>
<tbody>
  <?php 
  $no=1;

  $sql = mysqli_query($con," SELECT * FROM tb_agenda WHERE id_guru = '$idg'") or die(mysqli_error($con));

  while ( $data=mysqli_fetch_array($sql)) {
  ?>
  <tr>
    <td> <?=$no++;?> </td>
    <td> <?=$data['tgl'];?> </td>
    
     <td>
      <b>Kegiatan Mengajar</b>
      <hr>
      <ul>
      <?php 
      $now = date('y-m-d'); 
      $sql = mysqli_query($con,"SELECT * FROM tb_agenda
      INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru
      INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel

      WHERE tb_agenda.tgl='$now' AND tb_agenda.id_guru='$idg' ");
      while ($data1 = mysqli_fetch_array($sql)) { ?>
      <li>Pukul :<b><?=$data1['jam'];?></b> Mangajar : <b><?=$data1['nama_mapel'];?></b></li>

      <?php } ?>
    </ul>


      
<!-- Gegiatan Lain -->
<br>

<b>Kegiatan Non Mengajar</b>
<hr>

      <ul class="list-group">
      <?php 
    $no=1;
    $now= date('Y-m-d');
    $sql = mysqli_query($con," SELECT * FROM tb_agendalain WHERE tgl_kgt='$now' AND id_guru = '$idg'") or die(mysqli_error($con));
    while ( $data1=mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item"><?php echo $data1['kegiatan'] ?></li> 

    <?php } ?>
     </ul>

     </td>

    <td>

      <b>Kegiatan Mengajar</b>
      <hr>
      <ul class="list-group">
      <?php 
      $now = date('y-m-d'); 
      $sql = mysqli_query($con,"SELECT * FROM tb_agenda
      INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru
      INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel

      WHERE tb_agenda.tgl='$now' AND tb_agenda.id_guru='$idg' ");
      while ($data1 = mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item"><?=$data1['ket'];?></li>

      <?php } ?>
    </ul>


      
<!-- Gegiatan Lain -->
<br>

<b>Kegiatan Non Mengajar</b>
<hr>

      <ul class="list-group">
      <?php 
    $no=1;
    $now= date('Y-m-d');
    $sql = mysqli_query($con," SELECT * FROM tb_agendalain WHERE tgl_kgt='$now' AND id_guru = '$idg'") or die(mysqli_error($con));
    while ( $data1=mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item"><?php echo $data1['keterangan'] ?></li> 

    <?php } ?>
     </ul>      

    </td>

  
   
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
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?>
