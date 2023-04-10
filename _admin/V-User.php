
<div class="col-lg-6">
<div class="card" style="border-radius:10px;">
    <div class="card-header">
        <strong class="card-title"><span class="fa fa-user-md"></span> Guru User</strong>

    </div>
    <div class="card-body">
        <table id="bootstrap-data-table" class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">NUPTK</th> 
              <th scope="col">Username</th> 
              <th>Password</th>            
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            $sqlMapel = mysqli_query($con, "SELECT * FROM tb_guru") or die(mysqli_error($con));
            while ($data = mysqli_fetch_array($sqlMapel)) {
             ?>
            <tr>
              <th scope="row"><?=$no++?>. </th>
              <td><?=$data['nip'];?></td>  
              <td><?=$data['username'];?></td>  
              <td><?=$data['password'];?></td> 
              <td>
                <a href="?page=e_user&id=<?=$data['id_guru'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a><!-- 
               
                <a href="?page=d_tajaran&id=<?=$data['id_tajaran'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a> -->
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

<div class="col-lg-6">
<div class="card" style="border-radius:10px;">
    <div class="card-header">
        <strong class="card-title"><span class="fa fa-user-md"></span> Admin User</strong>

    </div>
    <div class="card-body">
      <a href="?page=t_admin" title="" class="btn btn-info pull-right"> <span class="fa fa-plus"></span> Add Admin </a>
      <br>
      <br>
        <table class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th> 
              <th scope="col">Username</th> 
              <th>Password</th>            
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            $sqlMapel = mysqli_query($con, "SELECT * FROM tb_user") or die(mysqli_error($con));

            while ($data = mysqli_fetch_array($sqlMapel)) {
              # code...
            

             ?>
            <tr>
              <th scope="row"><?=$no++?>. </th>
              <td><?=$data['nama'];?></td>  
              <td><?=$data['username'];?></td>  
              <td><?=$data['password'];?></td> 
              <td>
                <a href="?page=e_admin&id=<?=$data['id_admin'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a>               
                <a href="?page=d_admin&id=<?=$data['id_admin'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
              </td>
            </tr>
            <?php 
            }
             ?>
            
          </tbody>
        </table>
        <hr>
        <p>
          <strong class="card-title"><span class="fa fa-user-md"></span> Kepala Sekolah User</strong>
           <a href="?page=t_kepsek" title="" class="btn btn-primary pull-right"> <span class="fa fa-plus"></span> Add Kepsek </a>
        </p>
        <hr>
        <table class="table table-dark table-hover table-striped">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Name</th> 
              <th scope="col">Username</th> 
              <th>Password</th>            
              <th scope="col">Opsi</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            $no=1;
            $sqlMapel = mysqli_query($con, "SELECT * FROM tb_kepsek") or die(mysqli_error($con));

            while ($data = mysqli_fetch_array($sqlMapel)) {
              # code...
            

             ?>
            <tr>
              <th scope="row"><?=$no++?>. </th>
              <td><?=$data['nama'];?></td>  
              <td><?=$data['username'];?></td>  
              <td><?=$data['password'];?></td> 
              <td>
            <!--     <a href="?page=e_tajaran&idt=<?=$data['id_tajaran'];?>" class="btn btn-warning"> <span class="fa fa-edit"></span></a> -->
               
                <a href="?page=d_kepsek&id=<?=$data['id_kepsek'];?>" onclick="return confirm('Yakin !! Ingin Hapus Data !!')" class="btn btn-danger"><i class="fa fa-trash"></i> </a>
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