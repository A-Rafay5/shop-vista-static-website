<?php
include("header.php");
?>





	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="blog">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Blog Details</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->



   <!--================Blog Categorie Area =================-->
  <section class="blog_categorie_area">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="categories_post">
                <img class="card-img rounded-0" src="img/blog/cat-post/cat-post-3.jpg" alt="post">
                <div class="categories_details">
                    <div class="categories_text">
                        <a href="single-blog.html">
                            <h5>Social Life</h5>
                        </a>
                        <div class="border_line"></div>
                        <p>Enjoy your social life together</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
          <div class="categories_post">
            <img class="card-img rounded-0" src="img/blog/cat-post/cat-post-2.jpg" alt="post">
            <div class="categories_details">
              <div class="categories_text">
                <a href="single-blog.html">
                    <h5>Politics</h5>
                </a>
                <div class="border_line"></div>
                <p>Be a part of politics</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4 mb-4 mb-lg-0">
            <div class="categories_post">
                <img class="card-img rounded-0" src="img/blog/cat-post/cat-post-1.jpg" alt="post">
                <div class="categories_details">
                    <div class="categories_text">
                        <a href="single-blog.html">
                            <h5>Food</h5>
                        </a>
                        <div class="border_line"></div>
                        <p>Let the food be finished</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--================Blog Categorie Area =================-->

  <!--================Blog Area =================-->
  <section class="blog_area">
      <div class="container">
          <div class="row">
			   <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <div class="input-group">
                              <input type="text" class="form-control" placeholder="Search Posts">
                              <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">
                                      <i class="lnr lnr-magnifier"></i>
                                  </button>
                              </span>
                          </div>
                          <!-- /input-group -->
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget author_widget">
                          <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                          <h4>Charlie Barber</h4>
                          <p>Senior blog writer</p>
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
														
														$exe = mysqli_query($connect,"select * from producttable");
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
              <div class="col-lg-8">
                  <div class="blog_left_sidebar">
                      <article class="row blog_item">
                        <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select * from blogtable");
						while($row = mysqli_fetch_array($exe))
						{
						?>
                          <div class="col-md-9">
                              <div class="blog_post">
                                  <img src="<?php echo "admin/img/".$row["blog_image"] ?>" alt="">
                                  <div class="blog_details">
                                      <a href="single-blog.html">
                                          <h2><?php echo $row["blog_heading"]?></h2>
                                      </a>
                                      <p><?php echo $row["blog_des"]?></p>
                               
                                  </div>
                              </div>
                          </div>
						  <div class="col-lg-3  col-md-3">
													<div class="blog_info text-right">
														<h6>Quick links</h6>
															<div class="post_tag">
																	<a href="index.php">Home,</a>
																	<a href="category.php">Categories,</a>
																	<a href="product.php">Products,</a>
																	<a href="contact.php">Contact</a>
															</div>
															
															<ul class="blog_meta list">
                                      <li>
                                          <a href="#">Mark wiens
                                              <i class="lnr lnr-user"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">12 Dec, 2017
                                              <i class="lnr lnr-calendar-full"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">1.2M Views
                                              <i class="lnr lnr-eye"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">06 Comments
                                              <i class="lnr lnr-bubble"></i>
                                          </a>
                                      </li>
                                  </ul>
													</div>
											</div>
						  
						    <?php 
						}
			?>
                      </article>
                      
                      
                      

                      
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