<?php
session_start();
$name=$_SESSION['user_name'];
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
echo"<div style='width:200px; height:200px; border:1px solid red'>";
echo "dasd"; 
	$sql2="SELECT * from review where status=1";
	$result1=mysqli_query($conn,$sql2);
	if(!$result1){
		die("query failed".mysqli_error($conn));
	}
	echo $a = mysqli_num_rows($result1);

	if(mysqli_num_rows($result1)>0)
	{
		$rows=mysqli_fetch_assoc($result1);
		

		 	echo $review=$rows['review'];
			echo $time=$rows['time'];
			
			echo "<table cellspacing='50'>";
			echo "<tr><th>Name</th><th>Review</th><th>Time</th></tr>";
			echo "<tr><td>".$rows['name']."</td><td>".$review."</td><td>".$rows['time']."</td></tr>";
			echo "</table>";
			
		
	}
	else {
		echo "ASdsa";
	}

echo "</div>";
?>