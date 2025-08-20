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
                            <h6 class="mb-4">Add Banner</h6>
							 <?php
			include("config.php");
			if(isset($_POST["btnadd"]))	
			{
				$banner_image=$_FILES["banner_image"]["name"];
				$temp_name=$_FILES["banner_image"]["tmp_name"];
				
				if(move_uploaded_file($temp_name,"img/".$banner_image))
				{
				$query = "insert into bannertable (banner_image) values ('".$banner_image."')";
				$exe = mysqli_query($connect,$query);
				if($exe)
				{
					//header("Location:showcategory.php");
					$message = "Record Inserted";
				}
				else
				{
					$message = mysqli_error($connect);
					
				}
				}
			}
			?>               <form method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Banner Image</label>
                                    <input type="file" class="form-control" name="banner_image">
                                </div>
                                <input type="submit" value="Add Category" name="btnadd" class="btn btn-primary">
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