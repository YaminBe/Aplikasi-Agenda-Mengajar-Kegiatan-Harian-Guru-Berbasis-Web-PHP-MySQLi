<div class="col-md-12">
	<div class="card">
	<div class="card-header bg-success">
	<strong class="card-title text-light"> <span class="fa fa-folder-open"></span>  Perangkat Pengajaran </strong>
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


 <div class="card-header">
   <!--  <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a> -->
<!--   <h3> <span class="fa fa-folder-o"></span> Identitas Mata Pelajaran</h3> -->
              </div>
<!-- 		<table class="table table-condensed">
			<tr>
				<td>Nama Mata Pelajaran</td>
				<td> : </td>
				<td> <input type="text" name="" value="<?php echo $data['nama_mapel'] ?>" style="outline: none;border: none;"> </td>
			</tr>

				<tr>
				<td> Kelas</td>
				<td> : </td>
				<td><input type="text" name="" value="<?php echo $data['kelas'] ?>"style="outline: none;border: none;"></td>
			</tr>
		</table> -->

			

			<div class="card">
              <div class="card-header">
                <!-- <p>BAGAIMANA CARA MENYIMPAN KE TAB AGENDA BERDASARKAN MAPEL MASING2 DAN MASING2 GURU</p> -->

                     
<form class="form-inline" action="" method="post" enctype="multipart/form-data" >
   <!-- <a href="javascript:history.back()" class="btn btn-warning"> <span class="fa fa-chevron-left"></span> Kembali </a> - -->
   <p>
     Silahkan Upload file dengan melengkapi form di bawah ini. File yang bisa di Upload hanya file dengan ekstensi .doc, .docx, .xls, .xlsx, .ppt, .pptx, .pdf, .rar, .exe, .zip, .jpg, .png dan besar file (file size) maksimal hanya 2 MB.
   </p>

  <div class="form-group">
    <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
    <div class="input-group">
      <input type="hidden" name="id_guru" value="<?php echo $data['id_guru'] ?>">
      <input type="hidden" name="id_mapel" value="<?php echo $data['id_mapel'] ?>">
      <div class="input-group-addon">Nama File</div>
      <input type="text" name="nama" class="form-control" id="exampleInputAmount" placeholder="Nama File .." size="40">
      <!-- <div class="input-group-addon">
        Pilih File        
      </div> -->
       <input type="file" name="file" class="btn btn-info">
        <input type="text" name="ket" class="form-control" id="exampleInputAmount" placeholder="Keterangan ..">
    </div>
      
  </div>
  &nbsp;&nbsp;
   <button type="submit" name="upload" value="Upload" onClick="return confirm('Apakah Anda yakin?')" class="btn btn-info" style="border-top-right-radius: 20px;background-color:#f50057;border:none;"><span class="fa fa-upload"></span> Upload</button>
</form>
<?php
include '../koneksi.php';

//fungsi untuk mengkonversi size file
function formatBytes($bytes, $precision = 2) { 
$units = array('B', 'KB', 'MB', 'GB', 'TB'); 

$bytes = max($bytes, 0); 
$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
$pow = min($pow, count($units) - 1); 

$bytes /= pow(1024, $pow); 

return round($bytes, $precision) . ' ' . $units[$pow]; 
} 

if(@$_POST['upload']){

$allowed_ext  = array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');

$file_name    = $_FILES['file']['name'];
$file_ext     = strtolower(end(explode('.', $file_name)));
$file_size    = $_FILES['file']['size'];
$file_tmp     = $_FILES['file']['tmp_name'];

$id_guru      = $_POST['id_guru'];
$id_mapel     = $_POST['id_mapel'];
$ket          = $_POST['ket'];
$nama         = $_POST['nama'];
$ket          = $_POST['ket'];
$tgl          = date("Y-m-d");


if(in_array($file_ext, $allowed_ext) === true){
if($file_size < 3044070){
$lokasi = '../file/'.$nama.'.'.$file_ext;
move_uploaded_file($file_tmp, $lokasi);


$in = mysqli_query($con,"INSERT INTO download (id_perangkat,id_guru,id_mapel,ket,tanggal_upload,nama_file,tipe_file,ukuran_file,file) VALUES(NULL,'$id_guru','$id_mapel','$ket', '$tgl', '$nama', '$file_ext', '$file_size', '$lokasi')");
if($in){
  echo "sukses";

}else{
echo '<div class="error">ERROR: Gagal upload file!</div>';
}




}else{
echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
}


}else{
echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
}


}

?> 

                
              </div>

              <div class="card-body card-block">
                 <h4> <span class="fa fa-folder-open"></span> Daftar File Perangkat [ <b><?php echo $data['nama_mapel']; ?> </b> ]</h4>
              <hr>
              <table class="table table-condensed table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Tanggal</th>
                        <th>Nama File</th>
                        <th>Tipe File</th>
                        <th>Size</th>
                        <th>Keterangan</th>
                        <th>Opsi</th>                     
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                      $no=1;
                        $sql = mysqli_query($con,"SELECT download.*,tb_mapel.nama_mapel,tb_mapel.jurusan,tb_mapel.tingkat,tb_kelas.idkelas,tb_kelas.kelas
                        FROM download INNER JOIN tb_mapel ON download.id_mapel=tb_mapel.id_mapel
                        INNER JOIN tb_kelas ON tb_mapel.idkelas=tb_kelas.idkelas
                        INNER JOIN tb_guru ON tb_mapel.id_guru=tb_guru.id_guru

                        WHERE tb_mapel.id_mapel = '$idg'") or die(mysqli_error($con));
                 ;
                  while ( $data=mysqli_fetch_array($sql)) {
                       ?>
                      <tr>
                        <td> <center><?=$no++; ?>.</center></td>
                        <td> <?=$data['tanggal_upload'];?> </td>
                        <td><?=$data['nama_file'];?></td>
                        <td><?=$data['tipe_file'];?></td>
                        <td><?=formatBytes($data['ukuran_file']);?></td>
                        <td><?=$data['ket'];?></td>
                        <td>
                           <a href="?page=view-file&id=<?=$data['id_perangkat'];?>" title="View Agenda" class="btn btn-success"> <span class="fa fa-search-plus"></span> View</a>

                          <a href="<?=$data['file'];?>" target="_blank" title="Edit Agenda" class="btn btn-primary"> <span class="fa fa-download"></span></a>

                           <a onclick="return confirm('Yakin !! Ingin Hapus Data Tanggal [ <?php echo $data['tgl']; ?> ]')" href="?page=del-file&idg= <?php echo $data['id_perangkat']; ?> " title="Hapus" class="btn btn-danger"> <span class="fa fa-trash"></span></a>
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