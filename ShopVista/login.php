<?php
include( "header.php" )
?>
<?php /*?><script>
			function validate(){
            var username = fm.user.value;
            var password = fm.pwd.value;
           // username
           var ptr_name = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/
           if(username.length == 0)
           {
            document.getElementById("name").style.borderColor = "red";
           }
           else if(ptr_name.test(username) == false){
        
            document.getElementById("sp_1").innerHTML = "please enter a valid username use @ and .";
            document.getElementById("sp_1").style.color = "red";
           }
           else
           {
            document.getElementById("sp_1").innerHTML = "✔";
            document.getElementById("name").style.borderColor = "green";
           }
           var ptr_pass = /^[a-zA-Z]\w{3,14}$/
           if(password.length == 0)
           {
            document.getElementById("pwd").style.borderColor = "red";
           }
           else if(ptr_pass.test(password) == false){
          
          document.getElementById("sp_2").innerHTML = "First char must be alphabet the min 4 max 14";
          document.getElementById("sp_2").style.color = "red";
         }
           else
           {
            document.getElementById("sp_2").innerHTML="✔";
            document.getElementById("pwd").style.borderColor = "green";
           }
		if(ptr_name.test(username) == true && ptr_pass.test(password) == true)
            {
				       
            }
        }
			
			</script><?php */?>
<!--================Login Box Area =================-->
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
          <?php
          if (isset($_POST["btnlogin"])) {
    $username = $_POST["name"];
    $password = $_POST["pwd"];

    include("admin/config.php"); // Include the database connection file

    $query = "SELECT * FROM registrationtable WHERE res_email = '$username'";
    $result = mysqli_query($connect, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        if ($password == $row["res_password"]) {
            $_SESSION["userlogin"] = $username;
          echo  '<script> window.location.href="index.php"</script>';
        }
		 else{
			$message="please enter a valid username and password ";
		}
    }

   
}
          ?>
          <form name="fm" method="post" class="row login_form">
            <div class="col-md-12 form-group">
              <input type="email" class="form-control" id="name" name="name" placeholder="Username">
				<span id="sp_1"></span>
            </div>
            <div class="col-md-12 form-group">
              <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
				<span id="sp_2"></span>
            </div>
            <div class="col-md-12 form-group">
              <input type="submit" onClick="validate()" value="Log In"  name="btnlogin" class="button button-login w-100">
				<p><?php echo @$message?></p>
              <a href="signup.php">Or Sign up</a> </div>
          </form>
			
        </div>
      </div>
    </div>
  </div>
</section>
<!--================End Login Box Area =================-->

<?php
include( "footer.php" )
?>