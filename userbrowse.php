
<?php
echo '<div id="header" align="center"><hr><h2>Welcome to the website</h2></br><We hope you have an amazing time shopping with us<hr></br></br></div>';
$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
else
{
$sql="SELECT * from product";
$result=mysqli_query($conn,$sql);
$rowcount=mysqli_num_rows($result);
$count=0;
while($row=mysqli_fetch_array($result)){
	$image=$row['image_name'];

	echo '<div id="id($count+1)" style="float:left; margin-left:30px">';
	echo  "<img src='uploads/".$image."' width='130px' height='100px'></br>";
	echo "<a href='desc.php?pid=".$row['p_id']."'>".$row['product_name']."</a>";
	echo "&nbsp;&nbsp;";
	$count++;
	echo"</div>";
}
}
?>