<div class="col-md-12">
	<div class="card">
	<div class="card-header bg-dark">
	<strong class="card-title text-light"> <span class="fa fa-plus"></span> Tambah Agenda Mata Pelajaran </strong>
	</div>
  <?php 
  $idg = $_GET['idg'];
  $sqlMapel= mysqli_query($con, "SELECT tb_mapel.*,tb_kelas.idkelas,tb_kelas.kelas,tb_guru.id_guru
                    FROM tb_mapel 
                    INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                    INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru WHERE tb_mapel.id_mapel = '$idg'
     ");
       $data= mysqli_fetch_array($sqlMapel);

   ?>
     <form action="" method="post">

		<table class="table table-condensed">
			<tr>
				<td>Nama Mata Pelajaran</td>
				<td> : </td>
				<td> 
          <input type="hidden" name="id_guru" value="<?php echo $data['id_guru'];?>" class="form-control">
          <input type="hidden" name="id_mapel" value="<?php echo $data['id_mapel'];?>" class="form-control" >
          <input type="text" name="" value="<?php echo $data['nama_mapel'];?>" class="form-control" disabled> </td>
			</tr>

				<tr>
				<td> Kelas</td>
				<td> : </td>
				<td>
          <input type="hidden" name="idkelas" value="<?php echo $data['idkelas'];?>" class="form-control" disabled>
          <input type="text" name="" value="<?php echo $data['kelas'];?>" class="form-control" disabled></td>
			</tr>
		</table>
			

			<div class="card">
              <div class="card-header">
                <h3> <span class="fa fa-edit"></span>  Form Agenda [ <b><?php echo $data['nama_mapel']; ?></b> ] </h3> 
              </div>
              <div class="card-body card-block">
              
                  <div class="form-group">
                  	<label for="nf-email" name="" class=" form-control-label">Hari / Tanggal</label>
                  	<input type="date" id="nf-email" name="tgl" class="form-control">

                  </div>
                   <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Jam Pelajaran</label>
                  	<input type="time" id="nf-email" name="jam"class="form-control">
                  	
                  </div>
                     <div class="form-group">
                  	<label for="nf-email" class=" form-control-label"> Pokok Bahasan / KD</label>

                  	<textarea class="ckeditor" name="materi" id="ckedtor1"></textarea>
                  	
                  </div>


                  <div class="form-group">
                  	<label for="nf-password" class=" form-control-label">Absen</label>
                  	<input type="taxt" id="nf-password" name="absen"  class="form-control">
                  </div>
                  <div class="form-group">
                  	<label for="nf-password" class=" form-control-label">Keterangan</label>
                  	<textarea class="form-control" name="ket"></textarea>
                  </div>
              
              </div>
              <div class="card-footer">
                <button type="submit" name="save-agenda" class="btn btn-primary">
                  <i class="fa fa-save"></i> Simpan Agenda
                </button>
                <button type="reset" class="btn btn-danger">
                  <i class="fa fa-ban"></i> Reset
                </button>
                <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a>  
              </div>
              
            </div>
              </form>

              <?php 

if (isset($_POST['save-agenda'])) {

$id_guru = $_POST['id_guru'];
$id_mapel = $_POST['id_mapel'];
$jam = $_POST['jam'];
$tgl = $_POST['tgl'];
$materi = $_POST['materi'];
$absen = $_POST['absen'];
$ket = $_POST['ket'];



// simapn ke tb_mapel
mysqli_query($con, " INSERT INTO tb_agenda (id_agenda,id_guru,id_mapel,tgl,jam,materi,absen,ket)
VALUES('','$id_guru','$id_mapel','$tgl','$jam','$materi','$absen','$ket') ") or die(mysqli_error($con)) ;

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