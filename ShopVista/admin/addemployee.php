<?php
include("header.php");
?>
 
 <script>
function validate()
{
		var fn =fm.fname.value;
		var ln = fm.lname.value;
		var gen = fm.gender.value;
		var mar = fm.marital.selectedIndex; //position
		var dob = fm.date.value;
		var em = fm.email.value;
		var ph = fm.phone.value;
		var add = fm.address.value;
		var cit = fm.city.value;
		var sta = fm.state.value;
		var con = fm.country.selectedIndex; //position
		
		//=======First Name========================================
		if(fn.length == 0)
		{
			//document.write("Please enter your name");
			document.getElementById("lb_1").innerHTML ="Please enter your name";
			document.getElementById("lb_1").style.color= "Red";
			document.getElementById("box_1").style.borderColor = "Red";
		}
		else if(fn.length != 0)
		{
			document.getElementById("lb_1").innerHTML ="✔";
			document.getElementById("lb_1").style.color ="Green";
			document.getElementById("box_1").style.borderColor = "Green";
		}
		//========Last Name==========================================
		if(ln.length == 0)
		{
			//document.write("Please enter your name");
			document.getElementById("lb_2").innerHTML ="Please Enter your name";
			document.getElementById("lb_2").style.color= "Red";
			document.getElementById("box_2").style.borderColor = "Red";
		}
		else if(ln.length != 0)
		{
			document.getElementById("lb_2").innerHTML ="✔";
			document.getElementById("lb_2").style.color ="Green";
			document.getElementById("box_2").style.borderColor = "Green";
		}
		//========Gender =============================================
		if(gen.length == 0)
		{
			//document.write("Please enter your name");
			document.getElementById("lb_3").innerHTML ="Please Select";
			document.getElementById("lb_3").style.color= "Red";
			document.getElementById("box_3").style.borderColor = "Red";
		}
		else if(gen.length != 0)
		{
			document.getElementById("lb_3").innerHTML ="✔";
			document.getElementById("lb_3").style.color ="Green";
			document.getElementById("box_3").style.borderColor = "Green";
		}
		//=========Marital Status===============================================
		if(mar == 0 )
		{
			document.getElementById("lb_4").innerHTML ="Please Select";
				document.getElementById("lb_4").style.color= "Red";
		}
		else if(mar != 0)
		{
			document.getElementById("lb_4").innerHTML ="✔";
			document.getElementById("lb_4").style.color ="Green";
		}
		//=========Date of Birth=====================================================
		if(dob.length == 0)
		{
			//document.write("Please enter your name");
			document.getElementById("lb_5").innerHTML ="Please Enter Date of Birth";
			document.getElementById("lb_5").style.color= "Red";
			document.getElementById("box_5").style.borderColor = "Red";
		}
		else if(dob.length != 0)
		{
			document.getElementById("lb_5").innerHTML ="✔";
			document.getElementById("lb_5").style.color ="Green";
			document.getElementById("box_5").style.borderColor = "Green";
		}
		//=========Email======================================
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z])+\.([A-Za-z]{2,3})$/;
		if(em.length == 0)
		{
			//document.write("Please enter your name");
			document.getElementById("lb_6").innerHTML ="Please Enter your email";
			document.getElementById("lb_6").style.color= "Red";
			document.getElementById("box_6").style.borderColor = "Red";
		}
		else if(reg.test(em) == false)
		{
			document.getElementById("lb_6").innerHTML ="Invalid Email ID";
			document.getElementById("lb_6").style.color= "Red";
		}
		else if(em.length != 0)
		{
			document.getElementById("lb_6").innerHTML ="✔";
			document.getElementById("lb_6").style.color ="Green";
			document.getElementById("box_6").style.borderColor = "Green";
		}
		//=======Phone========================================
		var phone  = /^\(?([0-9]{4})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
		
		if(ph.length == 0)
		{
			document.getElementById("lb_7").innerHTML ="Please Enter your Phone";
			document.getElementById("lb_7").style.color= "Red";
			document.getElementById("box_7").style.borderColor = "Red";
		}
		else if(phone.test(ph)==false)
		{
			document.getElementById("lb_7").innerHTML ="Must Type xxxx xxx xxxx or xxxx-xxx-xxxx or xxxxxxxxxxx";
			document.getElementById("box_7").style.borderColor = "Red";
		}
		else if(ph.length != 0)
		{
			document.getElementById("lb_7").innerHTML ="✔";
			document.getElementById("lb_7").style.color ="Green";
			document.getElementById("box_7").style.borderColor = "Green";
		}
		//========Address============================================
		if(add.length == 0)
		{
			document.getElementById("lb_8").innerHTML ="Please Enter your Address";
			document.getElementById("lb_8").style.color= "Red";
			document.getElementById("box_8").style.borderColor = "Red";
		}
		else if(add.length != 0)
		{
			document.getElementById("lb_8").innerHTML ="✔";
			document.getElementById("lb_8").style.color ="Green";
			document.getElementById("box_8").style.borderColor = "Green";
		}
		//========City============================================
		if(cit.length == 0)
		{
			document.getElementById("lb_9").innerHTML ="Please Enter your City";
			document.getElementById("lb_9").style.color= "Red";
			document.getElementById("box_9").style.borderColor = "Red";
		}
		else if(cit.length != 0)
		{
			document.getElementById("lb_9").innerHTML ="✔";
			document.getElementById("lb_9").style.color ="Green";
			document.getElementById("box_9").style.borderColor = "Green";
		}
		//========City============================================
		if(sta.length == 0)
		{
			document.getElementById("lb_10").innerHTML ="Please Enter your State";
			document.getElementById("lb_10").style.color= "Red";
			document.getElementById("box_10").style.borderColor = "Red";
		}
		else if(sta.length != 0)
		{
			document.getElementById("lb_10").innerHTML ="✔";
			document.getElementById("lb_10").style.color ="Green";
			document.getElementById("box_10").style.borderColor = "Green";
		}
		//=======================================================
		if(con == 0 )
		{
			document.getElementById("lb_11").innerHTML ="Please Select";
				document.getElementById("lb_11").style.color= "Red";
		}
		else if(con != 0)
		{
			document.getElementById("lb_11").innerHTML ="✔";
			document.getElementById("lb_11").style.color ="Green";
		}
}

</script>

			
		<!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
					<div class="col-sm-12 ">
                        <div class="bg-light rounded h-100 p-4">
							<h6 class="mb-4"> Employee Registration</h6>
							<?php
							include("config.php");
							if(isset($_POST["btnadd"]))
							{
								$f_name=$_POST["fname"];
								$l_name=$_POST["lname"];
								$gender=$_POST["gender"];
								$marital_status=$_POST["marital"];
								$dob=$_POST["date"];
								$email=$_POST["email"];
								$phone_no=$_POST["phone"];
								$address=$_POST["address"];
								$city=$_POST["city"];
								$state=$_POST["state"];
								$country=$_POST["country"];
								$query= "insert into employee (Emp_F_NAME,Emp_L_NAME,Emp_Gender,Emp_Marital,Emp_DoB,Emp_Email,Emp_Phone,Emp_Street,Emp_City,Emp_State,Emp_Country) values ('".$f_name."','".$l_name."','".$gender."','".$marital_status."','".$dob."','".$email."','".$phone_no."','".$address."','".$city."','".$state."','".$country."')";
								$execute= mysqli_query($connect,$query);
								if($execute)
			  					{
									$message= "Employee Registered";
								}
								else
								{
									$message= mysqli_error($connect);
								}
								}
		  
								
							?>
                            <form method="post" name="fm" class="needs-validation">								
								<div class="row mb-3">
									<div class="col-sm-6 col-xl-6">
                                    <label class="col-sm-6 col-form-label">Employee Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="box_1" required placeholder="First"  name="fname" class="form-control">
										<label id="lb_1"></label>
                                    </div>
										</div>
								<div class="col-sm-6 col-xl-6">
									<div class="col-sm-10">
										  <label class="col-sm-6 col-form-label">&nbsp;</label>
                                        <input type="text" id="box_2" required placeholder="Last"  name="lname" class="form-control" >
										<label id="lb_2"></label>
                                    </div>
									</div>
								</div> 
								<div class="row mb-3">
									<div class="col-sm-6 col-xl-6">
                                    <label  class="col-sm-6 col-form-label">Gender</label>
                                    <div class="col-sm-10">
								<div class="form-check form-check-inline">
  								<input class="form-check-input" type="radio" id="box_3" name="gender"  value="Male">
									
 								 <label class="form-check-label" for="inlineRadio1">Male</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" id="box_3" name="gender"   value="Female">
									
								  <label class="form-check-label" for="inlineRadio2">Female</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="radio" id="box_3" name="gender"    value="Non Binary">
									
								  <label class="form-check-label" for="inlineRadio3">Non Binary</label>
								</div><label id="lb_3"></label>
								</div>
										
								</div>
									
									</div>
								<div class="row mb-3">
									<div class="col-sm-6 col-xl-6">
                                    <label   class="col-sm-6 col-form-label" >Marital Status</label>
                                    <div class="col-sm-10">
							<select class="form-select form-select-md mb-3" name="marital">
                                <option selected disabled>please select</option>
                                <option value="Unmarried">Unmarried</option>
                                <option value="Married">Married</option>
                                <option value="Divorced">Divorced</option>
                                <option value="Widowed">Widowed</option>
                            </select>
										<label id="lb_4"></label>
                                    </div>
										</div>
									<div class="col-sm-6 col-xl-6">
									<div class="row mb-3">
                                    <label class="col-sm-6 col-form-label">Date Of Birth</label>
                                    <div class="col-sm-10">
                                        <input type="date" id="box_5" name="date" class="form-control" required>
										<label id="lb_5"></label>
                                    </div>
								</div>
									</div>
									
									
								</div>
                                <div class="row mb-3">
									<div class="col-sm-6 col-xl-6">
                                    <label  class="col-sm-6 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" id="box_6" name="email" placeholder="abc@gmail.com"   class="form-control" required>
										<label id="lb_6"></label>
                                    </div>
										</div>
								<div class="col-sm-6 col-xl-6">
									<div class="col-sm-10">
										  <label  class="col-sm-6 col-form-label">Phone No</label>
                                        <input type="text" id="box_7" name="phone" placeholder="+92300-0000000"  class="form-control" required>
										<label id="lb_7"></label>
                                    </div>
									</div>
								</div>
								<div class="row mb-3">
									<div class="col-sm-6 col-xl-6">
                                    <label  class="col-sm-6 col-form-label">Home Address</label>
                                    <div class="col-sm-10">
                                        <input type="text" id="box_8" placeholder="Street Address" name="address"  class="form-control" required>
										<label id="lb_8"></label>
                                    </div>
										</div>
								<div class="col-sm-6 col-xl-6">
									<div class="col-sm-10">
										  <label class="col-sm-6 col-form-label">&nbsp;</label>
                                        <input type="text" id="box_9" placeholder="City" name="city"  class="form-control"  required>
										<label id="lb_9"></label>
                                    </div>
									</div>
									<br>
									<br>
									<br>
									<br>
									<br>
									<div class="col-sm-6 col-xl-6">
                                    <div class="col-sm-10">
                                        <input type="text" id="box_10" placeholder="State" name="state"  class="form-control" required>
										<label id="lb_10"></label>
                                    </div>
										</div>
									<br>
									<br>
									<br>
								<div class="col-sm-6 col-xl-6">
									<div class="col-sm-10">
                                        <select class="form-select form-select-md mb-3" name="country">
                                <option selected disabled>Country</option>
                                <option value="Afghanistan">Afghanistan </option>
                                <option value="Albania">Albania</option>
                                <option value="Algeria">Algeria</option>
                                <option value="Andorra">Andorra</option>
								<option value="Angola">Angola </option>
                                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                <option value="Argentina">Argentina</option>
                                <option value="Armenia">Armenia</option>
								<option value="Australia">Australia </option>
                                <option value="Austria">Austria</option>
                                <option value="Azerbaijan">Azerbaijan</option>
                                <option value="Bahamas">Bahamas</option>
								<option value="Bahrain">Bahrain </option>
                                <option value="Bangladesh">Bangladesh</option>
                                <option value="Barbados">Barbados</option>
                                <option value="Belarus">Belarus</option>
								<option value="Belgium">Belgium </option>
                                <option value="Belize">Belize</option>
                                <option value="Benin">Benin</option>
                                <option value="Bhutan">Bhutan</option>
								<option value="Bolivia">Bolivia</option>
                                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                <option value="Botswana">Botswana</option>
                                <option value="Brazil">Brazil</option>
								<option value="Brunei">Brunei </option>
                                <option value="Bulgaria">Bulgaria</option>
                                <option value="Burkina Faso">Burkina Faso</option>
                                <option value="Burundi">Burundi</option>
								<option value="Côte d'Ivoire">Côte d'Ivoire </option>
                                <option value="Cabo Verde">Cabo Verde</option>
                                <option value="Cambodia">Cambodia</option>
                                <option value="Cameroon">Cameroon</option>
                                <option value="Canada">Canada</option>
                                <option value="Central African Republic">Central African Republic</option>
                                <option value="Chad">Chad</option>
                                <option value="Chile">Chile</option>
                                <option value="China">China</option>
                                <option value="Colombia">Colombia</option>
                                <option value="Comoros">Comoros</option>
                                <option value="Congo">Congo</option>
                                <option value="Costa Rica">Costa Rica</option>
                                <option value="Croatia">Croatia</option>
                                <option value="Cuba">Cuba</option>
                                <option value="Cyprus">Cyprus</option>
                                <option value="Czechia ">Czechia </option>
                                <option value="Democratic Republic of the Congo">Democratic Republic of the Congo</option>
                                <option value="Denmark">Denmark</option>
                                <option value="Djibouti">Djibouti</option>
                                <option value="Dominica">Dominica</option>
                                <option value="Dominican Republic">Dominican Republic</option>
                                <option value="Ecuador">Ecuador</option>
                                <option value="Egypt">Egypt</option>
                                <option value="El Salvador">El Salvador</option>
                                <option value="Equatorial Guinea">Equatorial Guinea</option>
                                <option value="Eritrea">Eritrea</option>
                                <option value="Estonia">Estonia</option>
                                <option value="Eswatini">Eswatini</option>
                                <option value="Ethiopia">Ethiopia</option>
                                <option value="Fiji">Fiji</option>
                                <option value="Finland">Finland</option>
                                <option value="France">France</option>
                                <option value="Gabon">Gabon</option>
                                <option value="Gambia">Gambia</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Germany">Germany</option>
                                <option value="Ghana">Ghana</option>
                                <option value="Greece">Greece</option>
                                <option value="Grenada">Grenada</option>
                                <option value="Guatemala">Guatemala</option>
                                <option value="Guinea">Guinea</option>
                                <option value="Guinea-Bissau">Guinea-Bissau</option>
                                <option value="Guyana">Guyana</option>
                                <option value="Haiti">Haiti</option>
                                <option value="Holy See">Holy See</option>
                                <option value="Honduras">Honduras</option>
                                <option value="Hungary">Hungary</option>
                                <option value="Iceland">Iceland</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Iraq">Iraq</option>
                                <option value="Ireland">Ireland</option>
                                <option value="Israel">Israel</option>
                                <option value="Italy">Italy</option>
                                <option value="Jamaica">Jamaica</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="Kazakhstan">Kazakhstan</option>
                                <option value="Kenya">Kenya</option>
                                <option value="Kiribati">Kiribati</option>
                                <option value="Kuwait">Kuwait</option>
                                <option value="Kyrgyzstan">Kyrgyzstan</option>
                                <option value="Laos">Laos</option>
                                <option value="Latvia">Latvia</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Lesotho">Lesotho</option>
                                <option value="Liberia">Liberia</option>
                                <option value="Libya">Libya</option>
                                <option value="Liechtenstein">Liechtenstein</option>
                                <option value="Lithuania">Lithuania</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Madagascar">Madagascar</option>
                                <option value="Malawi">Malawi</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Maldives">Maldives</option>
                                <option value="Mali">Mali</option>
                                <option value="Malta">Malta</option>
                                <option value="Marshall Islands">Marshall Islands</option>
                                <option value="Mauritania">Mauritania</option>
                                <option value="Mauritius">Mauritius</option>
                                <option value="Mexico">Mexico</option>
                                <option value="Micronesia">Micronesia</option>
                                <option value="Moldova">Moldova</option>
                                <option value="Monaco">Monaco</option>
                                <option value="Mongolia">Mongolia</option>
                                <option value="Montenegro">Montenegro</option>
                                <option value="Morocco">Morocco</option>
                                <option value="Mozambique">Mozambique</option>
                                <option value="Myanmar">Myanmar</option>
                                <option value="Namibia">Namibia</option>
                                <option value="Nauru">Nauru</option>
                                <option value="Nepal">Nepal</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Nicaragua">Nicaragua</option>
                                <option value="Niger">Niger</option>
                                <option value="Nigeria">Nigeria</option>
                                <option value="North Korea">North Korea</option>
                                <option value="North Macedonia">North Macedonia</option>
                                <option value="Norway">Norway</option>
                                <option value="Oman">Oman</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Palau">Palau</option>
                                <option value="Palestine State">Palestine State</option>
                                <option value="Panama">Panama</option>
                                <option value="Papua New Guinea">Papua New Guinea</option>
                                <option value="Paraguay">Paraguay</option>
                                <option value="Peru">Peru</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Romania">Romania</option>
                                <option value="Russia">Russia</option>
                                <option value="Rwanda">Rwanda</option>
                                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                <option value="Saint Lucia">Saint Lucia</option>
                                <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                                <option value="Samoa">Samoa</option>
                                <option value="San Marino">San Marino</option>
                                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Senegal">Senegal</option>
                                <option value="Serbia">Serbia</option>
                                <option value="Seychelles">Seychelles</option>
                                <option value="Sierra Leone">Sierra Leone</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Slovakia">Slovakia</option>
                                <option value="Slovenia">Slovenia</option>
                                <option value="Solomon Islands">Solomon Islands</option>
                                <option value="Somalia">Somalia</option>
                                <option value="South Africa">South Africa</option>
                                <option value="South Korea">South Korea</option>
                                <option value="South Sudan">South Sudan</option>
                                <option value="Spain">Spain</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Sudan">Sudan</option>
                                <option value="Suriname">Suriname</option>
                                <option value="Sweden">Sweden</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Syria">Syria</option>
                                <option value="Tajikistan">Tajikistan</option>
                                <option value="Tanzania">Tanzania</option>
                                <option value="Thailand">Thailand</option>
                                <option value="Timor-Leste">Timor-Leste</option>
                                <option value="Togo">Togo</option>
                                <option value="Tonga">Tonga</option>
                                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                <option value="Tunisia">Tunisia</option>
                                <option value="Turkey">Turkey</option>
                                <option value="Turkmenistan">Turkmenistan</option>
                                <option value="Tuvalu">Tuvalu</option>
                                <option value="Uganda">Uganda</option>
                                <option value="Ukraine">Ukraine</option>
                                <option value="United Arab Emirates">United Arab Emirates</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States of America">United States of America</option>
                                <option value="Uruguay">Uruguay</option>
                                <option value="Uzbekistan">Uzbekistan</option>
                                <option value="Vanuatu">Vanuatu</option>
                                <option value="Venezuela">Venezuela</option>
                                <option value="Vietnam">Vietnam</option>
                                <option value="Yemen">Yemen</option>
                                <option value="Zambia">Zambia</option>
								<option value="Zimbabwe">Zimbabwe</option>
								
                            </select>
										
										<label id="lb_11"></label>
                                    </div>
									</div>
								</div>
                                
                                <input type="submit" value="Register" name="btnadd"  class="btn btn-primary" onclick="validate()">
								<p><?php echo @$message?></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


























<?php
include("footer.php");
?>