<?php
session_start();
$cartcount = 0;
$gt = 0;

if ( isset( $_SESSION[ "cart" ] ) ) {
  $cartcount = count( $_SESSION[ "cart" ] );
  for ( $i = 0; $i < $cartcount; $i++ ) {
    @$subtotal += $_SESSION[ "cart" ][ $i ][ "Price" ] * $_SESSION[ "cart" ][ $i ][ "Quantity" ];
    @$tax = $subtotal * 20 / 100;
  }
  $gt = @$subtotal + @$tax;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Shop Vista - Home</title>
<link rel="icon" href="img/Fevicon.png" type="image/png">
<link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
<link rel="stylesheet" href="vendors/nice-select/nice-select.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
<link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
<!--================ Start Header Menu Area =================-->
<header class="header_area">
  <div class="main_menu">
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container"> <a class="navbar-brand logo_h" href="index.php"><img src="img/Fevicon.png" alt=""> <b style=" font-size:30px">ShopVista</b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
          <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
            <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item submenu dropdown"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Category</a>
              <ul class="dropdown-menu">
                <?php
                include( "admin/config.php" );
                $exe = mysqli_query( $connect, "select * from categorytable" );
                while ( $row = mysqli_fetch_array( $exe ) ) {
                  ?>
                <li class="nav-item"><a class="nav-link" href="shop_category.php?c_id=<?php echo $row["cat_id"]?>"><?php echo $row["cat_name"]?></a></li>
                <?php
                }
                ?>
              </ul>
            </li>
            <li class="nav-item submenu dropdown"> <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Product</a>
              <ul class="dropdown-menu">
                <?php
                include( "admin/config.php" );
                $exe = mysqli_query( $connect, "select * from producttable" );
                while ( $row = mysqli_fetch_array( $exe ) ) {
                  ?>
                <li class="nav-item"><a class="nav-link" href="single-product.php?c_id=<?php echo $row["pro_id"]?>"><?php echo $row["pro_name"]?></a></li>
                <?php
                }
                ?>
              </ul>
            </li>
            <!--	<li class="nav-item submenu dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                  aria-expanded="false">Pages</a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a class="nav-link" href="login.html">Login</a></li>
                  <li class="nav-item"><a class="nav-link" href="register.html">Register</a></li>
                  <li class="nav-item"><a class="nav-link" href="tracking-order.html">Tracking</a></li>
                </ul>
              </li>-->
            <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
          </ul>
          <ul class="nav-shop">
            <li class="nav-item">
              <button>
              <a href="cart.php"><i class="ti-shopping-cart"></i><span class="nav-shop__circle"><?php echo @$cartcount; ?></span></a>
              </button>
            </li>
            <li>&nbsp;</li>
            <li class="nav-item">
              <button><a  href="login.php"><i class="fa fa-file"></i></a></button>
            </li>
            <li class="nav-item"><a class="button button-header" href="cart.php"><span class="cart-amunt">Rs. <?php echo @$gt?></span></a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</header>
<!--================ End Header Menu Area =================--> 
