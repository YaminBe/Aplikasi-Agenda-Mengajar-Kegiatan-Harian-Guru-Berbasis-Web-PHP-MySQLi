<div class="col-lg-6">
                    <div class="card" style="border-radius:10px;">
                        <div class="card-header">
                            <strong class="card-title"><span class="fa fa-plus"></span> Edit Pelajaran</strong>

                        </div>
                        <div class="card-body">
                            <?php 
                            $id= $_GET['id'];
                            $sqlEdit = mysqli_query($con,"SELECT * FROM tb_mapel WHERE id_mapel='$id' ");
                            $e = mysqli_fetch_array($sqlEdit);

                             ?>

                             <form action="?page=act" method="post" accept-charset="utf-8">


                                <div class="form-group">
                                    <!-- <label>ID Guru</label> -->
                                    <input type="hidden" name="id" value="<?php echo $e['id_mapel']; ?>"
                                    class="form-control" readonly>
                                </div>

                                  <div class="form-group">
                                    <label>Nama Mata Pelajaran</label>
                                     <select name="nama_mapel" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    <option value="" selected><?php echo $e['nama_mapel']; ?></option>
                                    <?php
                                    $sqlGuru=mysqli_query($con, "SELECT * FROM tb_mastermapel");
                                    while($g=mysqli_fetch_array($sqlGuru)){
                                    echo "<option value='$g[mapel]'>$g[id_mMapel] | $g[mapel]</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                   <div class="form-group">
                                    <label>Kelas</label>
                                    <select name="kelas" data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                    <option value=""></option>
                                    <option value="" selected>- Pilih kelas -</option>
                                    <?php
                                    $sqlGuru=mysqli_query($con, "SELECT * FROM tb_kelas ORDER BY idkelas ASC");
                                    while($g=mysqli_fetch_array($sqlGuru)){
                                    echo "<option value='$g[idkelas]'> $g[idkelas] | $g[kelas]</option>";
                                    }
                                    ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label>Jurusan</label>
                                    <select name="jurusan" data-placeholder="Choose a country..." multiple class="standardSelect">
                                    <option value=""></option>
                                        <option value="TKJ"> TKJ</option>
                                        <option value="TKR"> TKR</option>
                                        <option value="RPL"> RPL</option>
                                </select>

                                </div>
                                 <div class="form-group">
                                    <label>Tingkat</label>
                                        <select name="tingkat"  data-placeholder="Choose a Country..." class="standardSelect" tabindex="1">
                                        <option value="" selected>- Pilih Tingkat -</option>
                                        <option value="1"> Tingkat 1 (X)</option>
                                        <option value="2"> Tingkat 2 (XI)</option>
                                        <option value="3"> Tingkat 3 (XII)</option>
                                        </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="Emapel"> <span class="fa fa-edit"></span> Edit</button>
                                     <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Batal </a>                                   
                                </div>

                            </form>



                            <!-- <form action="?page=act" method="post" accept-charset="utf-8">
                                <div class="form-group">
                                    <label>ID Guru</label>
                                    <input type="text" name="id" value="<?php echo $e['id_mapel']; ?>"
                                    class="form-control" readonly>
                                </div>
                                  <div class="form-group">
                                    <label>Nama Mata Pelajaran</label>
                                    <input type="text" name="nama_mapel" class="form-control" value="<?php echo $e['nama_mapel']; ?>">
                                </div>
                                   <div class="form-group">
                                    <label>Kelas</label>
                                        <select name="kelas" class="form-control">
                                        <option value="" selected>-Pilih kelas-</option>
                                        <option value="X"> X</option>
                                        <option value="XI"> XI</option>
                                        <option value="XII"> XII</option>
                                        </select>
                                </div>
                                 <div class="form-group">
                                    <label>Jurusan</label>
                                        <select name="jurusan" class="form-control">
                                        <option value="" selected><?php echo $e['jurusan']; ?></option>
                                        <option value="TKJ"> TKJ</option>
                                        <option value="TKR"> TKR</option>
                                        <option value="RPL"> RPL</option>
                                        </select>
                                </div>
                                 <div class="form-group">
                                    <label>Tingkat</label>
                                        <select name="tingkat" class="form-control">
                                        <option value="" selected><?php echo $e['tingkat']; ?></option>
                                        <option value="1"> Tingkat 1 (X)</option>
                                        <option value="2"> Tingkat 2 (XI)</option>
                                        <option value="3"> Tingkat 3 (XII)</option>
                                        </select>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" name="Emapel"> <span class="fa fa-save"></span> Simpan</button>  
                                     <button class="btn btn-danger" type="reset"> <span class="fa fa-close"></span> Reset</button>
                                     <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>                                   
                                </div>

                            </form> -->

                        </div>
                    </div>
                </div>