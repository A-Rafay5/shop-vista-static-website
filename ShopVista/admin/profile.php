<?php
include("header.php");
?>






<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
						<div class="row mb-3">
							 <div class="card shadow-sm">
          <div class="card-header bg-transparent text-center">
            <img class="profile_img" style="border: thin;border-radius: 50%" width="200px" height="200px" src="img/profile.jpg" alt="student dp">
            <h3><?php echo $_SESSION["userlogin"]?></h3>
          </div>
          
							<div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far  pr-1">Information</i></h3>
          </div>	 
			<div class="card-body pt-0">
            <table class="table table-bordered">
				<tr>
                <th width="30%">Name</th>
                <td width="2%">:</td>
                <td><?php echo $_SESSION["userlogin"]?></td>
              </tr>
				<tr>
                <th width="30%">Email</th>
                <td width="2%">:</td>
                <td>admin123@gmail.com</td>
              </tr>
				<tr>
                <th width="30%">Phone No</th>
                <td width="2%">:</td>
                <td>+92 300 0000000</td>
              </tr>
				<tr>
                <th width="30%">Job Title</th>
                <td width="2%">:</td>
                <td>Adminstrator</td>
              </tr>
				<tr>
                <th width="30%">Facebook</th>
                <td width="2%">:</td>
                <td>www.facebook.com</td>
              </tr>
				<tr>
                <th width="30%">Instagram</th>
                <td width="2%">:</td>
                <td>www.instagram.com</td>
              </tr>
				<tr>
                <th width="30%">Youtube</th>
                <td width="2%">:</td>
                <td>www.youtube.com</td>
              </tr>
              <tr>
                <th width="30%">Permissions </th>
                <td width="2%">:</td>
                <td>add, edit, or delete products, view customer data, or manage orders.</td>
              </tr>
            </table>
          </div>	
			<!--<div class="card-header bg-transparent border-0">
            <h3 class="mb-0"><i class="far fa-clone pr-1"></i>Other Information</h3>
          </div>
          <div class="card-body pt-0">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>-->
        </div>
						</div>
					
<!-- Student Profile -->

<!-- partial -->
           
                    </div>
                </div>


</div>

























<?php
include("footer.php");
?>