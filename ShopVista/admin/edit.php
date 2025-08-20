<?php
include("header.php");
?>


<?php
include("config.php");

if(isset($_POST["btnupdate"]))
{
	$up_id=$_POST["hideid"];
	$up_name=$_POST["name"];
	$up_salary=$_POST["salary"];
	$up_email=$_POST["email"];
	$up_image=$_POST["proimages"];
	$up_desig=$_POST["desig"];
	if(!empty($_FILES["picture"]["name"]))
	{
		$filename= $_FILES["picture"]["name"];
	    $temporary_loc= $_FILES["picture"]["tmp_name"];
		if(move_uploaded_file($temporary_loc,"images/".$filename))
		{
			$query = "update employee set emp_name ='".$up_name."', emp_salary='".$up_salary."', emp_email ='".$up_email."', emp_image ='".$filename."',
			emp_designation ='".$up_desig."' where emp_id = '".$up_id."'";
			$exe = mysqli_query($connect,$query);
				if($exe)
				{
						header("Location:show.php");
					
				}
				else
				{
				
							$message = mysqli_error($connect);
				}
			
		}
		
	}
	else
	{
			$query = "update employee set emp_name ='".$up_name."', emp_salary='".$up_salary."', emp_email ='".$up_email."', emp_image ='".$up_image."',
			emp_designation ='".$up_desig."' where emp_id = '".$up_id."'";
			$exe = mysqli_query($connect,$query);
			if($exe)
			{
					header("Location:show.php");
				
			}
			else
			{
			
						$message = mysqli_error($connect);
			}
	}
}
//------------------------------------update record fetch
if(isset($_GET["edit_id"]))
{
	$up_id=$_GET["edit_id"];
	$query = "select * from ordertable where order_id = '".$up_id."'";
    $exec= mysqli_query($connect,$query);
	$row = mysqli_fetch_array($exec);	
}
?>
<form method="post" action="edit.php">
<div class="container">
    <h1 class="text-center">Edit Status</h1>
     <input type="text" name="hideid" value= "<?php echo $row["order_id"] ?>"/>
    <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  placeholder="Enter Name" name="name" value="<?php echo @$row["emp_name"]?>" >
 	 </div>
   
    <div class="form-group">
    <label>Salary</label>
    <input type="text" class="form-control"  placeholder="Enter Salary" name="salary" value="<?php echo @$row["emp_salary"]?>">
 	 </div>
    
      
    <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control"  placeholder="Enter Email" name="email" value="<?php echo @$row["emp_email"]?>" >
 	 </div>
     
      <div class="form-group">
    <label>Choose Image</label>
    <input type="file" class="form-control"  name="picture" >
    <img src="<?php echo "images/".@$row["emp_image"]?>" width="50" height="50"/>
    <input type="text" name="proimages" value= "<?php echo $row["emp_image"] ?>"/>
 	 </div>
     
     <div class="form-group">
    <label >Select Designation</label>
    <select  class="form-control" name="desig">
    <?php
	if( $row["emp_designation"] == "Manager" )
	{
	echo '<option value="Manager" selected="selected">Manager</option>
      <option value="Senior Faculty" >Senior Faculty</option>
      <option value="Junior Faculty" >Junior Faculty</option>
      <option value="Humen Resource (HR)">Humen Resource (HR)</option>
      <option value="Maraketing Head">Maraketing Head</option>';
	}
    else if($row["emp_designation"] == "Senior Faculty")
	{
		echo '<option value="Manager">Manager</option>
      <option value="Senior Faculty"  selected="selected">Senior Faculty</option>
      <option value="Junior Faculty" >Junior Faculty</option>
      <option value="Humen Resource (HR)">Humen Resource (HR)</option>
      <option value="Maraketing Head">Maraketing Head</option>';
	}
	else if($row["emp_designation"] == "Junior Faculty")
	{
		echo '<option value="Manager">Manager</option>
      <option value="Senior Faculty"  >Senior Faculty</option>
      <option value="Junior Faculty" selected="selected">Junior Faculty</option>
      <option value="Humen Resource (HR)">Humen Resource (HR)</option>
      <option value="Maraketing Head">Maraketing Head</option>';
	}
	else if($row["emp_designation"] == "Humen Resource (HR)")
	{
		echo '<option value="Manager">Manager</option>
      <option value="Senior Faculty"  >Senior Faculty</option>
      <option value="Junior Faculty" >Junior Faculty</option>
      <option value="Humen Resource (HR)" selected="selected">Humen Resource (HR)</option>
      <option value="Maraketing Head">Maraketing Head</option>';
	}
	else if($row["emp_designation"] == "Maraketing Head")
	{
		echo '<option value="Manager">Manager</option>
      <option value="Senior Faculty"  >Senior Faculty</option>
      <option value="Junior Faculty" >Junior Faculty</option>
      <option value="Humen Resource (HR)">Humen Resource (HR)</option>
      <option value="Maraketing Head"  selected="selected">Maraketing Head</option>';
	}
	?>
     
    </select>
  </div>
   <input type="submit" class="btn-primary btn btn-block" value="Update Employee" name="btnupdate"/>
   <p><?php echo @$message?></p>
</div>
</form>
<?php
include("header.php");
?>