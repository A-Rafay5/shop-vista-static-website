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
                            <h6 class="mb-4">&nbsp;All Banners</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Banner Image</th>
                                    </tr>
                                </thead>
                                <tbody>
							<?php
							  	include("config.php");
							  	$query = "select * from  bannertable";
							  	$execute = mysqli_query($connect,$query);
							  	while($row=mysqli_fetch_array($execute))
							  	{
							 ?>
                             <tr>
                                <th scope="row"><?php echo $row["ban_id"]?></th>
                                <td><img src="<?php echo "img/".$row["banner_image"]?>" width="300" height="200"/></td>
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




<br>
<br>








<?php
include("footer.php");
?>
