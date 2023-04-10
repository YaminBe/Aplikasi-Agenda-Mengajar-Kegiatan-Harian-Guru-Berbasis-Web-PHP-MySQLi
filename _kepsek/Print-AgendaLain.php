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
  $sqlMapel= mysqli_query($con, "SELECT * FROM tb_agendalain INNER JOIN tb_guru ON tb_agendalain.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$idg'");
       $data= mysqli_fetch_array($sqlMapel);

   ?>



   <table>
      <tr>
        <td>Guru Pengampu</td>
        <td>:</td>
        <td><?php echo $data['nama_guru']; ?></td>
      </tr>
      <tr>
        <td>Dicetak Pada Tanggal</td>
        <td>:</td>
        <td> <?php echo date('d F Y'); ?> </td>
      </tr>
   
   </table>
   <hr>
  <table border="2" width="100%" cellspacing="0" cellpadding="4" style="border-collapse: collapse;">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Judul Kegiatan</th>
                        <th>Isi Kegiatan</th>
                        <th>Keterangan</th>

                                          
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $sql = mysqli_query($con,"SELECT * FROM tb_agendalain INNER JOIN tb_guru ON tb_agendalain.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$idg'") 
                    or die(mysqli_error($con));
                    ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$no++;?> </td>
                        <td> <?=$data['tgl_kgt'];?> </td>
                        <td> <?=$data['kegiatan'];?></td>
                         <td> <?=$data['isi'];?></td>
                        <td><?=$data['keterangan'];?></td>

                       
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>

              </div>

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