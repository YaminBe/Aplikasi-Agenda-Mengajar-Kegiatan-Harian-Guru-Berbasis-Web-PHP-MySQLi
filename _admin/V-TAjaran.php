

<div class="col-lg-6">
                    <div class="card" style="border-radius:10px;">
                        <div class="card-header">
                            <strong class="card-title"><span class="fa fa-table"></span> Tahun Ajaran</strong>

                        </div>
                        <div class="card-body">
                            <table class="table table-dark table-hover table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">No</th>
                                  <th scope="col">Tahun Ajaran</th> 
                                  <th>Status</th>            
                                  <th scope="col">Opsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <?php 
                                $no=1;
                                $sqlMapel = mysqli_query($con, "SELECT * FROM tb_tajaran") or die(mysqli_error($con));

                                while ($data = mysqli_fetch_array($sqlMapel)) {
                                  # code...
                                

                                 ?>
                                <tr>
                                  <th scope="row"><?=$no++?>. </th>
                                  <td><?=$data['tahun_ajaran'];?></td>  
                                  <td><?=$data['status'];?></td> 
                                  <td>
                                    <a href="?page=e_tajaran&idt=<?=$data['id_tajaran'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                                   
                                    <a href="?page=d_tajaran&id=<?=$data['id_tajaran'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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
                            <strong class="card-title"><span class="fa fa-plus"></span> Tambah Tahun Ajaran</strong>

                        </div>
                        <div class="card-body">
                            <form action="?page=act" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label>Kode T Ajaran</label>
                                    <input type="text" name="" placeholder="Tidak Perlu Diisi" class="form-control" disabled="">
                                </div>
                                  <div class="form-group">
                                    <label>Tahun Ajaran</label>
                                    <input type="text" name="tahun_ajaran" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-control">
                                      <option value="Y">Aktif</option>
                                      <option value="T">Tidak</option>
                                    </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="ta"> <span class="fa fa-save"></span> Simpan</button>  
                                     <button class="btn btn-danger" type="reset"> <span class="fa fa-close"></span> Reset</button> 
                                     <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>                                   
                                </div>

                            </form>

                        </div>
                    </div>
                </div>
                


