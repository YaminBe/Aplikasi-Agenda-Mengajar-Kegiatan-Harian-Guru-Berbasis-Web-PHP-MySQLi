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
                            <!-- <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>750</h5>
                                        Tweets
                                    </li>
                                    <li>
                                        <h5>865</h5>
                                        Following
                                    </li>
                                    <li>
                                        <h5>3645</h5>
                                        Followers
                                    </li>
                                </ul>
                            </div>
                            <div class="twt-write col-sm-12">
                                <textarea placeholder="Write your Tweet and Enter" rows="1" class="form-control t-text-area"></textarea>
                            </div>
                            <footer class="twt-footer">
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <a href="#"><i class="fa fa-map-marker"></i></a>
                                New Castle, UK
                                <span class="pull-right">
                                    32
                                </span>
                            </footer> -->
                        </section>
                    </div>
                    <div class="col-md-8">

                    	<div class="card" style="border-radius: 10px; border:2px solid #40c4ff;">
                      <div class="card-header">
                        <strong> <span class="fa fa-edit"></span> Form</strong> User Setting
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="">
                          <div class="form-group">
                          	<label for="nf-email" class=" form-control-label">Username</label>
                          	<input type="text" id="nf-email" name="nf-email" placeholder="Enter Email.." class="form-control">
                          </div>
                          <div class="form-group">
                          	<label for="nf-password" class=" form-control-label">Password</label>
                          	<input type="password" id="nf-password" name="nf-password" placeholder="Enter Password.." class="form-control">
                          </div>
                        </form>
                      </div>
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                          <i class="fa fa-ban"></i> Reset
                        </button>
                      </div>
                    </div>

                    	
                    </div>