<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aplikasi Harian Guru</title>
    <meta name="description" content="Aplikasi E-Jurnal Guru">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/logo.jpg">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark" style="background-image: url(images/smk.jpg);">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
          <!-- style="background-image: url(images/bg.jpg); border-radius: 20px;  -->

            <div class="login-content" style="background-color:rgba(0,0,0,0.6); border-radius: 20px; ">
                <div class="login-logo">
                  <br>
                  <center>
<img src="images/logo.jpg" width="130" style="border-radius:100%;">
</center>
                    <h2 style="color: #fff;">Aplikasi Kegiatan Harian Guru</h2>
                    <br> <b style="color: #fff;">SMKN 4 PAYAKUMBUH</b>
                    <p style="color: #fff;">Jl.Koto Kaciak, Padang Sikabu, Kec Lamposi Tigo Nagori <br> Email : smkn4pyk@com</p>
                </div>
                <div class="login-form">
                  <b>Login Aplikasi</b>                   
                    <hr>
                    <form method="post" action="">
                        <div class="form-group">
                            <!-- <label>Username</label> -->
                            <input type="text" name="user" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                           <!--  <label>Password</label> -->
                            <input type="password" name="pass" class="form-control" placeholder="Password">
                             <input type="hidden" name="level" value="guru" >
                             <input type="hidden" name="level" value="admin" >
                        </div>
                        <div class="form-group">
                          <select name="level" class="form-control">
                            <option value="admin"> Administrator</option>
                            <option value="guru"> Guru</option>
                             <option value="kepsek"> Kepala Sekolah</option>
                            
                          </select>
                        </div>
                        <input type="submit" name="login" class="btn btn-primary btn-flat m-b-30 m-t-30" value="Login" style="background-color:#40c4ff;">
                   <!--   <div class="social-login-content"></div>  -->
                        <div class="register-link m-t-15 text-center" style="min-height: 40px;">
                            <!-- <p>Don't have account ? <a href="#"> Sign Up Here</a></p> -->
                        </div> 
                    </form>
                    <!-- AWAL: KODING LOGIN -->
<?php
@session_start();
include"koneksi.php";
if (@$_POST['login']) {
   $user = trim(mysqli_real_escape_string($con, $_POST['user']));
   $pass = trim(mysqli_real_escape_string($con, $_POST['pass']));
   $level = trim(mysqli_real_escape_string($con, $_POST['level']));

  if ($level == 'admin') {
      $sql = mysqli_query($con,"SELECT * FROM tb_user WHERE username ='$user' AND password='$pass' ") or die(mysqli_error($con)) ;
      $data = mysqli_fetch_array($sql);
      $id = $data [0];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
      $_SESSION['admin'] = $id;
      ?>
      <script type="text/javascript">
      alert(" Sukses ...", " sukses lh tu!!:(", "success");
      window.location.href="_admin";   
      </script>
      <?php              
      }else{
        echo"<div class='alert alert-danger alert-dismissible'style='background-color:red; color:white;'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h5 class='text-center'>
                <i class='glyphicon glyphicon-ban-circle'></i>
                 Gagal Login !!</h5>
                <p class='text-center'>Username / Password Tidak Valid !!</p>
              </div>
        ";


      }

  } elseif ($level == 'guru') { 
                   $sql = mysqli_query($con,"SELECT * FROM tb_guru WHERE username ='$user' AND password='$pass' ") or die(mysqli_error($con)) ;
      $data = mysqli_fetch_array($sql);
      $id = $data [0];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
      $_SESSION['guru'] = $id;
      ?>
      <script type="text/javascript">
      alert(" Sukses ...", " sukses lh tu!!:(", "success");
      window.location.href="_guru";   
      </script>
      <?php              
      }else{
        echo" <br> <br> <br><div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4 class='text-center'><i class='glyphicon glyphicon-ban-circle'></i> Gagal Login !!</h4>
                <p class='text-center'>Username / Password Tidak Valid !!</p>
              </div>
        ";


      }



} elseif ($level == 'kepsek') { 
                   $sql = mysqli_query($con,"SELECT * FROM tb_kepsek WHERE username ='$user' AND password='$pass' ") or die(mysqli_error($con)) ;
      $data = mysqli_fetch_array($sql);
      $id = $data [0];
      $cek = mysqli_num_rows($sql);

      if ($cek >0 ){
      $_SESSION['kepsek'] = $id;
      ?>
      <script type="text/javascript">
      alert(" Sukses ...Anda Login kepsek !!");
      window.location.href="_kepsek";   
      </script>
      <?php              
      }else{
        echo" <br> <br> <br><div class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4 class='text-center'><i class='glyphicon glyphicon-ban-circle'></i> Gagal Login !!</h4>
                <p class='text-center'>Username / Password Tidak Valid !!</p>
              </div>
        ";


      }



}

}
?>

  <!-- end: CODING LOGIN -->


                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
