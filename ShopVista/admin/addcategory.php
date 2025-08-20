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
                            <h6 class="mb-4">Add  Category</h6>
							 <?php
			include("config.php");
			if(isset($_POST["btnadd"]))	
			{
				$cat_name=$_POST["cat_name"];
				$cat_image=$_FILES["cat_image"]["name"];
				$temp_name=$_FILES["cat_image"]["tmp_name"];
				
				if(move_uploaded_file($temp_name,"img/".$cat_image)){
				$query = "insert into categorytable (cat_name,cat_image) values ('".$cat_name."','".$cat_image."')";
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
                                    <label  class="form-label">Name</label>
                                    <input type="text" class="form-control" name="cat_name">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="cat_image">
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