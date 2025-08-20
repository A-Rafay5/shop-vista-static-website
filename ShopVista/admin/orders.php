<?php
include("header.php");
?>



<!-- Table Start -->
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">All Orders</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Name</th>
                                   <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                     <th scope="col">Country</th>
                                     <th scope="col">State</th>
                                     <th scope="col">Address</th>
                                      <th scope="col">Pay Mode</th> 
                                      <th scope="col"> ID</th>  
										<th scope="col">  Name</th>
                                     <th scope="col"> Price</th>
                                      <th scope="col"> Quantity</th>
                                     
                              </tr>
                                    </thead>
                                    <tbody>
                                       <?php
								include("config.php");
								  $query = "select m.om_id ,m.om_fullname,m.om_email,m.om_phone,m.om_country,m.om_state,m.om_address,m.om_paymode,u.order_id,u.item_name,u.item_price,u.item_qty  from ordermanager as m  inner join  user_order as u on u.order_id = m.om_id;";
									
							  $execute = mysqli_query($connect,$query);
							  while($row=mysqli_fetch_array($execute))
							  {
							  ?>
                             <tr>
                                <th scope="row"><?php echo $row["om_id"]?></th>
                               <td><?php echo $row["om_fullname"]?></td>
                                 <td><?php echo $row["om_email"]?></td>
                                 <td><?php echo $row["om_phone"]?></td>
                                <td><?php echo $row["om_country"]?></td>
                                <td><?php echo $row["om_state"]?></td>
                                <td><?php echo $row["om_address"]?></td>
								 <td><?php echo $row["om_paymode"]?></td>
                             	<td><?php echo $row["order_id"]?></td>
                                <td><?php echo $row["item_name"]?></td>
                                 <td><?php echo $row["item_price"]?></td>
                                 <td><?php echo $row["item_qty"]?></td>
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
<!-- Table End -->


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
<br>
<br>
<br>



<?php
include("footer.php");
?>