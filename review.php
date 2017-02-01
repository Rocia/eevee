<?php
$review=$_GET['review'];
$pid=$_GET['hidden'];
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
else
{
	session_start();
	$name=$_SESSION['user_name'];
	$sql="INSERT into review values('','$pid','$review','$name',now(),'0')";
	$result=mysqli_query($conn,$sql);
	echo '<h2><a href="userbrowse.php">Click here to go back</a></h2>';
	
}
?>