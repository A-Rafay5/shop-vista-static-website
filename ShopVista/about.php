<?php
include("header.php");
?>

<section class="blog-banner-area "  id="blog">
		<div style="background-color: #384aeb" class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1 style="color: white">About us And Our Website</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a style="color: white" href="index.php">Home</a></li>
              <li class="breadcrumb-item " aria-current="page" style="color: white">to Continue</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>

 <!--================Blog Area =================-->
	<section class="blog_area single-post-area py-80px section-margin--small">
			<div class="container">
					<div class="row">
							<div class="col-lg-8 posts-list">
									<div class="single-post row">
											
											<div class="col-lg-3  col-md-3 ">
													<div class="blog_info text-right">
														<h6>Quick links</h6>
															<div class="post_tag">
																	<a href="index.php">Home,</a>
																	<a href="category.php">Categories,</a>
																	<a href="product.php">Products,</a>
																	<a href="contact.php">Contact</a>
															</div>
															
															<ul class="social-links">
																	<li>
																			<a  target="_blank"  href="https://www.facebook.com/">
																					<i class="fab fa-facebook-f"></i>
																			</a>
																	</li>
																	<li>
																			<a  target="_blank"  href="https://www.twitter.com/">
																				<i class="fab fa-twitter"></i>																				
																			</a>
																	</li>
																	<li>
																			<a  target="_blank"  href="https://www.github.com/">
																				<i class="fab fa-github"></i>																				
																			</a>
																	</li>
																	<li>
																			<a target="_blank" href="https://www.instagram.com/">
																				<i class="fab fa-instagram"></i>																				
																			</a>
																	</li>
															</ul>
													</div>
											</div>
											<div class="col-lg-9 col-md-9 blog_details">
													<h2>Our Mission &  Motto</h2>
													<p class="excert">
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p><p class="excert">
								So seed seed green that winged cattle in. Gathering thing made fly you're no 
								divided deep moved us lan Gathering thing us land years living.
							</p>
							<p>
								So seed seed green that winged cattle in. Gathering thing made fly you're no divided deep moved 
							</p>
											</div>
											<div class="col-lg-12">
													<div class="quotes">
															MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
															on boot camp when you can get the MCSE study materials yourself at a fraction of the camp
															price. However, who has the willpower to actually sit through a self-imposed MCSE training.
													</div>
												<div>
														<h2>Our Team & Work</h2>
														</div>
													<div class="row">
														
															<div class="col-6">
																	<img width="360px" height="350px" class="img-fluid" src="admin/img/aboutbanner.png" alt="">
															</div>
															<div class="col-6">
																	<img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
															</div>
															<div class="col-lg-12 mt-4">
																	<p>
																			MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
																			on boot camp when you can get the MCSE study materials yourself at a fraction of
																			the camp price. However, who has the willpower.
																	</p>
																	<p>
																			MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
																			on boot camp when you can get the MCSE study materials yourself at a fraction of
																			the camp price. However, who has the willpower.
																	</p>
															</div>
													</div>
											</div>
											<div class="col-lg-12">
												<div class="row">
														
															<div class="col-6">
																	<img width="360px" height="350px" class="img-fluid" src="img/blog/cat-post/cat-post-4.jpg" alt="">
															</div>
															<div class="col-6">
																	<img class="img-fluid" src="img/login2.jpg" alt="">
															</div>
															<div class="col-lg-12 mt-4">
																	<p>
																			MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
																			on boot camp when you can get the MCSE study materials yourself at a fraction of
																			the camp price. However, who has the willpower.
																	</p>
																	<p>
																			MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money
																			on boot camp when you can get the MCSE study materials yourself at a fraction of
																			the camp price. However, who has the willpower.
																	</p>
															</div>
													</div>
											</div>
									</div>
									<?php /*?>	<div class="comment-form">
										

			
											<h4>Leave a Reply</h4>
										<?php 
										include("admin/config.php");
										if(isset($_POST["btnpost"]))
										{
											$name =$_POST["name"];
											$email =$_POST["email"];
											$sub =$_POST["subject"];
											$mess =$_POST["message"];
											$query ="insert into contactmessage_table (mess_name,mess_email,mess_subject,message) values ('".$name."','".$email."','".$sub."','".$mess."')";
											$execute= mysqli_query($connect,$query);
											if($execute)
			  								{
												$message= "Employee Registered";
											}
											else
											{
												$message= mysqli_error($connect);
											}
											
										}
										?>
											<form name="fm" method="post">
													<div class="form-group form-inline">
															<div class="form-group col-lg-6 col-md-6 name">
																	<input type="text" class="form-control" name="name" id="box_1"  requried placeholder="Enter Name">
																<label id="lb_1"></label>
															</div>
															<div class="form-group col-lg-6 col-md-6 email">
																	<input type="email" class="form-control" id="box_2" placeholder="Enter email address" name="email" requried>
																<label id="lb_2"></label>
															</div>
													</div>
													<div class="form-group">
															<input type="text" class="form-control" id="box_3" placeholder="Subject" name="subject" requried=>
														<label id="lb_3"></label>
													</div>
													<div class="form-group">
															<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" id="box_4" requried></textarea>
														<label id="lb_4"></label>
													</div>
													<input type="submit" value="Post Comment" class="button button-postComment button--active"  name="btnpost">
												 <script>
'function validate()
'{
'		var na =fm.name.value;
'		var em = fm.email.value;
'		var sub = fm.subject.value;
'		var mes = fm.message.value;
'		
'		//=======Name========================================
'		var ptr_name = /^([a-zA-Z\ ]){3,15}$/;
'		if(na.length == 0)
'		{
'			document.getElementById("lb_1").innerHTML ="Please Enter your Name";
'			document.getElementById("lb_1").style.color= "Red";
'			document.getElementById("box_1").style.borderColor = "Red";
'		}
'		else if(ptr_name.test(na) == false)
'		{
'			document.getElementById("lb_1").innerHTML ="Invalid Email ID";
'			document.getElementById("lb_1").style.color= "Red";
'		}
'		else if(na.length != 0)
'		{
'			document.getElementById("lb_1").innerHTML ="✔";
'			document.getElementById("lb_1").style.color ="Green";
'			document.getElementById("box_1").style.borderColor = "Green";
'		}
'		//=========Email======================================
'		var ptr_email = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/;
'		if(em.length == 0)
'		{
'			document.getElementById("lb_2").innerHTML ="Please Enter your email";
'			document.getElementById("lb_6").style.color= "Red";
'			document.getElementById("box_2").style.borderColor = "Red";
'		}
'		else if(ptr_email.test(em) == false)
'		{
'			document.getElementById("lb_2").innerHTML ="Invalid Email ID";
'			document.getElementById("lb_2").style.color= "Red";
'		}
'		else if(em.length != 0)
'		{
'			document.getElementById("lb_2").innerHTML ="✔";
'			document.getElementById("lb_2").style.color ="Green";
'			document.getElementById("box_2").style.borderColor = "Green";
'		}
'		//=======Subject========================================
'		var ptr_sub = /^([a-zA-Z\ ]){2,500}$/;
'		if(sub.length == 0)
'		{
'			document.getElementById("lb_3").innerHTML ="Please Enter your email";
'			document.getElementById("lb_3").style.color= "Red";
'			document.getElementById("box_3").style.borderColor = "Red";
'		}
'		else if(ptr_sub.test(sub) == false)
'		{
'			document.getElementById("lb_3").innerHTML ="Invalid Email ID";
'			document.getElementById("lb_3").style.color= "Red";
'		}
'		else if(sub.length != 0)
'		{
'			document.getElementById("lb_3").innerHTML ="✔";
'			document.getElementById("lb_3").style.color ="Green";
'			document.getElementById("box_3").style.borderColor = "Green";
'		}
'		//=======Message========================================
'			var ptr_mes =  /^([a-zA-Z\ ]){2,500}$/;
'		if(mes.length == 0)
'		{
'			document.getElementById("lb_4").innerHTML ="Please Enter your email";
'			document.getElementById("lb_4").style.color= "Red";
'			document.getElementById("box_4").style.borderColor = "Red";
'		}
'		else if(ptr_mes.test(mes) == false)
'		{
'			document.getElementById("lb_4").innerHTML ="Invalid Email ID";
'			document.getElementById("lb_4").style.color= "Red";
'		}
'		else if(mes.length != 0)
'		{
'			document.getElementById("lb_4").innerHTML ="✔";
'			document.getElementById("lb_4").style.color ="Green";
'			document.getElementById("box_4").style.borderColor = "Green";
'		}
'	if( ptr_name.test(na) == true && ptr_email.test(em) == true && ptr_sub.test(sub) == true && ptr_mes.test(mes) == true )
'		{
'			window.location.reload;
'		}
'}
'
'</script>
'
											</form>
									</div><?php */?>
							</div>
							<div class="col-lg-4">
									<div class="blog_right_sidebar">
											<aside class="single_sidebar_widget search_widget">
													<div class="input-group">
															<h5>Leader</h5>
															<span class="input-group-btn">
																	
															</span>
													</div>
													<!-- /input-group -->
													<div class="br"></div>
											</aside>
											<aside class="single_sidebar_widget author_widget">
													<img class="author_img rounded-circle" src="img/blog/author.png" alt="">
													<h4>Charlie Barber</h4>
													<p>Senior Web Developer</p>
													<div class="social_icon">
                              <a href="#">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-twitter"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-github"></i>
                              </a>
                              <a href="#">
                                <i class="fab fa-behance"></i>
                              </a>
                          </div>
													<p>Boot camps have its supporters andit sdetractors. Some people do not understand why you should
															have to spend money on boot camp when you can get. Boot camps have itssuppor ters andits
															detractors.
													</p>
													<div class="br"></div>
											</aside>
										<aside class="single_sidebar_widget post_category_widget">
													<h4 class="widget_title">Shop Catgories</h4>
													<ul class="list cat-list">
														<?php
														
														$exe = mysqli_query($connect,"select * from categorytable");
														while($row = mysqli_fetch_array($exe))
														{
							
						
														?>
															<li>
																	<a href="shop_category.php?c_id=<?php echo $row["cat_id"]?>" class="d-flex justify-content-between">
																			<p><?php echo $row["cat_name"]?></p>
																			<p></p>
																	</a>
															</li>
														
														<?php
															}
														?>
													</ul>
													
											</aside>
										<aside class="single_sidebar_widget post_category_widget">
													<h4 class="widget_title">Shop Products</h4>
													<ul class="list cat-list">
														<?php
														
														$exe = mysqli_query($connect,"select * from producttable Limit 9");
														while($row = mysqli_fetch_array($exe))
														{
							
						
														?>
															<li>
																	<a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="d-flex justify-content-between">
																			<p><?php echo $row["pro_name"]?></p>
																			<p></p>
																	</a>
															</li>
														
														<?php
															}
														?>
														<li>
																	<a href="product.php" class="d-flex justify-content-between">
																			<p>All Products</p>
																			<p></p>
																	</a>
															</li>
													</ul>
													
											</aside>
											
											

											
											
									</div>
							</div>
					</div>
			</div>
	</section>
	<!--================Blog Area =================-->
  

  <!--================Instagram Area =================-->
  <section class="instagram_area">
    <div class="container box_1620">
      <div class="insta_btn">
        <a class="btn theme_btn" href="https://www.instagram.com/">Follow us on instagram</a>
      </div>
      <div class="instagram_image row m0">
        <a href="product.php"><img src="admin/img/product1.png" alt=""></a>
        <a href="product.php"><img src="admin/img/product2.png" alt=""></a>
        <a href="product.php"><img src="admin/img/product4.png" alt=""></a>
        <a href="product.php"><img src="admin/img/product5.png" alt=""></a>
        <a href="product.php"><img src="admin/img/product6.png" alt=""></a>
        <a href="product.php"><img src="admin/img/2bags.jpg" alt=""></a>
      </div>
    </div>
  </section>
  <!--================End Instagram Area =================-->
  


















<?php
include("footer.php");
?>