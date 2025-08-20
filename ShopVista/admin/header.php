<?php
session_start();

if(!isset($_SESSION["userlogin"] ))
{
	header("Location:index.php");	
}
?>
     





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Shop Vista | Admin Dashboard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="assets/img/Fevicon.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <!-- Libraries Stylesheet -->
    <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="assets/css/style.css" rel="stylesheet">
	
    
	    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="dashboard.php" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa  me-2"><img src="assets/img/Fevicon.png"></i>Shop Vista</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">&nbsp;</div>
                <div class="navbar-nav w-100">
                    <a href="dashboard.php" class="nav-item nav-link active"><i class="fa  me-2">D</i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2">C</i>Category</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addcategory.php" class="dropdown-item">Add Category</a>
                            <a href="showcategory.php" class="dropdown-item">Show Category</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2">P</i>Product</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addproduct.php" class="dropdown-item">Add Product</a>
                            <a href="showproduct.php" class="dropdown-item">Show Product</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2">B</i>Banner</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addbanner.php" class="dropdown-item">Add Banner</a>
                            <a href="showbanner.php" class="dropdown-item">Show Banner</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2">E</i>Employee</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="addemployee.php" class="dropdown-item">Register Employee</a>
                            <a href="showemployee.php" class="dropdown-item">Show Employee</a>
                        </div>
                    </div>
					<div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa me-2">O</i>Orders</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="orders.php" class="dropdown-item">Orders</a>
                            <a href="addstatus.php" class="dropdown-item">Add Status</a>
                        </div>
                    </div>
                    <a href="news.php" class="nav-item nav-link"><i class="fa  me-2">L</i>latest News</a>
                    <a href="addblog.php" class="nav-item nav-link"><i class="fa  me-2">B</i>Blogs</a>
                    <a href="message.php" class="nav-item nav-link"><i class="fa  me-2">M</i>Messages</a>
                    
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="dashboard.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa  me-2"><img src="assets/img/Fevicon.png"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
				

                
				
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            
                             <?php
							  	include("config.php");
							  	$query = "select * from  contactmessage_table limit 2";
							  	$execute = mysqli_query($connect,$query);
							  	while($row=mysqli_fetch_array($execute))
							  	{
							 ?>
                            <a href="dashboard.php" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                  <div class="ms-1">
									  <p><b class="mb-0"><?php echo $row["mess_name"]?></b></p>
                                         <p>Message: <span><?php echo $row["message"]?></span></p>
                                    </div>
                                </div>
                            </a><hr class="dropdown-divider">
								 <?php
								 
							  }
										 
							  ?>
                            
                            <a href="message.php" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/profile.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex"><?php echo $_SESSION["userlogin"]?></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="profile.php" class="dropdown-item">My Profile</a>
                            <a href="logout.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

