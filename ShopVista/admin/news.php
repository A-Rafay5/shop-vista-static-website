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
                            <h6 class="mb-4">Add News</h6>
							<?php
							include("config.php");
							if(isset($_POST["btnadd"]))
							{
								$newsimage =$_FILES["news_image"]["name"];
		  						$temp_loc =$_FILES["news_image"]["tmp_name"];
		  						$newstitle =$_POST["news_title"];
		  						$newshead =$_POST["news_head"];
		  						$newsdetail =$_POST["news_detail"];
		  						if(move_uploaded_file($temp_loc,"img/".$newsimage))
								{
								$ins_query= "insert into newstable (news_image,news_title,news_heading,news_des) values ('".$newsimage."','".$newstitle."','".$newshead."','".$newsdetail."')";
								$execute= mysqli_query($connect,$ins_query);
								if($execute)
			  					{
									$message= "News published";
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
                                    <input type="file" class="form-control" name="news_image">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Title</label>
                                    <input type="text" class="form-control" name="news_title">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Heading</label>
                                    <input type="text" class="form-control" name="news_head">
                                </div>
								<div class="mb-3">
                                    <label  class="form-label">Detail</label>
                                    <input type="text" class="form-control" name="news_detail">
                                </div>
								
								
                                <input type="submit" value="Publish News" name="btnadd" class="btn btn-primary">
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