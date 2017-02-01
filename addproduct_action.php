<?php
$product_name=$_POST['product_name'];
$city_name=$_POST['city_name'];
$product_type=$_POST['product_type'];
$brand_type=$_POST['brand_type'];
$product_desc=$_POST['product_desc'];
$cost=$_POST['cost'];

$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
else
{
	/*echo $product_name;
	echo $city_name; 
	echo $product_type;
	echo $brand_type;
	echo $product_desc;
	echo $cost;*/
	if($_FILES["file"]["type"]="image/gif" || $_FILES["file"]["type"]="image/png" || $_FILES["file"]["type"]="image/png" && $_FILES["file"]["size"]<30000)
	{
	if($_FILES["file"]["error"]>0)
	{
		echo "Error ".$_FILES["file"]["error"]."</br>";

	}
	else
	{
		echo "Upload:".$_FILES["file"]["name"]."</br>";
		echo "Type:".$_FILES["file"]["type"]."</br>";
		echo "Size:".($_FILES["file"]["size"]/1024)."</br>";
		echo "Stored in:".$_FILES["file"]["tmp_name"]."</br>";
		move_uploaded_file($_FILES["file"]["tmp_name"], "uploads/".$_FILES["file"]["name"]);
	}

	}
	$image_name=$_FILES["file"]["name"];
	$sql="INSERT INTO product VALUES ('','$product_name','$city_name','$product_type','$brand_type','$product_desc','$cost','$image_name')";
	if(mysqli_query($conn,$sql))
	{
		echo "data inserted";
	}
	else 

	echo mysqli_error($conn);
}
echo "</br></br></br></br>";
echo '<a href="addproduct.php">Go back to Admin panel</a>';
mysqli_close($conn);
?>
