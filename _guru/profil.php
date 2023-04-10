<div class="col-md-4">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="fa fa-user wtt-mark"></div>

                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="../images/<?php echo $data['photo']; ?>">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6"> <?php echo $data['nama_guru']; ?> </h2>
                                        <p class="text-light"> <?php echo $data['email']; ?></p>
                                    </div>
                                </div>



                            </div>
                        </section>
                    </div>
                    

                      <div class="col-md-8">
                        <div class="card">
                            <div class="card-header" style="background-color:#40c4ff;">
                                <strong class="card-title text-light"> <span class="fa fa-edit"></span>  Ganti Password</strong>
                            </div>
                            <div class="card-body">
                               <form action="?page=act" method="post" class="">
                          <div class="form-group">
                            <label for="nf-email" class=" form-control-label">Username</label>
                            <input type="hidden" id="nf-email" name="id_guru" class="form-control" value=" <?php echo $data['id_guru']; ?> ">
                            <input type="text" id="nf-email" name="user" class="form-control" value=" <?php echo $data['username']; ?> ">
                          </div>
                          <div class="form-group">
                            <label for="nf-password" class=" form-control-label">Password</label>
                            <input type="text" id="nf-password" name="pass" class="form-control" value=" <?php echo $data['password']; ?> ">
                          </div>
                       
                      </div>
                      <div class="card-footer" style="background-color: #212121;">
                        <button type="submit" name="euser" class="btn btn-info">
                          <i class="fa fa-edit"></i> Simpan
                        </button>
                        <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-ban"></span> Batal </a>  
                      </div>
                       </form>

                            </div>
                        </div>
                    </div>
