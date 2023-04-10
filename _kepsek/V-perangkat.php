<div class="card">
    <div class="card-header">
        <strong class="card-title"> <span class="fa fa-folder-open-o"></span> Daftar Agenda Guru</strong>

    </div>
    <div class="card-body">

<table id="bootstrap-data-table" class="table">
    <thead>
      <tr>
        <th>No.</th>
        <th>NUPTK</th> 
        <th>Nama Guru</th>  
        <th> <span class="fa fa-folder-open-o"></span> File Perangkat</th>                      
      </tr>
    </thead>
    <tbody>
      <?php 
      $now = date('y-m-d');
      $no=1;
        $sql = mysqli_query($con,"SELECT * FROM tb_guru order by id_guru asc") or die(mysqli_error($con));
 ;
  while ( $data=mysqli_fetch_array($sql)) {
       ?>
      <tr>
        <td> <center><span class='badge badge-danger'><?=$no++; ?>.</span></center></td>
        <td> <?=$data['nip'];?> </td>
         <td> <?=$data['nama_guru'];?> </td>
       
                <td>
          <?php 
          $n=1;
          $mapel = mysqli_query($con,"SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$data[id_guru]' ");
          while ($dm = mysqli_fetch_array($mapel)) {
            echo "<span class='badge badge-primary'>".$n++.".</span>";

             echo "<a href='?page=v_filemapel& idg= $dm[id_mapel] 'style='color:#2979ff;border-bottom:2px;'><b> " .$dm['kelas']. "</b> |<b> " .$dm['nama_mapel']. "</b></a>"."<br>";

          }

           ?>

          <!-- <a href="?page=v_mapeld&idg=<?php echo $data['id_guru']; ?> " title="Lihat Agenda" class="btn btn-info"> <span class="fa fa-calendar"></span> Agenda Pembelajaran</a>

           <a href="?page=v_file&idg= <?php echo $data['id_guru']; ?> " title="Lihat Perangkat" class="btn btn-success"> <span class="fa fa-folder-open"></span> Perangkat Pemebelajaran</a>

             <a href="?page=v_mapeld&idg=<?php echo $data['id_guru']; ?> " title="Lihat Agenda Lainnya" class="btn btn-primary"> <span class="fa fa-calendar"></span> Agenda Lain</a> -->
        </td>
      </tr>
      <?php 
       }

       ?>
     
    </tbody>
  </table>
</div>
</div>
