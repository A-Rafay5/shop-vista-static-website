<?php
include("header.php");
?>





  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
			   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select * from  bannertable where ban_id = 1");
						while($row = mysqli_fetch_array($exe))
						{
						?>
			  
            <div class="hero-banner__img">
              <img class="img-fluid" src="<?php echo "admin/img/".$row["banner_image"] ?>" alt="">
            </div>
			  
                      <?php
						}

						?>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Find it, love it, buy it.</h4>
              <h1>Shop Vista</h1>
              <p>ShopVista store is one of the most popular Online gift stores because they may be tailored to their customers’ preferences to a significant extent. If you have a passion for gifts and ideas for the best selection, you can open a successful Gift Shop in a certain niche.</p>
              <a class="button button-hero" href="product.php">Browse Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0" >
      <div class="owl-carousel owl-theme hero-carousel ">
         
		   <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select * from producttable LIMIT 3 OFFSET 4");
						while($row = mysqli_fetch_array($exe))
						{
						?>
		  <div  class="hero-carousel__slide">
          <img  src="<?php echo "admin/img/".$row["pro_image"] ?>" alt="" class="img-fluid">
          <a href="single-product.php?c_id=<?php echo $row["pro_id"]?>" class="hero-carousel__slideOverlay">
            <h3><?php echo $row["pro_name"]?></h3>
            <p>Rs <?php echo $row["pro_price"]?></p>
          </a>
        </div>
        
                
                      <?php
						}

						?>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2><span class="section-intro__style">Trending Product</span></h2>
        </div>
        <div class="row">
			 <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 8 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="<?php echo "admin/img/".$row["pro_image"] ?>" alt="">
                <ul class="card-product__imgOverlay">
               
                 <a  href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><li><button ><i  class="ti-shopping-cart"></i></button></li></a>
                 
                </ul>
              </div>
              <div class="card-body">
                <p><?php echo $row["cat_name"]?></p>
                <h4 class="card-product__title"><a href="single-product.html"><?php echo $row["pro_name"]?></a></h4>
                <p class="card-product__price">Rs <?php echo $row["pro_price"]?>.00</p>
              </div>
            </div>
          </div>
           <?php
						}

		?>
        </div>
      </div>
    </section>
    <!-- ================ trending product section end ================= -->  


    <!-- ================ offer section start ================= --> 
    <section class="offer" id="parallax-1" data-anchor-target="#parallax-1" data-300-top="background-position: 20px 30px" data-top-bottom="background-position: 0 20px">
      <div class="container">
        <div class="row">
			
          <div class="col-xl-5">
            <div class="offer__content text-center">
              <h3>Up To 50% Off</h3>
              <h4>Summer Sale</h4>
              <p>Find it, love it, buy it.</p>
              <a class="button button--active mt-3 mt-xl-4" href="product.php">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ offer section end ================= --> 

    <!-- ================ Best Selling item  carousel ================= --> 
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular Item in the market</p>
          <h2>Best <span class="section-intro__style">Sellers</span></h2>
        </div> 
		 
        <div class="owl-carousel owl-theme" id="bestSellerCarousel">
           <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk  LIMIT 6 OFFSET 10 ");
						while($row = mysqli_fetch_array($exe))
						{
						?>
          <div class="card text-center card-product">
            <div class="card-product__img">
              <img class="img-fluid" src="<?php echo "admin/img/".$row["pro_image"] ?>" alt="">
              <ul class="card-product__imgOverlay">
          		<a  href="single-product.php?c_id=<?php echo $row["pro_id"]?>">
                <li><button><i class="ti-shopping-cart"></i></button></li>
              	</a>
              </ul>
            </div>
            <div class="card-body">
              <p><?php echo $row["cat_name"]?></p>
              <h4 class="card-product__title"><a href="single-product.html"><?php echo $row["pro_name"]?></a></h4>
              <p class="card-product__price">Rs: <?php echo $row["pro_price"]?>.00</p>
            </div> 
          </div>
			<?php 
						}
			?>
        </div>
		 
      </div>
    </section>
    <!-- ================ Best Selling item  carousel end ================= --> 

    <!-- ================ Blog section start ================= -->  
    <section class="blog">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Popular News in the market</p>
          <h2>Latest <span class="section-intro__style">News</span></h2>
        </div>

        <div class="row">
			<?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select * from newstable");
						while($row = mysqli_fetch_array($exe))
						{
						?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
			   
            <div class="card card-blog">
				 
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="<?php echo "admin/img/".$row["news_image"] ?>" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#"><?php echo $row["news_title"]?></a></li>
                  <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.php"><?php echo $row["news_heading"]?></a></h4>
                <p><?php echo $row["news_des"]?></p>
                <a class="card-blog__link" href="single-blog.php">Read More <i class="ti-arrow-right"></i></a>
              </div>
				
            </div>
          </div>

          <?php 
						}
			?>

          
        </div>
      </div>
    </section>
    <!-- ================ Blog section end ================= -->  


    

  </main>































<?php
include("footer.php");
?>