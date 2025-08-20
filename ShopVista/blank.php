<?php
include( "header.php" )
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
		<button type="submit" class="btn btn-block btn-success" onClick="openpopup()" ></button>

		</div>
	</div>

</div>

<!--================Login Box Area =================-->
<div class="popup" id="popup">
  <section class="login_box_area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="login_box_img">
            <div class="hover">
              <h4>Are you Admin</h4>
              <p>If you are Admin also have controls and want to login in please </p>
              <a class="button button-account" href="admin/index.php">Click here</a> </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="login_form_inner">
            <h3>Log in to enter</h3>
            <?php /*?>
            <?php
            if ( isset( $_POST[ "btnlogin" ] ) ) {
              $username = $_POST[ "username" ];
              $password = $_POST[ "pwd" ];
              include( "admin/config.php" );
              $exe = mysqli_query( $connect, "select * from registrationtable WHERE res_email = '" . $username . "' " );
              while ( $row = mysqli_fetch_array( $exe ) ) {
                if ( $username == $row[ "res_email" ] && $password == $row[ "res_password" ] ) {
                  $_SESSION[ "userlogin" ] = $username;
                  header( "Location:index.php" );
                } else {
                  $message = "Invalid Username OR Password";
                }
              }
            }
            ?>
            <?php */?>
            <form method="post" class="row login_form" action="index.php" id="contactForm" >
              <div class="col-md-12 form-group">
                <input type="email" class="form-control" id="name" name="username" placeholder="Username">
              </div>
              <div class="col-md-12 form-group">
                <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
              </div>
              <div class="col-md-12 form-group">
                <button type="submit"  name="btnlogin" class="button button-login w-100">Log In</button>
                <?php /*?><p><?php echo @$message?></p><?php */?>
                <a href="signup.php">Or Sign up</a> </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
	  <script>
        let popup = document.querySelector(".popup");
        function openpopup(){
                // window.location.href = "thankyou.html";
                    popup.classList.add("open-popup");
				 window.location.href = "blank.php";
        }
	
	</script>
<!--================End Login Box Area =================--> 





<?php
include( "footer.php" )
?>