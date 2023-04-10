  <?php
include '../koneksi.php';
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>




<div class="card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="fa fa-file-o"></span> Laporan Kegiatan Harian
        </h3> 


    </div>
    <div class="card-body">

        <form class="form-inline" method="GET" target="_blank" action="laporan_harian.php">
    <div class="form-group">
    <label for="exampleInputName2">Mulai Tanggal</label>
    <input type="date" name="tgl1" class="form-control" id="exampleInputName2" value="<?php echo date('Y-m-d') ?>">
    </div>
    <div class="form-group">
    <label for="exampleInputEmail2">Sampai Tanggal</label>
    <input type="date" name="tgl2" class="form-control" id="exampleInputEmail2" value="<?php echo date('Y-m-d') ?>">
    </div>
    <input type="submit" class="btn btn-danger" value="Cetak"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a target="_blank" href="cetak-kegiatan-hariini.php?idg= <?php echo $data['id_guru']; ?>" class="btn btn-success">
<i class="fa fa-print"></i> Cetak Kegiatan Hari Ini
</a>
  </form>
  <hr>




<table class="table table-condensed">
<thead>
  <tr>
    <th>No.</th>
    <th>Tanggal</th>
    <th>Pukul</th>
    <th>Kegiatan</th>
    <th>Keterangan</th>

                      
  </tr>
</thead>
<tbody>
  <?php 
  $no=1;
    $now = date('y-m-d'); 

  $sql = mysqli_query($con," SELECT * FROM tb_agenda WHERE tgl='$now' AND id_guru = '$sesi'") or die(mysqli_error($con));

  while ( $data=mysqli_fetch_array($sql)) {
  ?>
  <tr>
    <td> <?=$no++;?> </td>
    <td> <?=$data['tgl'];?> </td>
    <td>
     <!-- Jam -->
     <b>Teaching</b>
      <hr>
    <ul class="list-group">
       <?php 
  $now = date('y-m-d'); 
  $sql = mysqli_query($con,"SELECT * FROM tb_agenda
  INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru
  INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel

  WHERE tb_agenda.tgl='$now' AND tb_agenda.id_guru='$sesi' ");
  while ($data1 = mysqli_fetch_array($sql)) { ?>
   <li class="list-group-item"><?php echo $data1['jam'] ?> </li>

  <?php } ?>
</ul>

    </td>
     <td>
      <b>Teaching</b>
      <hr>
      <ul class="list-group">
      <?php 
      $now = date('y-m-d'); 
      $sql = mysqli_query($con,"SELECT * FROM tb_agenda
      INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru
      INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel

      WHERE tb_agenda.tgl='$now' AND tb_agenda.id_guru='$sesi' ");
      while ($data1 = mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item">Mangajar : <b><?=$data1['nama_mapel'];?></b></li>

      <?php } ?>
    </ul>


      
<!-- Gegiatan Lain -->
<br>

<b>Non Teaching</b>
<hr>

      <ul class="list-group">
      <?php 
    $no=1;
    $now= date('Y-m-d');
    $sql = mysqli_query($con," SELECT * FROM tb_agendalain WHERE tgl_kgt='$now' AND id_guru = '$sesi'") or die(mysqli_error($con));
    while ( $data1=mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item"><?php echo $data1['kegiatan'] ?></li> 

    <?php } ?>
     </ul>

     </td>

    <td>

      <b>Teaching</b>
      <hr>
      <ul class="list-group">
      <?php 
      $now = date('y-m-d'); 
      $sql = mysqli_query($con,"SELECT * FROM tb_agenda
      INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru
      INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel

      WHERE tb_agenda.tgl='$now' AND tb_agenda.id_guru='$sesi' ");
      while ($data1 = mysqli_fetch_array($sql)) { ?>
      <li class="list-group-item"><b><?=$data1['ket'];?></b></li>

      <?php } ?>
    </ul>


      
<!-- Gegiatan Lain -->
<br>

<b>Non Teaching</b>
<hr>

      <ul class="list-group">
      <?php 
    $no=1;
    $now= date('Y-m-d');
    $sql = mysqli_query($con," SELECT * FROM tb_agendalain WHERE tgl_kgt='$now' AND id_guru = '$sesi'") or die(mysqli_error($con));
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
    </div>
</div>
<div class="card">
<?php
include '../koneksi.php';
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
<!-- <div class="card-header">

<a target="_blank" href="Print-AgendaLain.php?idg= <?php echo $data['id_guru']; ?>" class="btn btn-danger" style="border-top-right-radius: 20px;background-color:#f50057;border:none;">
<i class="fa fa-print"></i> Cetak / Print
</a>

</div> -->
</div>