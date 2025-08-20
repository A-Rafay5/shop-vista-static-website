<?php
include("header.php");
?>



<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div style="background-color: #384aeb" class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1  style="color: white">Product Checkout</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a  style="color: white" href="index.php">Home</a></li>
              <li class="breadcrumb-item active"  style="color: white" aria-current="page">To Continue</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  
  <!--================Checkout Area =================-->
  <section class="checkout_area section-margin--small">
    <div class="container">
        <div class="returning_customer">
            <div class="check_title">
                <h2>Register Yourself as a new Customer</h2>
            </div><br>
            <form class="row contact_form" action="checkout.php" method="post" novalidate="novalidate">
				<?php
				include("admin/config.php");
				if(isset($_POST["resbtn"]))
				{
					$email = $_POST["email"];
					$pwd = $_POST["password"];
					$query = "insert into registrationtable(res_email,res_password) values('".$email."','".$pwd."')";
					$exec=mysqli_query($connect,$query);
				}
				?>
                <div class="col-md-6 form-group p_star">
                    <input type="email" class="form-control" placeholder="Username or Email*"  id="name" name="email">
                     
                </div>
                <div class="col-md-6 form-group p_star">
                    <input type="password" class="form-control" placeholder="Password*"  min="4" id="password" name="password">
				</div>
                <div class="col-md-12 form-group">
                    <button type="submit" value="submit" name="resbtn" class="button button-login">login</button>
                </div>
            </form>
        </div>
        
        <div class="billing_details">
            <div class="row">
                <div class="col-lg-8">
                    <h3>Billing Details</h3>
                     <form enctype="multipart/form-data" action="purchase.php" class="checkout row contact_form" method="post" name="checkout">
                        <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" requried="requried" placeholder="Full name" id="first" name="name">
                           
                        </div>
                        
                        <div class="col-md-6 form-group p_star">
                            <input type="email" class="form-control" requried="" placeholder="Email Address" id="email" name="email">
                           
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="number" class="form-control" requried="" id="number"placeholder="Phone number" name="pnumber">
                            
                        </div>
                        
                        <div class="col-md-12 form-group p_star">
                            <select class="country_select" requried="" name="country">
                                <option value="1">Country</option>
                                <option value="2">Country</option>
                                <option value="4">Country</option>
                            </select>
                        </div>
						 <div class="col-md-12 form-group p_star">
                            <input type="text" class="form-control" requried="" id="city"placeholder="State" name="state">
                           
                        </div>
                        <div class="col-md-12 form-group p_star">
                            <input type="text" requried="" class="form-control"placeholder="Address" id="add1" name="address">
                     
                        </div>
                        <div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <h3>Payment Details</h3>
                                <input type="checkbox"  value="Cash-On-Delievery" checked id="f-option3" name="selector">
                                <label for="f-option3">Cash On Delievery</label>
                            </div>
                           
                        </div><br>
						   <div class="text-center">
                          <input class="button button-paypal" type="submit"  value="Place order" name="btn_placeorder" >
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <div class="order_box">
                        <h2>Your Order</h2>
                        
                        <ul class="list list_2">
                            <li><a href="#">Subtotal <span>Rs: <?php echo @$subtotal; ?></span></a></li>
                            <li><a href="#">Govt.Tax <span>Rs: <?php echo  @$tax;?></span></a></li>
                            <li><a href="#">Total <span>Rs. <?php echo @$subtotal+@$tax;  ?></span></a></li>
                        </ul>
						<div class="col-md-12 form-group mb-0">
                            <div class="creat_account">
                                <input type="checkbox" value="Cash-On-Delievery" checked id="f-option3" name="selector">
                                <label for="f-option3">Cash On Delievery</label>
                            </div>
                            
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <!--================End Checkout Area =================-->

<?php
include("footer.php");
?>

