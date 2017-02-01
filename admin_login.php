<html>
<head>
 <style type="text/css">
  body {
    
    background-color:#E0FFFF }
  </style>
  <script>
  function f1(){
  if(navigator.appname=="Microsoft Internet Explorer"){
		xhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else
	{
		xhttp = new XMLHttpRequest();
		xhttp.open("POST","admin_login.php?name="+name+"&pass="+pass,true);
		xhttp.send();
		xhttp.onreadystatechange=function() {
    		if(xhttp.readyState == 4) {
    			if(responseText=='Invalid User!!! Please Register.'){
			document.getElementById('user_check').innerHTML=xhttp.responseText;
		}
			}
		}
	}
	}
  </script>
</head>
<body>
	<hr><h2 align="center">Admin Login</h2><hr>
	</br></br>
	<div id="main" align="center" style="width:50%; height:50%; margin-left:300px; margin-top:100px">
		
		<fieldset>
			<legend>Enter your details</legend>
			<form action="#" method="post">
				<table>
				<tr>
				<td>Admin Name:</td>
				<td><input type="text" placeholder="Enter name" name="name" id="name"></td>
				</tr>
				<tr>
				<td>Password:</td>
				<td><input type="password" placeholder="Enter password" name="pass" id="pass"></td>
				</tr>
			</table>
		</br></br>
			<span id="user_check" name="user_check"></span>
			<input type="submit" value="Sign In" onclick="f1()">&nbsp;&nbsp;
			<input type="button" value="Create a new account">
			</form>
		</fieldset>
	</div>
	<?php
$name=$_REQUEST['name'];
$pass=$_REQUEST['pass'];
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
		header('location:addproduct.php');
	}
	else
	{
		echo "Invalid User!!! Please Register.";
	}
}

?>

</body>
</html>