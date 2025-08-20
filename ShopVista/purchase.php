<?php
include("admin/config.php");
session_start();

?>

<?php
if(isset($_POST["btn_placeorder"]))
{
	$query1= "insert into ordermanager (om_fullname,om_email,om_phone,om_country,om_state,om_address,om_paymode) values 
		('".$_POST["name"]."','".$_POST["email"]."','".$_POST["pnumber"]."','".$_POST["country"]."','".$_POST["state"]."','".$_POST["address"]."','".$_POST["selector"]."')";
	
	if(mysqli_query($connect,$query1))
	{
		$Order_id = mysqli_insert_id($connect);
		$query2= "insert into  user_order (order_id,item_name,item_price,item_qty) values (?,?,?,?)";
		$stmt=mysqli_prepare($connect,$query2);
		if($stmt)
		{
			mysqli_stmt_bind_param($stmt,"isii",$Order_id,$item_name,$item_price,$item_quantity);
			foreach($_SESSION["cart"] as $keys => $values)
			{
				$item_name =  $values["Name"];
				$item_price = $values["Price"];
				$item_quantity = $values["Quantity"];
				mysqli_stmt_execute($stmt);
		
			}
			unset($_SESSION["cart"]);
			echo "<script>alert('Order Placed');window.location='index.php'</script>";
		}
		else
		{
			echo "<script>alert('".mysqli_error($connect)."')</script>";
		}
	}
	else
	{
			
		echo "<script>alert('".mysqli_error($connect)."')</script>";
	}
}

?>