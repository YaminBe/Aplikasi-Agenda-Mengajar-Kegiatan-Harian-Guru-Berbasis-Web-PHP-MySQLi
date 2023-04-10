

<div class="col-lg-6">
                    <div class="card" style="border-radius:10px;">
                        <div class="card-header">
                            <strong class="card-title"><span class="fa fa-table"></span> Mata Pelajaran</strong>

                        </div>
                        <div class="card-body">
                                         <table class="table table-condensed table-hover table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Nama Mata Pelajaran</th>             
                                  <th scope="col">Opsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no=1;
                                $sqlMapel = mysqli_query($con, "SELECT * FROM tb_mastermapel") or die(mysqli_error($con));

                                while ($data = mysqli_fetch_array($sqlMapel)) {
                                  # code...
                                

                                 ?>
                                <tr>
                                  <th scope="row"><?=$no++?>. </th>
                                  <td><?=$data['mapel'];?></td>                                  
                                  <td>
                                    <a href="?page=e_mapel&idmap=<?=$data['id_mMapel'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                                   
                                    <a href="?page=d_mapel&id=<?=$data['id_mMapel'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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

                <div class="col-lg-6">
                    <div class="card" style="border-radius:10px;">
                        <div class="card-header">
                            <strong class="card-title"><span class="fa fa-edit"></span> Edit Pelajaran</strong>

                        </div>
                        <div class="card-body">
<?php
$idmap = @$_GET['idmap'];
$sql = mysqli_query($con,"select * from tb_mastermapel where id_mMapel = '$idmap'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
                            <form action="?page=act" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label>Kode Mata Pelajaran</label>
                                    <input type="text" name="idmap" value="<?=$data['id_mMapel']?>" class="form-control">
                                </div>
                                  <div class="form-group">
                                    <label>Nama Mata Pelajaran</label>
                                    <input type="text" name="nama_mapel" class="form-control" value="<?=$data['mapel'];?>">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="emapel"> <span class="fa fa-save"></span> Edit</button>
                                    <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>                                   
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                


