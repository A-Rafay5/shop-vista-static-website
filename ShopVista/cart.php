<?php
include("header.php");
?>





	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div  style="background-color: #384aeb" class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1 style="color: white">Shopping Cart</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a style="color: white" href="index.php">Home</a></li>
              <li style="color: white" class="breadcrumb-item active" aria-current="page">to Continue</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  

  <!--================Cart Area =================-->
  <section class="cart_area">
      <div class="container">
		  
		   <?php
			   
			   if(isset($_POST["btncart"]))
			   {	
			   echo "<script>window.location.href='cart.php'</script>";
				   if(!isset($_SESSION["cart"]))
				   {
					   $_SESSION["cart"] = array();
				}
				   
				   //----------------------get hide values
				  $id = $_POST["hide_id"];
				  $name = $_POST["hide_name"];
				  $image = $_POST["hide_image"];
				  $price = $_POST["hide_price"];
			      $qty = $_POST["quantity"];
				  
				  $IsExist = false;
				  
				  $count = count($_SESSION["cart"]);
				  $_SESSION["count"]=  $count ;
				  if($count>0)
				  {
					  for($x=0 ; $x<$count;$x++)
					  {
						  if($_SESSION["cart"][$x]["ID"] ==  $id )
						  {
							  
							  $_SESSION["cart"][$x]["Quantity"]= $_SESSION["cart"][$x]["Quantity"]+ $qty ;
							   $IsExist = true;
						  }
					  }
					  
					 }
				  
				  
				  
				  if(!$IsExist)
				  {
					  
					  array_push($_SESSION["cart"],array("ID"=>$id,"Name"=>$name,"Image"=>$image,"Price"=>$price,"Quantity"=>$qty));
				  }
				  
			}
			 	   		   
		   ?>
            <?php
                if(!empty($_SESSION["cart"]))
				{
				
				?>
		  
          <div class="cart_inner">
			       
           
              <div class="table-responsive">
				  <form method="post" action="checkout.php">
                  <table class="table">
                      <thead>
                          <tr>
                              <th scope="col">Remove</th>
							  <th scope="col">Product</th>
                              <th scope="col">Price</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Total</th>
                          </tr>
                      </thead>
                      <tbody>
                        
                          <?php
									if(isset($_SESSION["cart"]))
									{
										
										$subtotal=0;
										$tax =0;
									
										
										$count =count($_SESSION["cart"]);
										for($i=0;$i<$count;$i++)
										{
									?>
                          <tr>
							  <td  scope="row"class="text-center">
							  	 <a title="Remove this item" class="remove" href="removecart.php?index=<?php echo $i?>" style="font-size: 60px">×</a> 
							  </td>
                              <td>
                                  <div class="media">
                                      <div class="d-flex">
                                         <img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="<?php echo "admin/img/".$_SESSION["cart"][$i]["Image"]?>">
                                      </div>
                                      <div class="media-body">
                                          <p><?php echo $_SESSION["cart"][$i]["Name"]?></p>
                                      </div>
                                  </div>
                              </td>
                              <td>
                                  <h5>Rs: <?php echo $_SESSION["cart"][$i]["Price"]?>.00</h5>
                              </td>
                              <td>
                                   <input type="number" size="4" class="input-text qty text" title="Qty" value="<?php echo $_SESSION["cart"][$i]["Quantity"]?>" min="0" step="1">
                              </td>
                              <td>
                                  <h5><span class="amount">Rs: <?php echo $_SESSION["cart"][$i]["Price"] * $_SESSION["cart"][$i]["Quantity"] ?></span> .00</h5>
                              </td>
                          </tr>
						  
                          
                          
                          
						   <?php
				 @$subtotal += $_SESSION["cart"][$i]["Price"] * $_SESSION["cart"][$i]["Quantity"];
				 
				 $tax= $subtotal*20/100;
				
				
				
										}
									}
										?>
					
						  <tr>
							  <th>
									 <h5>Govt.Tax</h5>
                              </th>
                              
							  <th>    <h5>Shipping</h5></th>
                            
                              <th>
                                  <h5>Cart Subtotal</h5>
                              </th>
                             <th>
                                  <h5>Order Total</h5>
                              </th>
                             
                          </tr>
						  <tr>
							  <td>
									<h5>Rs: <?php echo $tax?></h5>
                              </td>
 								<td><h5>Free Shipping</h5></td>
							<td>
                                  <h5>Rs: <?php echo $subtotal ?></h5>
                              </td>
<td>
                                  <h5>Rs: <?php echo $subtotal + $tax?></h5>
                              </td>
						  </tr>
							  </div>
                          
						   
                      </tbody>
			<tr class="out_button_area">
                              <td class="d-none-l">

                              </td>
                              <td>

                              </td>
                              <td>

                              </td>
                              <td>
                                  <div class="checkout_btn_inner d-flex align-items-center">
                                      <a class="gray_btn" href="index.php">Continue Shopping</a>
                                     <input   type="submit" value="Proceed To Checkout" name="proceed" class="primary-btn ml-2">
                                  </div>
                              </td>
                          </tr>	  
                  </table>
			  
			  </form>
              </div>
			  
          </div>
		  
		  	
                <?php
				}
				else{
				?>
                <div><h1 class="text-primary">Your Cart is Empty</h1></div>
                <?php
				}
				?>
		  
      </div>
  </section>
  <!--================End Cart Area =================-->
















<?php
include("footer.php");
?>