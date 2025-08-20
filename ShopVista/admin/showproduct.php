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
                            <h6 class="mb-4">&nbsp;All Products</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">P-Code</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Category ID</th>
                                    </tr>
                                </thead>
                                <tbody>
							<?php
							  include("config.php");
							  $query = "select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk;";
							  $execute = mysqli_query($connect,$query);
							  while($row=mysqli_fetch_array($execute))
							  {
							  ?>
                             <tr>
                                <th scope="row"><?php echo $row["pro_id"]?></th>
                                <td><?php echo $row["pro_code"]?></td>
                                <td><?php echo $row["pro_name"]?></td>
                                <td><?php echo $row["pro_des"]?></td>
                                <td><?php echo $row["pro_price"]?></td>
                                <td><img src="<?php echo "img/".$row["pro_image"]?>" width="100px" height="100px"/></td>
                                <td><?php echo $row["pro_qty"]?></td>
                                <td><?php echo $row["cat_name"]?></td>
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