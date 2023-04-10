  <?php
include '../koneksi.php';
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>




<div class="card">
                        <div class="card-header">
                            <h3>
                              <strong class="card-title"> <span class="fa fa-calendar"></span> Daftar Kegiatan Lain</strong>
                            </h3>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-condensed table-hover table-striped">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Judul Kegiatan</th>
                        <th>Isi Kegiatan</th>
                        <th>Keterangan</th>
                        <th><span class="fa fa-cog"></span></th>
                                          
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $no=1;
                    $sql = mysqli_query($con,"SELECT * FROM tb_agendalain INNER JOIN tb_guru ON tb_agendalain.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$sesi'") 
                    or die(mysqli_error($con));
                    ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <?=$no++;?> </td>
                        <td> <?=$data['tgl_kgt'];?> </td>
                        <td> <?=$data['kegiatan'];?></td>
                         <td> <?=$data['isi'];?></td>
                        <td><?=$data['keterangan'];?></td>
                        <td>
                          <a href="?page=eaglain&idg= <?php echo $data['id_lain']; ?> " title="" class="btn btn-info btn-xs"> <span class="fa fa-edit"></span></a>
                           <a href="?page=daglain& idg= <?php echo $data['id_lain']; ?> " title="" class="btn btn-danger btn-xs"> <span class="fa fa-trash"></span></a>
                        </td>
                      
                       
                      </tr>
                      <?php 
                       }

                       ?>
                     
                    </tbody>
                  </table>
                        </div>
                    </div>
   			<div class="card">
            <?php
include '../koneksi.php';
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
              <div class="card-header">
                <!-- <p>BAGAIMANA CARA MENYIMPAN KE TAB AGENDA BERDASARKAN MAPEL MASING2 DAN MASING2 GURU</p> -->
                     <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>
                <a href="?page=taglain" class="btn btn-primary">
                  <i class="fa fa-plus"></i> Tambah Agenda
                </a>
                 <a target="_blank" href="Print-AgendaLain.php?idg= <?php echo $data['id_guru']; ?>" class="btn btn-danger" style="border-top-right-radius: 20px;background-color:#f50057;border:none;">
                  <i class="fa fa-print"></i> Cetak / Print
                </a>
              <!--   <a target="_blank" href="Excel-AgendaLain.php?idg= <?php echo $data['id_guru']; ?> " class="btn btn-success">
                  <i class="fa fa-print"></i> Export Ke Excell
                </a> -->
              </div>
              </div>