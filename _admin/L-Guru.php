<?php 
$idg =$_GET['idg'];
$sqlGuru=mysqli_query($con, "SELECT * FROM tb_guru WHERE id_guru='$idg' ");
$data= mysqli_fetch_array($sqlGuru)

 ?>
<div class="col-md-4">
<aside class="profile-nav alt">
    <section class="card">
        <div class="card-header user-header alt bg-dark">
            <div class="media">
                <a href="#">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="../images/<?php echo $data['photo']; ?> ">
                </a>
                <div class="media-body">
                    <h2 class="text-light display-6"> <?php echo $data['nama_guru']; ?> </h2>
                    <p><?php echo $data['email']; ?> </p>
                </div>
            </div>
        </div>
        <ul class="list-group list-group-flush">
                                 <!--    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-folder-o"></i> Daftar Agenda <span class="badge badge-primary pull-right">10</span></a>
                                    </li>

                                    <li class="list-group-item">
                                        <a href="#"> <i class="fa fa-tasks"></i> Recent Activity <span class="badge badge-danger pull-right">15</span></a>
                                    </li> -->
                                </ul>

                            </section>
                        </aside>
                    </div>

<div class="col-md-8">
<div class="card" style="border-radius:10px;">
<div class="card-header">
    <strong class="card-title"><span class="fa fa-table"></span> Detail Data Guru</strong>

</div>
<div class="card-body">
    <table class="table-striped table-hover" width="100%">
        
        <tr>
            <th> Nip</th>
            <th> :</th>
            <th> <?php echo $data['nip']; ?> </th>
        </tr>
         <tr>
            <th> Nama Guru</th>
            <th> :</th>
            <th> <?php echo $data['nama_guru']; ?>, <?php echo $data['gelar']; ?>  </th>
        </tr>
         <tr>
            <th> Tempat Tgl Lahir</th>
            <th> :</th>
            <th> <?php echo $data['tempat']; ?> , <?php echo $data['tgl']; ?> </th>
        </tr>
         <tr>
            <th> Jenis Kelamin</th>
            <th> :</th>
            <th> <?php echo $data['kelamin']; ?> </th>
        </tr>
         <tr>
            <th> Agama</th>
            <th> :</th>
            <th> <?php echo $data['agama']; ?> </th>
        </tr>
         <tr>
            <th> Alamat</th>
            <th> :</th>
            <th> <?php echo $data['alamat']; ?> </th>
        </tr>
         <tr>
            <th> E-Mail</th>
            <th> :</th>
            <th> <?php echo $data['email']; ?> </th>
        </tr>
         <tr>
            <th> Telp</th>
            <th> :</th>
            <th> <?php echo $data['telp']; ?> </th>
        </tr>

    </table>
</div>
</div>


</div>
