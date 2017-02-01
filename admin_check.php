<?php
 $name=$_GET['name'];
$pass=$_GET['pass'];
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
else
{
	$sql="SELECT * from admin where name='$name' and pass='$pass'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		echo "addproduct.php";
		//header('location:addproduct.php');
	}
	else
	{
		echo "Invalid User!!! Please Register.";
	}
}

?>