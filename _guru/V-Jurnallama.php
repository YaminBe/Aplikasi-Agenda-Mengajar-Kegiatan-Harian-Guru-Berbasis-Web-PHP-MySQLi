<div class="card">
                        <div class="card-header">
                            <strong class="card-title"> <span class="fa fa-th"></span> Daftar Agenda Guru</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-condensed">
                    <thead>
                      <tr>
                        <th>Tanggal</th>
                        <th>Mapel</th>
                        <th>Kelas</th>
                        <th>Materi</th>
                        <th>Absen</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>                     
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                  $sql = mysqli_query($con,"
                  SELECT * FROM tb_guru p INNER JOIN tb_agenda b ON p.id_guru=b.id_guru ") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$data['tgl'];?> </td>
                        <td> <?=$data['mapel'];?></td>
                        <td><?=$data['kelas'];?></td>
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                        <td>
                          <a href="" title="Detail" class="btn btn-info"> Detail</a>
                        </td>
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>
                        </div>
                    </div>