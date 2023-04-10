<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12">

<div class="card">
                        <div class="card-header">
                            <h3><strong class="card-title"> <span class="fa fa-folder-open"></span> Mata Pelajaran</strong></h3>
                        </div>
                        <div class="card-body">
                          <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>  
                          <a href="?page=add-mapel" title="Detail" class="btn btn-primary"> <span class="fa fa-plus-square"></span> Tambah Mata Pelajaran</a>
                          <br>
                          <br>
                          <div class="table-responsive">
                            
                  <table class="table table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Mata Pelajaran</th>
                        <th>Jurusan</th>
                        <th>Tingkat</th>
                        <th>Opsi</th>                     
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                  $sql = mysqli_query($con,"
                  SELECT * FROM tb_mapel WHERE id_guru='$sesi' ") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$no++;?> </td>
                        <td> <?=$data['nama_mapel'];?></td>
                        <td><?=$data['jurusan'];?></td>
                        <td><?=$data['tingkat'];?></td>
                        <td>
                          <a href="?page=edit-mapel& id= <?php echo $data['id_mapel'] ;?> " title="Edit" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                          <a href="?page=hapus-mapel& id= <?php echo $data['id_mapel'] ;?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span></a>
                        </td>
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>
                         
                         
                </div>
                        </div>
                    </div>
    
  </div>
  
</div>
