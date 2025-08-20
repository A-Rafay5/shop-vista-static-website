<?php
include( "header.php" );
?>

<!-- ================ start banner area ================= -->
<section class="blog-banner-area "  id="blog">
  <div style="background-color: #384aeb" class="container h-100">
    <div class="blog-banner">
      <div class="text-center">
        <h1 style="color: white">Contact Us</h1>
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

<!-- ================ contact section start ================= -->
<section class="section-margin--small ">
  <div class="container">
    <div class="d-none d-sm-block mb-5 pb-4">
      <div class="hero-banner">
        <div class="row">
          <div class="col-md-4">
            <center>
              <h1 class="heading"  style="color: white"><br>
                Our Location</h1>
              <p class="p1"  style="color: white">Aptech North Nazimabad Center<br>
                Address: SD 1, Block A, Near Metric Board Office, North Nazimabad, Karachi.</p>
            </center>
          </div>
          <div class="col-md-8 reveal">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=700&amp;height=400&amp;hl=en&amp;q=Aptech North Nazimabad Center Address: SD 1, Block A, Near Metric Board Office, North Nazimabad, Karachi.&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <a href="https://mcpenation.com/">MCPE Nation</a></div>
              <style>
.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}
</style>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
        <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Karachi Pakistan</h3>
            <p>Aptech Computer Learning</p>
          </div>
        </div>
        <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-headphone"></i></span>
          <div class="media-body">
            <h3><a href="tel:454545654">(+92) 21-111 278 324 </a></h3>
            <p>Mon to Sat 9am to 5pm</p>
          </div>
        </div>
        <div class="media contact-info"> <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:support@colorlib.com">support@aptechnn.com</a></h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div>
		
      <div class="col-md-8 col-lg-9">
 <?php
        include("admin/config.php");
        if(isset($_POST[ "btnpost"]))
		{
          $name = $_POST["name"];
          $email = $_POST["email"];
          $sub = $_POST["subject"];
          $mess = $_POST["message"];
          $query = "insert into contactmessage_table (mess_name,mess_email,mess_subject,message) values ('".$name."','".$email."','".$sub."','".$mess."')";
          $execute = mysqli_query($connect,$query);
          if($execute)
		  {
            $message = "Registration Complete";
          } else 
		  {
            $message = mysqli_error($connect);
          }

        }
        ?>
        <form name="fm" action="contact_process.php"  class="form-contact contact_form"  method="post">
          <div class="row">
            <div class="col-lg-5">
              <div class="form-group">
                <input type="text" class="form-control" name="name" id="box_1" requried    placeholder="Enter Name">
                <label id="lb_1"></label>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" id="box_2" requried  placeholder="Enter email address" name="email" >
                <label id="lb_2"></label>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="box_3" requried  placeholder="Subject" name="subject" >
                <label id="lb_3"></label>
              </div>
            </div>
            <div class="col-lg-7">
              <div class="form-group">
                <textarea class="form-control different-control w-100" rows="7" cols="40" name="message" placeholder="Messege" id="box_4" requried   ></textarea>
                <label id="lb_4"></label>
              </div>
            </div>
          </div>
          <div class="form-group text-center text-md-right mt-3">
            <button type="submit" onClick="validate()" class="button  button--active button-contactForm"  name="btnpost">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- ================ contact section end ================= -->

<?php
include( "footer.php" );
?>