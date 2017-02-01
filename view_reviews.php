<?php

$conn=mysqli_connect('localhost','root','');
if(!mysqli_select_db($conn,'product_info'))
{
	die(mysqli_error($conn));
}
else
{
	$sql="SELECT * from review where status='0'";
	$result=mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$name=$row['name'];
			$review=$row['review'];
			$r_id=$row['r_id'];
			echo "<form action='accept.php' method='get'>";
			echo "<table cellspacing='50'><tr><th>Username</th><th>Review</th><th>Result</th></tr>";
			echo "<tr><td>$name</td><td>$review</td>";
			echo "<input type='hidden' name='hidden' value='".$r_id."'>";
			echo "<td><input type='submit' value='accept' name='accept'>&nbsp;&nbsp;<input type='submit' value='reject' name='reject'>";
			echo "</table>";
			echo "</br></br></form>";
		}
	} 
}
?>