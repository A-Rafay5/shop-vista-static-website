<?php
include("header.php");
?>






<br>

 <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">All Employee</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr class="text-center">
                                  <th scope="col">#</th>
                                  <th scope="col">F.Name</th>
                                   <th scope="col">L.Name</th>
                                    <th scope="col">Gender</th>
                                     <th scope="col">Marital</th>
                                     <th scope="col" >DOB</th>
                                     <th scope="col">Email</th>
                                      <th scope="col">Phone</th> 
                                      <th scope="col">Address</th>  
										<th scope="col">City</th>
                                     <th scope="col">State</th>
                                      <th scope="col">Country</th>
                                     
                              </tr>
                                    </thead>
                                    <tbody>
                                       <?php
							  	include("config.php");
							  	$query = "select * from  employee";
							  	$execute = mysqli_query($connect,$query);
							  	while($row=mysqli_fetch_array($execute))
							  	{
							 ?>
                             <tr>
                                <th scope="row"><?php echo $row["Emp_ID"]?></th>
                               <td><?php echo $row["Emp_F_NAME"]?></td>
                                 <td><?php echo $row["Emp_L_NAME"]?></td>
                                 <td><?php echo $row["Emp_Gender"]?></td>
                                <td><?php echo $row["Emp_Marital"]?></td>
                                <td><?php echo $row["Emp_DoB"]?></td>
                                <td><?php echo $row["Emp_Email"]?></td>
								 <td><?php echo $row["Emp_Phone"]?></td>
                             	<td><?php echo $row["Emp_Street"]?></td>
                                <td><?php echo $row["Emp_City"]?></td>
                                 <td><?php echo $row["Emp_State"]?></td>
                                 <td><?php echo $row["Emp_Country"]?></td>
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
<br>
<br>
<br>
<br>
<br>
<br>




























<?php
include("footer.php");
?>