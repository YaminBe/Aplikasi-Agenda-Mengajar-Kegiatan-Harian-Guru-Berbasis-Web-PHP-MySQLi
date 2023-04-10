<?php
include '../koneksi.php';

if (isset($_POST['euser'])) {
       $id_guru = $_POST['id_guru'];
       $user = trim(mysqli_real_escape_string($con, $_POST['user']));
       $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));

       mysqli_query($con, "UPDATE  tb_guru SET username='$user',password='$pass' WHERE id_guru='$id_guru' ") or die(mysqli_error($con)) ;
       echo " <script>
       alert('Data Berhasil Diubah !!');
       window.location='?page=profil';
      
       </script> ";
}elseif (isset($_POST['Tmapel'])) {

        $id_guru = $_POST['id_guru'];
        $nama_mapel = $_POST['nama_mapel'];
        $jurusan = $_POST['jurusan'];
        $tingkat = $_POST['tingkat'];
        $kelas = $_POST['kelas'];
        if ($nama_mapel==''|| $jurusan=='' || $tingkat=='') {
          echo "Form Isian Belum Lengkap !!";
        }else{
          // simapn ke tb_mapel
          $simpan= mysqli_query($con, " INSERT INTO tb_mapel (id_mapel,id_guru,idkelas,nama_mapel,jurusan,tingkat) VALUES('','$id_guru',$kelas,'$nama_mapel','$jurusan','$tingkat') ") or die(mysqli_error($con)) ;
          if (!$simpan) {
            echo "DATA Gagal Tersimpan !!";
          }else{
            //ambil data id mapel terakhir
        // $dmapel=mysqli_fetch_array(mysqli_query($con, "SELECT id_mapel FROM tb_mapel ORDER BY id_mapel DESC LIMIT 1"));
        // $id_mapel = $dmapel['id_mapel'];
        // // inser ke tb_kelas
        // mysqli_query($con, " INSERT INTO tb_kelas (idkelas,id_guru,id_mapel,kelas) VALUES('','$id_guru','$id_mapel','$kelas') ") or die(mysqli_error($con)) ;
        //   //ambil data id kelas terakhir
        // $dkelas=mysqli_fetch_array(mysqli_query($con, "SELECT idkelas FROM tb_kelas ORDER BY idkelas DESC LIMIT 1"));
        // $idkelas = $dkelas['idkelas'];

        //     mysqli_query($con, " INSERT INTO tb_agenda (id_agenda,id_guru,id_mapel,idkelas,tp,jam,tgl,materi,absen,ket)

        // VALUES('','$id_guru','$id_mapel','$idkelas','tp','jam','tgl','materi','absen','ket') ") or die(mysqli_error($con)) ;
  echo " <script>
       alert('Data Berhasil Diubah !!');
       window.location='?page=mapel';
      
       </script> ";

          }

        }


}elseif (isset($_POST['Emapel'])) {
       $id = $_POST['id'];
       $nama_mapel = trim(mysqli_real_escape_string($con, $_POST['nama_mapel']));
       $jurusan = trim(mysqli_real_escape_string($con, $_POST['jurusan']));
       $tingkat = trim(mysqli_real_escape_string($con, $_POST['tingkat']));

       mysqli_query($con, "UPDATE  tb_mapel SET nama_mapel='$nama_mapel',jurusan='$jurusan',tingkat='$tingkat' WHERE id_mapel='$id' ") or die(mysqli_error($con)) ;

       echo " <script>
       alert('Data Berhasil Diubah !!');
       window.location='?page=mapel';
      
       </script> ";

// Query Simapan ke tb_agenda
}elseif (isset($_POST['save-agenda'])) {

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

     header('window.location=?page=add-agenda&idg='.$id_mapel);

  
     // echo " 
     //  <script>
     //  alert('Data Berhasil Diubah !!');
     //  window.location='?page=add-agenda&idg&=$id_mapel;

     //  </script> ";
}


?>
     <!-- window.location='?page=add-agenda&idg=<?php echo $data[id_mapel]; ?> '; -->