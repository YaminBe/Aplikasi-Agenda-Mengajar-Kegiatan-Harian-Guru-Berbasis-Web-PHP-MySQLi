  <?php
  $idg= $_GET['idg'];
$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$idg'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

<div class="card">
                        <div class="card-header">
                            <h3>
                              <strong class="card-title"> <span class="fa fa-folder-open"></span> Daftar Mata Pelajaran<!--  [ <code><?php echo $data['nama_guru']; ?> </code> ] --></strong>
                            </h3>
                        </div>
                        <div class="card-body">
                        	<b>Berikut Matapelajaran [ <code><?php echo $data['nama_guru']; ?> </code> ] </b>
                        	<br>
                        	<br>
                  <table class="table table-condensed table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Mata Pelajaran</th>
                        <th>Tingkat</th>
                        <th>Kelas</th>
                        <th>Agenda</th>
                                          
                      </tr>
                    </thead>
                    <!-- Query lama -->
                    <!--  SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.kelas,tb_kelas.id_guru,tb_kelas.id_mapel,tb_guru.id_guru
                    FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                    INNER JOIN tb_kelas ON tb_agenda.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_agenda.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$sesi'
                     -->
                     <!-- SELECT tb_kelas .*,tb_mapel.id_mapel,tb_mapel.nama_mapel,tb_mapel.tingkat,tb_guru.id_guru FROM tb_kelas 
                        INNER JOIN tb_mapel ON tb_kelas.idkelas=tb_mapel.id_mapel
                        INNER JOIN tb_guru ON tb_kelas.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$sesi' -->
                    <tbody>
                    <?php 
                    $no=1;
                    $sql = mysqli_query($con,"SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$idg'") 
                    or die(mysqli_error($con));
                    ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$no++;?> </td>
                        <td> <?=$data['nama_mapel'];?> </td>
                        <td> <?=$data['tingkat'];?></td>
                        <td><?=$data['kelas'];?></td>
                        <td>
                          <a href="?page=v_mapelagenda& idg= <?php echo $data['id_mapel']; ?> " title="" class="btn btn-success btn-xs"> <span class="fa fa-search"></span> Detail Agenda</a>
                        </td>
                      
                       
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>
                        </div>

        


                    </div>