
<div class="col-lg-6">
                    <div class="card" style="border-radius:10px;">
                        <div class="card-header">
                            <strong class="card-title"><span class="fa fa-table"></span> Kelas / Jurusan</strong>

                        </div>
                        <div class="card-body">
                            <table class="table table-condensed table-hover table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Kelas</th>             
                                  <th scope="col">Opsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no=1;
                                $sqlMapel = mysqli_query($con, "SELECT * FROM tb_kelas") or die(mysqli_error($con));

                                while ($data = mysqli_fetch_array($sqlMapel)) {
                                  # code...
                                

                                 ?>
                                <tr>
                                  <th scope="row"><?=$no++?>. </th>
                                  <td><?=$data['kelas'];?></td>                                  
                                  <td>
                                    <a href="?page=e_kejur&id=<?=$data['idkelas'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                                   
                                    <a href="?page=d_kejur&id=<?=$data['idkelas'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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
                            <strong class="card-title"><span class="fa fa-plus"></span> Tambah Kelas / Jurusan</strong>

                        </div>
                        <div class="card-body">
                        	<?php
$idk = @$_GET['idk'];
$sql = mysqli_query($con,"select * from tb_kelas where idkelas = '$idk'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>


                            <form action="?page=act" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label>Kode Kelas</label>
                                    <input type="text" name="idk" value="<?php echo $data['idkelas']; ?>" class="form-control">
                                </div>
                                  <div class="form-group">
                                    <label>Nama Kelas</label>
                                    <input type="text" name="kelas" value="<?php echo $data['kelas']; ?>" class="form-control">
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="ekelas"> <span class="fa fa-save"></span> Edit</button>
                                     <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>                                   
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                


