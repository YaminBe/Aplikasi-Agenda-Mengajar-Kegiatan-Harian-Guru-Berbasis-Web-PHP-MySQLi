<div class="col-md-4">
                        <section class="card">
                            <div class="twt-feed blue-bg">
                                <div class="corner-ribon black-ribon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <div class="fa fa-user wtt-mark"></div>
                             <?php 
                             $id = $_GET['id'];
                             $sql = mysqli_query($con,"SELECT * FROM tb_guru WHERE id_guru='$id' ");
                             $data = mysqli_fetch_array($sql);

                              ?>

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

                    	<div class="card" style="border-radius: 10px; border:2px solid #40c4ff;">
                      <div class="card-header">
                        <strong> <span class="fa fa-edit"></span> Form</strong> User Setting
                      </div>
                      <div class="card-body card-block">
                        <form action="?page=act" method="post" class="">
                          <div class="form-group">
                          	<label for="nf-email" class=" form-control-label">Username</label>
                          	<input type="hidden" id="nf-email" name="id" class="form-control" value=" <?php echo $data['id_guru']; ?> ">
                          	<input type="text" id="nf-email" name="user" class="form-control" value=" <?php echo $data['username']; ?> ">
                          </div>
                          <div class="form-group">
                          	<label for="nf-password" class=" form-control-label">Password</label>
                          	<input type="text" id="nf-password" name="pass" class="form-control" value=" <?php echo $data['password']; ?> ">
                          </div>
                       
                      </div>
                      <div class="card-footer">
                        <button type="submit" name="EuserG" class="btn btn-primary btn-sm">
                          <i class="fa fa-edit"></i> Edit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                       </form>
                    </div>

                    	
                    </div>