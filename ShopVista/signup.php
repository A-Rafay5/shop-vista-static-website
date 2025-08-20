<?php
include( "header.php" )
?>

<!--================Login Box Area =================-->
<section class="login_box_area section-margin">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login_form_inner login_box_img">
			<div class="hover">
          <h3>Log in to enter</h3>
         <?php
				include("admin/config.php");
				if(isset($_POST["btnlogin"]))
				{
					$email = $_POST["email"];
					$pwd = $_POST["pwd"];
					
					$query = "insert into registrationtable(res_email,res_password) values('".$email."','".$pwd."')";
					$exec=mysqli_query($connect,$query);
					
					
				}
else{
	$message = mysqli_error($connect);
}
				?>
          <form method="post" class="row login_form"  action="index.php"  id="contactForm" >
            <div class="col-md-12 form-group">
              <input type="email" class="form-control" id="name" name="email" placeholder="Username">
            </div>
            <div class="col-md-12 form-group">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
            </div>
            <div class="col-md-12 form-group">
              <button type="submit"  name="btnlogin" class="button button-login w-100">Log In</button>
				<p><?php echo @$message?></p>
              <a href="login.php">Or login </a> </div>
          </form>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Login Box Area =================-->

<?php
include( "footer.php" )
?>