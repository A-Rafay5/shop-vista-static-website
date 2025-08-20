<?php
include("header.php");
?>

   <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area "  id="blog">
		<div style="background-color: #384aeb" class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1 style="color: white">Shop Single</h1>
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
	<!-- ================ end banner area ================= -->


  <!--================Single Product Area =================-->
	<div class="product_image_area">
		<div class="container">
			<div class="row s_product_inner">
				 <?php
						
						include("admin/config.php");
						if(isset($_GET["c_id"]))
						{
							$productid=$_GET["c_id"];
							$query="select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  where pro_id = '".$productid."'";
							$exe=mysqli_query($connect,$query);
							if(mysqli_num_rows($exe)>0)
							{
							$row=mysqli_fetch_array($exe);
						
						?>
                        
				<div class="col-lg-6">
					<div class="owl-carousel owl-theme s_Product_carousel">
						<div class="single-prd-item">
							<img class="img" src="<?php echo "admin/img/".$row["pro_image"] ?>" alt="">
						</div>
						
					</div>
				</div>
				<div class="col-lg-5 offset-lg-1">
					<div class="s_product_text">
						<h3><?php echo $row["pro_name"]?></h3>
						<h2>Rs <?php echo $row["pro_price"]?>.00</h2>
						<ul class="list">
							<li><a class="active"><span>Category</span> : <?php echo $row["cat_name"]?></a></li>
							<li><a><span>In Stock</span> :  <?php echo $row["pro_qty"]?></a></li>
								<p><?php echo $row["pro_des"]?>.</p>
						<form action="cart.php" class="cart" method="post">
                                        <div class="quantity">
                                        <input name="hide_id" value="<?php echo $row["pro_id"]?>" type="hidden"/>
                                        <input name="hide_name" value="<?php echo $row["pro_name"]?>" type="hidden"/>
                                         <input name="hide_image" value="<?php echo $row["pro_image"]?>" type="hidden"/>
                                         <input name="hide_price" value="<?php echo $row["pro_price"]?>" type="hidden"/>
            <label for="qty">Quantity:</label>
							<input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="button primary-btn" type="submit" name="btncart">Add to cart</button>
                                    </form></ul>
					
						
						<div class="product_count">
            
							<br>
							            
						</div>
						
					</div>
				</div>
				<?php
						}
						}
						else
						{
						echo "<script>window.location.href='index.php'</script>";	
						}
						?>
			</div>
		</div>
	</div>
	<!--================End Single Product Area =================-->

	<!--================Product Description Area =================-->
	<section class="product_description_area">
		<div class="container">
			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item">
					<a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Description</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
					 aria-selected="false">Specification</a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link active " id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review"
					 aria-selected="false">Reviews</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="table-responsive">
						<table class="table">
							<tbody>
								<tr>
									<td>
										<h5>Width</h5>
									</td>
									<td>
										<h5>128mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Height</h5>
									</td>
									<td>
										<h5>508mm</h5>
									</td>
								</tr>
								<tr>
									<td>
										<h5>Depth</h5>
									</td>
									<td>
										<h5>85mm</h5>
									</td>
								</tr>
								
								<tr>
									<td>
										<h5>Quality checking</h5>
									</td>
									<td>
										<h5>yes</h5>
									</td>
								</tr>
								
								<tr>
									<td>
										<h5>When packeting</h5>
									</td>
									<td>
										<h5>Without touch of hand</h5>
									</td>
								</tr>
								
							</tbody>
						</table>
					</div>
				</div>
				<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="comment_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item reply">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<h5>12th Feb, 2018 at 05:56 pm</h5>
											<a class="reply_btn" href="#">Reply</a>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="review_box">
								<h4>Post a comment</h4>
								<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" name="name" placeholder="Your Full name">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="number" name="number" placeholder="Phone Number">
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<textarea class="form-control" name="message" id="message" rows="1" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12 text-right">
										<button type="submit" value="submit" class="btn primary-btn">Submit Now</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade show active" id="review" role="tabpanel" aria-labelledby="review-tab">
					<div class="row">
						<div class="col-lg-12">
							<div class="row total_rate">
								<div class="col-6">
									<div class="box_total">
										<h5>Overall</h5>
										<h4>4.0</h4>
										<h6>(03 Reviews)</h6>
									</div>
								</div>
								<div class="col-6">
									<div class="rating_list">
										<h3>Based on 3 Reviews</h3>
										<ul class="list">
											<li><a href="#">5 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">4 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">3 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">2 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
											<li><a href="#">1 Star <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
													 class="fa fa-star"></i><i class="fa fa-star"></i> 01</a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="review_list">
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-1.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-2.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
								<div class="review_item">
									<div class="media">
										<div class="d-flex">
											<img src="img/product/review-3.png" alt="">
										</div>
										<div class="media-body">
											<h4>Blake Ruiz</h4>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
										dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
										commodo</p>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Product Description Area =================-->

	<!--================ Start related Product area =================-->  
	<section class="related-product-area section-margin--small mt-0">
		<div class="container">
			<div class="section-intro pb-60px">
        <p>Popular Item in the market</p>
        <h2>Top <span class="section-intro__style">Product</span></h2>
      </div>
			<div class="row mt-30">
        

        

        

        <div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
			   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 4 OFFSET 1 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
            <div class="single-search-product d-flex">
              <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><img src="<?php echo "admin/img/".$row["pro_image"] ?>" alt=""></a>
              <div class="desc">
                  <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="title"><?php echo $row["pro_name"]?></a>
                  <div class="price">Rs <?php echo $row["pro_price"]?>.00</div>
              </div>
            </div>
			      <?php
						}

		?>
            
            
          </div>
        </div>
				<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
			   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 4 OFFSET 5 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
            <div class="single-search-product d-flex">
              <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><img src="<?php echo "admin/img/".$row["pro_image"] ?>" alt=""></a>
              <div class="desc">
                  <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="title"><?php echo $row["pro_name"]?></a>
                  <div class="price">Rs <?php echo $row["pro_price"]?>.00</div>
              </div>
            </div>
			      <?php
						}

		?>
            
            
          </div>
        </div>
				<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
			   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 4 OFFSET 9 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
            <div class="single-search-product d-flex">
              <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><img src="<?php echo "admin/img/".$row["pro_image"] ?>" alt=""></a>
              <div class="desc">
                  <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="title"><?php echo $row["pro_name"]?></a>
                  <div class="price">Rs <?php echo $row["pro_price"]?>.00</div>
              </div>
            </div>
			      <?php
						}

		?>
            
            
          </div>
        </div>
				<div class="col-sm-6 col-xl-3 mb-4 mb-xl-0">
          <div class="single-search-product-wrapper">
			   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 4 OFFSET 13 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
            <div class="single-search-product d-flex">
              <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><img src="<?php echo "admin/img/".$row["pro_image"] ?>" alt=""></a>
              <div class="desc">
                  <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="title"><?php echo $row["pro_name"]?></a>
                  <div class="price">Rs <?php echo $row["pro_price"]?>.00</div>
              </div>
            </div>
			      <?php
						}

		?>
            
            
          </div>
        </div>
      </div>
		</div>
	</section>
	<!--================ end related Product area =================-->  	












<?php
include("footer.php");
?>