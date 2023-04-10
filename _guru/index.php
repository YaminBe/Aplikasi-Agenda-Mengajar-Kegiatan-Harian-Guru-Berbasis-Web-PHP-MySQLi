<?php
session_start();
if (@$_SESSION['guru']) {
?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Jurnal || Page Guru</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="../images/logo.jpg">

   <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap-select.less"> -->
   
    <link rel="stylesheet" href="../assets/scss/style.css">
    <script type="text/javascript" src="../assets/ckeditor/ckeditor.js"></script>
    <!-- <link rel="stylesheet" href="../assets/css/bootstrap-select.less"> -->
     <link rel="stylesheet" href="../assets/css/lib/chosen/chosen.min.css">
 


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
	<?php
include '../koneksi.php';
if (@$_SESSION['guru']) {
$sesi = @$_SESSION['guru'];
}

$sql = mysqli_query($con,"select * from tb_guru where id_guru = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"> E -Harian Guru</a>
                <a class="navbar-brand hidden" href="./"><img src="../images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li> <br>
                       <!--  <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a> -->
                           <center>
                    	<img src="../images/<?php echo $data['photo']; ?>" class="img-responsive" style=" border:2px dashed silver; border-radius:100%; height: 80px;width: 80px;">
                    	<p> <code><b><?php echo $data['nama_guru']; ?></b> </code> </p>
                    </center>
                    </li> 
                   <!--  <hr style="border:1px solid white; width: 100%;"> -->
                 
                 <h3 class="menu-title">MENU UTAMA</h3> 
                    <li>
                       <a href="?page=cover"> <i class="menu-icon fa fa-home" style="font-size: 23px;color: #40c4ff;"></i>Dashboard </a>
                    </li> 
                     <li>
                       <a href="?page=profil"> <i class="menu-icon fa fa- fa-refresh" style="font-size: 23px;color: #40c4ff;"></i> Ganti Password </a>
                    </li> 
                    <li>
                    <!--     <a href="?page=v_profil"> <i class="menu-icon fa fa-folder-o" style="font-size: 23px;color: #40c4ff;"></i>Data Guru </a> -->
                    </li>                  

                    <h3 class="menu-title"> DATA AGENDA</h3>                    
                    <li>
                        <a href="?page=mapel"> <i class="menu-icon fa fa-book" style="font-size: 23px;color: #40c4ff;"></i>Mata Pelajaran </a>
                    </li> 
                    <li>
                        <a href="?page=jurnal"> <i class="menu-icon fa fa-calendar" style="font-size: 23px;color: #40c4ff;"></i> Agenda Pengajaran</a>
                    </li>
                    <li>
                        <a href="?page=file"> <i class="menu-icon fa fa-folder-open" style="font-size: 23px;color: #40c4ff;"></i> File Pengajaran </a>
                    </li>
                      <li>
                        <a href="?page=aglain"> <i class="menu-icon fa fa-calendar" style="font-size: 23px;color: #40c4ff;"></i> Kegiatan Lainyya </a>
                    </li>
                      <li>
                        <a href="?page=lap-harian"> <i class="menu-icon fa fa-print" style="font-size: 23px;color: #40c4ff;"></i> Laporan Harian </a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header" style="background-color: #40c4ff ;">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <!-- <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div> 
                    </div> -->
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="../images/<?php echo $data['photo']; ?>" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="?page=profil"><i class="fa fa-user"></i> My Profile</a>
                                <hr>

                                <a class="nav-link" href="?page=profil"><i class="fa fa-refresh"></i> Ganti Password</a>
                                <hr>

                                <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1> <span class="fa fa-home"></span> Halaman Guru</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Selamat Datang  <b style="color: red;"><?php echo $data['nama_guru']; ?></b></li>
                            <li class="active">                            	
                            	<?php echo date("d F Y"); ?> 
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12"> 
                    <!-- Script Content -->
                        <?php
                        error_reporting();
                        $page= @$_GET['page'];
                        if ($page=='act') {
                           include 'proses.php';
                         } elseif ($page=='cover') {
                           include 'cover.php';
                         } elseif ($page=='profil') {
                           include 'profil.php';
                         } elseif ($page=='v_profil') {
                           include 'V-DataGuru.php';
                           /// JURNAL
                         } elseif ($page=='jurnal') {
                           include 'V-Jurnal.php';
                         } elseif ($page=='add-agendamapel') {
                           include 'T-AgendaMapel.php';
                           //Mapel
                         } elseif ($page=='mapel') {
                           include 'V-Mapel.php';
                         } elseif ($page=='add-mapel') {
                           include 'T-Mapel.php';
                         } elseif ($page=='edit-mapel') {
                           include 'E-Mapel.php';
                         } elseif ($page=='hapus-mapel') {
                           include 'D-Mapel.php';
                           //Agenda lain

                         } elseif ($page=='aglain') {
                           include 'V-AgendaLain.php';
                         }elseif ($page=='taglain') {
                           include 'T-AgendaLain.php';
                         }elseif ($page=='eaglain') {
                           include 'E-AgendaLain.php';
                         }elseif ($page=='daglain') {
                           include 'D-AgendaLain.php';


                         }  elseif ($page=='add-agenda') {
                           include 'T-Agenda.php';
                         } elseif ($page=='edit-agenda') {
                           include 'E-Agenda.php';
                         } elseif ($page=='del-agenda') {
                           include 'D-Agenda.php';
                           //file
                         } elseif ($page=='file') {
                           include 'V-Upload-File.php';                           
                         } elseif ($page=='add-file') {
                           include 'T-FilePerangkat.php';                           
                         } elseif ($page=='del-file') {
                           include 'D-File.php';                           
                         } elseif ($page=='view-file') {
                           include 'Detail-File.php';
                           // Lapran Periode 
                         }elseif ($page=='lap-harian') {
                            include 'l_harian.php';

                         }elseif ($page=='') {
                            include 'cover.php';
                         }else{
                            echo "<center> <h3><b> Maaf Halaman Tidak Tersedia !!</b></h3> </center>";
                         }



                         ?>
                    <!-- End Script Content -->
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
   


    <script src="../assets/js/lib/data-table/datatables.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="../assets/js/lib/data-table/jszip.min.js"></script>
    <script src="../assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="../assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="../assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="../assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="../assets/js/lib/data-table/datatables-init.js"></script>

    <script>
        CKEDITOR.replace('ckedtor1',{
            uiColor:'#40c4ff'
        }


            );
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
        <script src="../assets/js/lib/chosen/chosen.jquery.min.js"></script>

    <script>
        jQuery(document).ready(function() {
            jQuery(".standardSelect").chosen({
                disable_search_threshold: 10,
                no_results_text: "Data Tidak Ada didatabase!",
                width: "100%"
            });
        });
    </script>


</body>
</html>



<?php
} else{

echo "<script>
window.location='../index.php';</script>";

}



