<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong> <span class="fa fa-edit"></span> Form</strong> Input Data Guru
                      </div>
                      <div class="card-body card-block">
                        <form action="?page=act" method="post" enctype="multipart/form-data" class="form-horizontal">
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <!-- <label class=" form-control-label">Static</label> -->
                            </div>
                            <div class="col-12 col-md-9">
                              <!-- <p class="form-control-static">Username</p> -->
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nip / NUPTK</label></div>
                            <div class="col-12 col-md-9">
                              <input type="number" id="text-input" name="nip"  class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Nama Guru / Gelar</label>
                            </div>
                            <div class="col-12 col-md-5">
                              <input type="text" id="text-input" name="nama_guru" class="form-control">
                            </div>
                            <div class="col-12 col-md-4">
                              <input type="text" id="text-input" name="gelar" class="form-control">
                            </div>

                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label class=" form-control-label">Jenis Kelamin</label></div>
                            <div class="col col-md-9">
                              <div class="form-check">
                                <div class="radio">
                                  <label for="radio1" class="form-check-label ">
                                    <input type="radio" id="radio1" name="kelamin" value="Laki-laki" class="form-check-input">Laki-laki
                                  </label>
                                </div>
                                <div class="radio">
                                  <label for="radio2" class="form-check-label ">
                                    <input type="radio" id="radio2" name="kelamin" value="Perempuan" class="form-check-input">Perempuan
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tempat Tanggal Lahir</label></div>
                            <div class="col-12 col-md-5">
                              <input type="text" id="text-input" name="tempat"  class="form-control">
                            </div>
                              <div class="col-12 col-md-4">
                              <input type="date" id="text-input" name="tgl" class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Alamat</label></div>
                            <div class="col-12 col-md-9"><textarea name="alamat" id="textarea-input" rows="3" placeholder="Jalan Melati No 5..." class="form-control"></textarea></div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="email"  class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Telp / HP</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="number" id="text-input" name="telp"  class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Agama</label></div>
                            <div class="col-12 col-md-9">
                                <select name="agama" data-placeholder="Agama" class="standardSelect" tabindex="1">
                                  <option value=""></option>
                                  <option value="Islam"> Islam</option>
                                  <option value="Kristen">Kristen</option>
                                  <option value="Hindu"> Hindu</option>
                                  <option value="Budha"> Budha</option>
                                </select>

                            </div>
                          </div>
                          

                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="username"  class="form-control">
                            </div>
                          </div>
                          <div class="row form-group">
                            <div class="col col-md-3">
                              <label for="text-input" class=" form-control-label">Password</label>
                            </div>
                            <div class="col-12 col-md-9">
                              <input type="text" id="text-input" name="password"  class="form-control">
                            </div>
                          </div>                  
                          
                          
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="file-input" class=" form-control-label">File Foto</label></div>
                            <div class="col-12 col-md-9"><input type="file" id="file-input" name="photo" class="form-control-file"></div>
                          </div>
                        
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="sguru" class="btn btn-primary">
                          <i class="fa fa-save"></i> Simpan
                        </button>
                        <button type="reset" class="btn btn-danger">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                        <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>
                      </div>
                      </form>
                    </div>
                  </div>
