
<div class="card">
    <div class="card-header">
      <h3 class="card-title">
          <span class="fa fa-file-o"></span> Laporan Kegiatan Harian
        </h3> 


    </div>
    <div class="card-body">

<table id="bootstrap-data-table" class="table table-condensed">
<thead>
  <tr>
    <th>No.</th>
    <th>Nama Guru</th>
    <th>Jumlah Penginputan Agenda </th>
     <th>
       Aksi
     </th>

                      
  </tr>
</thead>
<tbody>
  <?php 
  $no=1;
    $now = date('y-m-d'); 
  $sql = mysqli_query($con," SELECT * FROM tb_guru GROUP BY id_guru ASC") or die(mysqli_error($con));
  while ( $data=mysqli_fetch_array($sql)) {
  ?>
  <tr>
    <td><?php echo $no++ ?>. </td>
    <td><?php echo $data['nama_guru'] ?> </td>
    <td>
<?php
 $now = date('y-m-d'); 
$pr =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_agenda WHERE tgl='$now' AND id_guru='$data[id_guru]' "));
?>
<?php
echo "<b><span style='color:red;font-size:23px;'>$pr</span> </b> Kali Mengisi Agenda Hari Ini";

?>
    </td>
    <td> <a href="?page=lihatini&idg= <?php echo $data['id_guru']; ?>" class="btn btn-default" style="color: red;"> <span class="fa fa-search"></span> Lihat Detail</a> </td>


  </tr>
<?php } ?>
 
</tbody>
</table>
    </div>
</div>
<div class="card">

</div>