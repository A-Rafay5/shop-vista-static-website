<?php
include("header.php");
?>



<br>
<br>
<br>

 <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">

                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100"><br>
                            <h6 class="mb-4">&nbsp;All Categories</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Category Name</th>
                                        <th scope="col">Category Image</th>
                                    </tr>
                                </thead>
                                <tbody>
							<?php
							  	include("config.php");
							  	$query = "select * from  categorytable";
							  	$execute = mysqli_query($connect,$query);
							  	while($row=mysqli_fetch_array($execute))
							  	{
							 ?>
                             <tr>
                                <th scope="row"><?php echo $row["cat_id"]?></th>
                                <td><?php echo $row["cat_name"]?></td>
                                <td><img src="<?php echo "img/".$row["cat_image"]?>" width="150px" height="150px"/></td>
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
            <!-- Table End -->


<?php
include("footer.php");
?>