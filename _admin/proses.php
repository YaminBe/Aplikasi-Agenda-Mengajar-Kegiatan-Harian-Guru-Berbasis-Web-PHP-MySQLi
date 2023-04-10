<?php
include '../koneksi.php';

if (isset($_POST['mapel'])) {
  $nama = $_POST['nama_mapel'];
  mysqli_query($con, " INSERT INTO tb_mastermapel (id_mMapel,mapel) VALUES ('','$nama') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimapan !!');window.location='?page=v_mapel';</script> ";

}elseif (isset($_POST['emapel'])) {
       $idmap      = $_POST['idmap'];
       $nama_mapel = trim(mysqli_real_escape_string($con, $_POST['nama_mapel']));
       mysqli_query($con, "UPDATE tb_mastermapel SET mapel='$nama_mapel' WHERE id_mMapel='$idmap' ") or die(mysqli_error($con)) ;
      echo " <script>alert('Data Telah Diubah !!');
       window.location='?page=v_mapel';</script> ";



}elseif (isset($_POST['ta'])) {
      $tahun  = $_POST['tahun_ajaran'];
      $status = $_POST['status'];
      mysqli_query($con, " INSERT INTO tb_tajaran (id_tajaran,tahun_ajaran,status) VALUES ('','$tahun','$status') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimapan !!');window.location='?page=v_tajaran';</script> ";
       
}elseif (isset($_POST['eta'])) {
       $idt    = $_POST['idt'];
       $tahun  = trim(mysqli_real_escape_string($con, $_POST['tahun_ajaran']));
       $status = trim(mysqli_real_escape_string($con, $_POST['status']));
       mysqli_query($con, "UPDATE tb_tajaran SET tahun_ajaran='$tahun',status='$status' WHERE id_tajaran='$idt' ") or die(mysqli_error($con)) ;
      echo " <script>alert('Data Berhasil Disimapan !!');
       window.location='?page=v_tajaran';</script> ";



}elseif (isset($_POST['skelas'])) {
      $kelas = $_POST['kelas'];
      mysqli_query($con, " INSERT INTO tb_kelas (idkelas,kelas) VALUES ('','$kelas') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimpan !!');window.location='?page=v_kejur';</script> ";
       
}elseif (isset($_POST['ekelas'])) {
       $idk   = $_POST['idk'];
       $kelas = trim(mysqli_real_escape_string($con, $_POST['kelas']));
       mysqli_query($con, "UPDATE tb_kelas SET kelas='$kelas' WHERE idkelas='$idk' ") or die(mysqli_error($con)) ;
      echo " <script>alert('Data Telah Diubah !!');
       window.location='?page=v_kejur';</script> ";

}elseif (isset($_POST['sguru'])) {
      $nama_guru = $_POST['nama_guru'];
      $nip       = $_POST['nip'];
      $kelamin   = $_POST['kelamin'];
      // $mapel     = $_POST['mapel'];
      // $kelas     = $_POST['kelas'];
      $alamat    = $_POST['alamat'];
      $telp      = $_POST['telp'];
      $username  = $_POST['username'];
      $password  = $_POST['password'];
      $gelar     = $_POST['gelar'];
      $tempat    = $_POST['tempat'];
      $tgl       = $_POST['tgl'];
      $agama     = $_POST['agama'];
      $email     = $_POST['email'];
      // Untuk Gambar      
      $filename  = $_FILES['photo']['name'];
      $tmp_file  = $_FILES['photo']['tmp_name'];
      $move      = move_uploaded_file($tmp_file,'../images/'.$filename);
      mysqli_query($con, " INSERT INTO tb_guru (id_guru,nama_guru,nip,kelamin,alamat,telp,username,password,gelar,tempat,tgl,agama,email,photo) VALUES ('','$nama_guru','$nip','$kelamin','$alamat','$telp','$username','$password','$gelar','$tempat','$tgl','$agama','$email','$filename') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimpan !!');window.location='?page=v_guru';</script> ";
       
}elseif (isset($_POST['eguru'])) {
      $idg = $_POST['idg'];
      $nama_guru = $_POST['nama_guru'];
      $nip       = $_POST['nip'];
      $kelamin   = $_POST['kelamin'];
      // $mapel     = $_POST['mapel'];
      // $kelas     = $_POST['kelas'];
      $alamat    = $_POST['alamat'];
      $telp      = $_POST['telp'];
      $username  = $_POST['username'];
      $password  = $_POST['password'];
      $gelar     = $_POST['gelar'];
      $tempat    = $_POST['tempat'];
      $tgl       = $_POST['tgl'];
      $agama     = $_POST['agama'];
      $email     = $_POST['email'];

      mysqli_query($con, " UPDATE tb_guru SET nama_guru='$nama_guru',nip='$nip',kelamin='$kelamin',alamat='$alamat',telp='$telp',username='$username',password='$password',gelar='$gelar',tempat='$tempat',tgl='$tgl',agama='$agama',email='$email'
       WHERE id_guru='$idg' ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Diubah !!');window.location='?page=v_guru';</script> ";
       
}elseif (isset($_POST['EuserG'])) {
      $id = $_POST['id'];
      $user = $_POST['user'];
      $pass       = $_POST['pass'];

      mysqli_query($con, " UPDATE tb_guru SET username='$user',password='$pass'
       WHERE id_guru='$id' ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Diubah !!');window.location='?page=v_user';</script> ";
       
}elseif (isset($_POST['EuserA'])) {
      $id = $_POST['id'];
      $user = $_POST['user'];
      $pass       = $_POST['pass'];

      mysqli_query($con, " UPDATE tb_user SET username='$user',password='$pass'
       WHERE id_admin='$id' ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Diubah !!');window.location='?page=v_user';</script> ";
       
}elseif (isset($_POST['sUserAdmin'])) {
      $nama = $_POST['nama'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
         // Untuk Gambar      
      $filename12  = $_FILES['foto12']['name'];
      $tmp_file  = $_FILES['foto12']['tmp_name'];
      $move      = move_uploaded_file($tmp_file,'../images/'.$filename12);

      mysqli_query($con, " INSERT INTO tb_user (id_admin,nama,username,password,foto) VALUES ('','$nama','$user','$pass','$filename12') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimpan !!');window.location='?page=v_user';</script> ";
       
}elseif (isset($_POST['SKepsek'])) {
      $nama = $_POST['nama'];
      $user = $_POST['user'];
      $pass = $_POST['pass'];
      // Untuk Gambar      
      $filenamek  = $_FILES['photok']['name'];
      $tmp_file  = $_FILES['photok']['tmp_name'];
      $move      = move_uploaded_file($tmp_file,'../images/'.$filenamek);

      mysqli_query($con, " INSERT INTO tb_kepsek (id_kepsek,nama,username,password,photok) VALUES ('','$nama','$user','$pass','$filenamek') ") or die(mysqli_error($con)) ;
  echo " <script>alert('Data Berhasil Disimpan !!');window.location='?page=v_user';</script> ";
       
}


?>