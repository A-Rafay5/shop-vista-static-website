<?php
include("header.php");
?>



	<br>
				<br>
            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Add Product</h6>
							<?php
							include("config.php");
							if(isset($_POST["btnadd"]))
							{
								$procode="32".rand(4,100000);
		  						$proname =$_POST["pro_name"];
		  						$prodes =$_POST["pro_des"];
		  						$proprice =$_POST["pro_price"];
		  						$proimg =$_FILES["pro_image"]["name"];
		  						$temp_loc =$_FILES["pro_image"]["tmp_name"];
								$proqty =$_POST["pro_qty"];
		  						$cat_id=$_POST["cat_fk"];
		  						if(move_uploaded_file($temp_loc,"img/".$proimg))
								{
								$ins_query= "insert into producttable (pro_code,pro_name,pro_des,pro_price,pro_image,pro_qty,cat_id_fk) values ('".$procode."','".$proname."','".$prodes."','".$proprice."','".$proimg."','".$proqty."','".$cat_id."')";
								$execute= mysqli_query($connect,$ins_query);
								if($execute)
			  					{
									$message= "Product inserted";
								}
								else
								{
									$message= mysqli_error($connect);
								}
								}
		  
								}  
							?>
							<form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label  class="form-label">Name</label>
                                    <input type="text" class="form-control" name="pro_name">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Description</label>
                                    <input type="text" class="form-control" name="pro_des">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Price</label>
                                    <input type="number" class="form-control" name="pro_price">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="pro_image">
                                </div>
								<div class="mb-3">
                                    <label class="form-label">Quantity</label>
                                    <input type="number" class="form-control" name="pro_qty">
                                </div>
								<div class="mb-3">
                                      <label class="col-sm-2 control-label">Select Category</label>
                                      <div class="col-sm-10">
                                          <select class="form-control" name="cat_fk">
                                          <?php
										  include("config.php");
										  $exe=mysqli_query($connect,"select * from categorytable");
										  while($row=mysqli_fetch_array($exe))
										  {
										  
										  ?>
                                          <option value="<?php echo $row["cat_id"]?>"><?php echo $row["cat_name"]?></option>
                                          <?php
										  
										  }
										  ?>
                                          
                                          </select>
                                      </div>
                                  </div>
                                <input type="submit" value="Add Product" name="btnadd" class="btn btn-primary">
								<p><?php echo  @$message; ?></p>
                            </form>
                        </div>
                    </div>
                </div>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
				<br>
            </div>
            <!-- Form End -->






























 <?php
	   include("footer.php");
	   ?>