<div class="col-md-12">
	<div class="card">
	<div class="card-header bg-dark">
	<strong class="card-title text-light"> <span class="fa fa-edit"></span> Edit Agenda Mata Pelajaran </strong>
	</div>
	<?php 
	$idg = $_GET['idg'];
	$sqlMapel= mysqli_query($con, "SELECT tb_agenda.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
                        FROM tb_agenda INNER JOIN tb_mapel ON tb_agenda.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

                        WHERE tb_agenda.id_agenda = '$idg'");
	     $data= mysqli_fetch_array($sqlMapel);

	 ?>
     <form action="" method="post">
			<div class="card">
              <!-- <div class="card-header">
                <h3> <span class="fa fa-edit"></span>  Edit Agenda [ <b><?php echo $data['nama_mapel']; ?></b> ] </h3> 
              </div> -->
              <div class="card-body card-block">
              
                  <div class="form-group">
                  	<label for="nf-email" name="" class=" form-control-label">Hari / Tanggal</label>
                      	<input type="hidden" id="nf-email" name="idg" value="<?php echo $data['id_agenda']; ?>" class="form-control">
                  	<input type="date" id="nf-email" name="tgl" value="<?php echo $data['tgl']; ?>" class="form-control">

                  </div>
                   <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Jam Pelajaran</label>
                  	<input type="time" id="nf-email" name="jam" value="<?php echo $data['jam']; ?>" class="form-control">
                  	
                  </div>
                     <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Pokok Bahasan / KD</label>

                  	<textarea class="ckeditor" name="materi" id="ckedtor1"><?php echo $data['materi']; ?></textarea>
                  	
                  </div>


                  <div class="form-group">
                  	<label for="nf-password" class=" form-control-label">Absen</label>
                  	<input type="text" id="nf-password" name="absen" value="<?php echo $data['absen']; ?>"  class="form-control">
                  </div>
                  <div class="form-group">
                  	<label for="nf-password" class=" form-control-label">Keterangan</label>
                  	<textarea class="form-control" name="ket"><?php echo $data['ket']; ?></textarea>
                  </div>
              
              </div>
              <div class="card-footer">
                <button type="submit" name="edit-agenda" class="btn btn-success">
                  <i class="fa fa-save"></i> Ubah Agenda
                </button>
                <a href="javascript:history.back()" class="btn btn-danger"> <span class="fa fa-ban"></span> Batal </a>  
              </div>
              
            </div>
              </form>

              <?php 

if (isset($_POST['edit-agenda'])) {

$idg= $_POST['idg'];
// $id_guru = $_POST['id_guru'];
// $id_mapel = $_POST['id_mapel'];
$jam = $_POST['jam'];
$tgl = $_POST['tgl'];
$materi = $_POST['materi'];
$absen = $_POST['absen'];
$ket = $_POST['ket'];



// simapn ke tb_mapel
mysqli_query($con, " UPDATE tb_agenda SET tgl='$tgl',jam='$jam',materi='$materi',absen='$absen',ket='$ket' WHERE id_agenda='$idg' ") or die(mysqli_error($con)) ;

// header('window.location=?page=add-agenda&idg='.$id_mapel);


echo " 
<script>
alert('Data Berhasil Disimpan !!');
window.location='?page=add-agenda& idg=  $data[id_mapel] ';


</script> ";
}




?>




		</div>
	</div>
</div>