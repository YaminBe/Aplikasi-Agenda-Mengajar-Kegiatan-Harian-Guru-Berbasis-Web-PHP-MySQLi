<div class="col-md-12">
  <div class="card">
  <div class="card-header bg-dafault">
  <strong class="card-title text-black"> <span class="fa fa-folder-open"></span>  Agenda Mata Pelajaran </strong>
  </div>

  <!-- SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$sesi' -->
<!-- /# column -->
<div class="col-lg-12">
    <div class="card">
        <div class="card-body"><!-- 
            <p class="text-muted m-b-15">To make the tabs toggleable, add the </p> -->

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"> <span class="fa fa-calendar"></span> <b  style="color: red;">History Agenda Hari Ini</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"> <span class="fa fa-folder-open"></span>  <b  style="color: red;"> Semua Agenda </b></a>
                    </li>
                   <!--  <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tahun</a>
                    </li> -->
                </ul>
                <div class="tab-content pl-3 p-1" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <hr>
                        <h4>Daftar Agenda Hari Ini [ <code><?php echo date('d M Y'); ?></code> ]</h4>
                        <hr>
                        <!-- TAMPILKAN AGENDA HARI INI -->

                        <table id="bootstrap-data-table" class="table table-condensed table-hover table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Guru</th> 
                          <th>Kelas</th> 
                       <th>Mapel</th> 
                        <th>Materi</th>
                        <th>Absen</th>
                        <th>Keterangan</th>
                        <!-- <th>Opsi</th>    -->                  
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $now = date('y-m-d');
                      $no=1;
                        $sql = mysqli_query($con,"SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.nama_guru
                        FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

                        WHERE tb_agenda.tgl='$now'") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <center><?=$no++; ?>.</center></td>
                        <td> <?=$data['tgl'];?> </td>
                        <td> <?=$data['nama_guru'];?> </td>
                         <td> <?=$data['kelas'];?> </td>
                        <td> <?=$data['nama_mapel'];?> </td>
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                    <!--     <td>
                          <a href="?page=edit-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Edit Agenda" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                           <a onclick="return confirm('Yakin !! Ingin Hapus Data Tanggal [ <?php echo $data['tgl']; ?> ]')" href="?page=del-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span></a>
                        </td> -->
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>

                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h4>Semua Agenda</h4>
                        <hr>
                        <!-- ISI AGENDA BULANAN -->
                        <table id="bootstrap-data-table-export1" class="table table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                       <th>Mapel</th> 
                        <!-- <th>Kelas</th> -->
                        <th>Materi</th>
                        <th>Absen</th>
                        <th>Keterangan</th>
                       <!--  <th>Opsi</th>  -->                    
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      $no=1;
                        $sql = mysqli_query($con,"SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
                        FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <center><?=$no++; ?>.</center></td>
                        <td> <?=$data['tgl'];?> </td>
                        <td> <?=$data['nama_mapel'];?> </td>
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                    <!--     <td>
                          <a href="?page=edit-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Edit Agenda" class="btn btn-warning"> <span class="fa fa-edit"></span></a>
                           <a onclick="return confirm('Yakin !! Ingin Hapus Data Tanggal [ <?php echo $data['tgl']; ?> ]')" href="?page=del-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span></a>
                        </td> -->
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>


                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <h3>Menu 2</h3>
                        <p>Some content here.</p>
                    </div>
                </div>


        </div>
    </div>
</div>
</div>
<!-- /# column -->
  

      

      <div class="card">
         

<!--               <div class="card-body card-block">
                 <h3> <span class="fa fa-folder-open"></span> Daftar Agenda Guru</h3>
              <hr>
              <table id="bootstrap-data-table" class="table table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
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
                      $no=1;
                        $sql = mysqli_query($con,"SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
                        FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

                        WHERE tb_mapel.id_mapel") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <center><?=$no++; ?>.</center></td>
                        <td> <?=$data['tgl'];?> </td>
                        <td> <?=$data['nama_mapel'];?> </td>
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                        <td>
                          <a href="?page=edit-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Edit Agenda" class="btn btn-warning"> <span class="fa fa-edit"></span> Edit</a>
                           <a onclick="return confirm('Yakin !! Ingin Hapus Data Tanggal [ <?php echo $data['tgl']; ?> ]')" href="?page=del-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span> Hapus</a>
                        </td>
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>
               
              </div>
            </div> -->




    </div>
  </div>
</div>