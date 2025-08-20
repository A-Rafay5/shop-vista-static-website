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
                            <h6 class="mb-4">Add Blogs</h6>
							<?php
							include("config.php");
							if(isset($_POST["btnaddblog"]))
							{
								$blogimage =$_FILES["blog_image"]["name"];
		  						$temp_loc =$_FILES["blog_image"]["tmp_name"];
		  						$bloghead =$_POST["blog_head"];
		  						$blogdetail =$_POST["blog_detail"];
		  						if(move_uploaded_file($temp_loc,"img/".$blogimage))
								{
								$ins_query= "insert into blogtable (blog_image,blog_heading,blog_des) values ('".$blogimage."','".$bloghead."','".$blogdetail."')";
								$execute= mysqli_query($connect,$ins_query);
								if($execute)
			  					{
									$message= "Blog Added";
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
                                    <label  class="form-label">Image</label>
                                    <input type="file" class="form-control" name="blog_image">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Heading</label>
                                    <input type="text" class="form-control" name="blog_head">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Detail</label>
                                    <input type="text" class="form-control" name="blog_detail">
                                </div>
								
								
                                <input type="submit" value="Add Blog" name="btnaddblog" class="btn btn-primary">
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