<?php
include("header.php");
?>










<!-- Messages Start -->
			<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
					<div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <h6 class="mb-0">Messages</h6>
                               <a href="message.php">Show All</a>
                            </div>
							                                <?php
							  	include("config.php");
							  	$query = "select * from  contactmessage_table";
							  	$execute = mysqli_query($connect,$query);
							  	while($row=mysqli_fetch_array($execute))
							  	{
							 ?>
                            <div class="d-flex align-items-center border-bottom py-3">

                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                      <p>Name: <b class="mb-0"><?php echo $row["mess_name"]?></b></p>
                                       <small><?php echo $row["mess_email"]?></small>
                                    </div>
                                  <p>Subject: <b><?php echo $row["mess_subject"]?></b></p>
                                    <p>Message: <span><?php echo $row["message"]?></span></p>
                                </div>

                            </div>
                            								 <?php
								 
							  }
										 
							  ?>
                            
                            
                        </div>
                    </div>
				
            </div>
	</div>
            <!-- Messages End -->






















<?php
include("footer.php");
?>