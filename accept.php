<?php
$rid=$_REQUEST['hidden'];
$con=mysqli_connect("localhost","root","","product_info");
if(!$con){
	die("Error :".mysqli_error($con));
}

	if(isset($_GET['accept']))
	{
	$sql="UPDATE review set status=1 where r_id='$rid'";
	header('location:addproduct.php');
	$result = mysqli_query($con,$sql);
	if(!$result){
		die("query..!".mysqli_error($con));
	}
	}
	else{
		$sql="DELETE from review where r_id='$rid'";
		$result = mysqli_query($con,$sql);
		if(!$result){
			die(mysqli_error($con));
		}
		

	}
	/*
	if(mysqli_query($con,$sql))
		echo "Successful";
	else mysqli_error($con);
	}*/
	


?>