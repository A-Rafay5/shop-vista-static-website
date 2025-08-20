<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
    <div class="row m-5">
<?php
include("config.php");
if(isset($_POST["search"]))
{
	$qurey ="" ;
	if($search=$_POST["search"])
	{
	if($search == "%employee%" || $search == "EMPLOYEE" || $search == "Employee" || $search == "Show Employee" || $search == "show employee"  )
	{
		header("Location:showemployee.php");
	}
	if($search == "product" ||$search == "PRODUCT" || $search == "Product" || $search == "Show Product" || $search == "show product"  )
	{
		header("Location:showproduct.php");
	}
	
	}
	else
	{
		$message ="Error";
	}
}
		
	
?>
		<div class="col-md-12 mb-5">
     <form method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" value="<?php echo @$search?>" placeholder="Search " name="search">
          <input type="submit" class="btn btn-outline-secondary"  value="Search"  name="btnsubmit">       
			  </div>
	
 
        </form>
        </div>
		 
			 <p><?php echo @$message?></p> 
    </div>

    </div>
</body>
</html>

