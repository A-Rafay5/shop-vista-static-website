<?php
include("header.php");
?>


 <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area "  id="blog">
		<div style="background-color: #384aeb" class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1 style="color: white">Shop Products</h1>
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


 <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <p>Grab your favourite now! </p>
          <h2>Our All <span class="section-intro__style">Products</span></h2>
        </div>
        <div class="row">
			 <?php
						include("admin/config.php");
						$exe = mysqli_query($connect,"select p.pro_id,p.pro_code,p.pro_name,p.pro_des,p.pro_price,p.pro_image,p.pro_qty,c.cat_name  from producttable as p  inner join  categorytable as c on c.cat_id  = p.cat_id_fk ");
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




































<?php
include("footer.php");
?>