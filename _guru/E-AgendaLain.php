<div class="col-md-12">
	<div class="card">
	<div class="card-header bg-dark">
	<strong class="card-title text-light"> <span class="fa fa-plus"></span> Edit Agenda Lain </strong>
	</div>
	<?php 
	$idg = $_GET['idg'];
	$sqlMapel= mysqli_query($con, "SELECT * FROM tb_agendalain WHERE id_lain = '$idg'");
	     $data= mysqli_fetch_array($sqlMapel);

	 ?>

     <form action="" method="post">
			<div class="card">
              <div class="card-header">
                <h3> <span class="fa fa-edit"></span>  Form Edit Agenda </h3> 
              </div>
              <div class="card-body card-block">
              
                  <div class="form-group">
                  	<label for="nf-email" name="" class=" form-control-label">Hari / Tanggal Kegiatan  </label>
                  	<input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>">
                  		<input type="hidden" name="idg" value="<?php echo $data['id_lain']; ?>">
                  	<input type="date" id="nf-email" name="tgl" class="form-control" value="<?php echo $data['tgl_kgt']; ?>">

                  </div>
                   <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Nama Kegiatan</label>
                  	<input type="text" id="nf-email" name="kegiatan" value="<?php echo $data['kegiatan']; ?>" class="form-control">
                  	
                  </div>
                     <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Isi Kegiatan / Acara</label>

                  	<textarea class="ckeditor" name="isi" id="ckedtor1"><?php echo $data['isi']; ?></textarea>
                  	
                  </div>
                  <div class="form-group">
                  	<label for="nf-password" class=" form-control-label">Keterangan</label>
                  	<textarea class="form-control" name="ket"><?php echo $data['keterangan']; ?></textarea>
                  </div>
              
              </div>
              <div class="card-footer">
                <button type="submit" name="edit-agenda" class="btn btn-primary">
                  <i class="fa fa-save"></i> Edit Agenda
                </button>
                <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Batal </a>  
              </div>
              
            </div>
              </form>

              <?php 

if (isset($_POST['edit-agenda'])) {
$idg = $_POST['idg'];
$id_guru = $_POST['id_guru'];
$tgl     = $_POST['tgl'];
$judul   = $_POST['kegiatan'];
$isi     = $_POST['isi'];
$ket     = $_POST['ket'];



// simapn ke tb_mapel
mysqli_query($con, " UPDATE tb_agendalain SET tgl_kgt='$tgl',kegiatan='$judul',isi='$isi',keterangan='$ket' WHERE id_lain='$idg' ") or die(mysqli_error($con)) ;

// header('window.location=?page=add-agenda&idg='.$id_mapel);


echo " 
<script>
alert('Data Berhasil DiUbah !!');
window.location='?page=aglain';


</script> ";
}




?>




		</div>
	</div>
</div>