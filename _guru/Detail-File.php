<div class="col-md-12">
<div class="card">
	<div class="card-body card-block">
        <?php 
                            $id= $_GET['id'];
                            $sqlEdit = mysqli_query($con,"SELECT * FROM download WHERE id_perangkat='$id' ");
                            $data = mysqli_fetch_array($sqlEdit);

                             ?>

		    <embed src="../file/<?=$data['file'];?>" width="100%" height="800"> 

		    </embed>
	 	

	</div>
</div>
</div>


  


