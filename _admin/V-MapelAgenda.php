<div class="col-md-12">
	<div class="card">
	<div class="card-header bg-dark">
	<strong class="card-title text-light"> <span class="fa fa-folder-open"></span>  Agenda Mata Pelajaran </strong>
	</div>

  <!-- SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_guru.id_guru = '$sesi' -->
	<?php 
	$idg = $_GET['idg'];
	$sqlMapel= mysqli_query($con, "SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_mapel.id_mapel = '$idg'
		 ");
	     $data= mysqli_fetch_array($sqlMapel);

	 ?>


	

			

			<div class="card">
              <div class="card-header">
                <!-- <p>BAGAIMANA CARA MENYIMPAN KE TAB AGENDA BERDASARKAN MAPEL MASING2 DAN MASING2 GURU</p> -->
            
              </div>

              <div class="card-body card-block">
                 <h3> <span class="fa fa-folder-open"></span> Daftar Agenda [ <code><?php echo $data['nama_mapel']; ?> </code> ]
                 <div class="pull-right">
					<a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>
					<a target="_blank" href="Print-AgendaMapel.php?idg= <?php echo $data['id_mapel']; ?> " class="btn btn-secondary">
					<i class="fa fa-print"></i> Cetak / Print
					</a>
					<a target="_blank" href="Excel-AgendaMapel.php?idg= <?php echo $data['id_mapel']; ?> " class="btn btn-success">
					<i class="fa fa-print"></i> Export Ke Excell
					</a>

                 	
                 </div>
                 </h3>
              <hr>
              <table id="bootstrap-data-table" class="table table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
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

                        WHERE tb_mapel.id_mapel = '$idg'") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <center><?=$no++; ?>.</center></td>
                        <td> <?=$data['tgl'];?> </td>
                        <td><?=$data['materi'];?></td>
                        <td><?=$data['absen'];?></td>
                        <td><?=$data['ket'];?></td>
                        <td>
                          <a href="?page=edit-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Edit Agenda" class="btn btn-warning"> <span class="fa fa-edit"></span> </a>
                           <a onclick="return confirm('Yakin !! Ingin Hapus Data Tanggal [ <?php echo $data['tgl']; ?> ]')" href="?page=del-agenda&idg= <?php echo $data['id_agenda']; ?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span> </a>
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
	</div>
</div>