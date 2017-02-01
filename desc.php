<html>

<body>
<?php
$pid=$_GET['pid'];
session_start();
$name=$_SESSION['user_name'];
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}else{}

$sql="SELECT * from product where p_id='$pid'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($result))
{
	$image=$row['image_name'];
	$pr_name=$row['product_name'];
	$pr_desc=$row['product_desc'];
	echo "<br><br>";
	echo "<table align='center' cellspacing='50'>";
	echo "<tr><th><font color='red'>Image</font></th><th><font color='red'>Product Name</th><th><font color='red'>Product Description</th></tr>";
	echo "<tr><td><img src='uploads/$image' width='200px' height='200px'></td><td><h2>$pr_name</h2></td><td><h3>$pr_desc</h3></td></tr>";
	echo "</table>";

	echo "<div align='center'>";
	echo "<form action='review.php' method='get'>";
	echo "<textarea rows='5' cols='30' placeholder='Enter your review' name='review'></textarea>";
	echo "<input type='hidden' name='hidden' value='".$pid."'></br></br>";
	echo "<input type='submit' value='submit'>";
	echo "</form></div>";
	}
	$sql2="SELECT * from review where p_id='$pid' and status=1";
	$result1=mysqli_query($conn,$sql2);
	if(!$result1){
		die("query failed".mysqli_error($conn));
	}

	if(mysqli_num_rows($result1)>0)
	{
		$rows=mysqli_fetch_assoc($result1);
			
			echo "<table cellspacing='50' align='center'>";
			echo "<tr><th>Name</th><th>Review</th><th>Time</th></tr>";
			echo "<tr><td>".$rows['name']."</td><td>".$rows['review']."</td><td>".$rows['time']."</td></tr>";
			echo "</table>";
			
		
	}
	else {
		echo "No reviews";
	}

echo "</div>";

?>

</body>
</html>