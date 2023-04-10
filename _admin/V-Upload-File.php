<div class="card">
                        <div class="card-header">
                            <h3><strong class="card-title"> <span class="fa fa-folder-open"></span> File Manager</strong></h3>
                        </div>
                        <div class="card-body">
                         
                          <!-- <a href="?page=add-mapel" title="Detail" class="btn btn-primary"> <span class="fa fa-plus-square"></span> Tambah Mata Pelajaran</a> -->


                 <table class="table table-condensed table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Mata Pelajaran</th>
                        <th>Kelas</th>
                        <th>File</th>
                                          
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $sql = mysqli_query($con,"SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru ") 
                    or die(mysqli_error($con));
                    ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$no++;?> </td>
                        <td> <?=$data['nama_mapel'];?> </td>
                        <td><?=$data['kelas'];?></td>
                        <td>
                          <a href="?page=add-file& idg= <?php echo $data['id_mapel']; ?> " title="" class="btn btn-success btn-xs"> <span class="fa fa-upload"></span> Detail File Perangkat</a>
                        </td>
                      
                       
                      </tr>
                      <?php 
                       }

                       ?>


                     
                    </tbody>
                  </table>
                        </div>
                    </div>