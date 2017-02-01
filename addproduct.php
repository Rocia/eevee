
<html>
<head>
<script>
function blank()
{
	document.getElementById("product_name").value="";
	document.getElementById("city_name").value="";
	document.getElementById("product_type").value="";
	document.getElementById("brand_type").value="";
	document.getElementById("file").value="";
	document.getElementById("product_desc").value="";
	document.getElementById("cost").value="";
}
</script>	  
</head>
</head>
<body>
	<hr>
	<h2 align="center">Admin Panel</h2>
	<hr>
	<div id="form"align="center">
	<fieldset>
	<legend>Product Details</legend>
	<form action="addproduct_action.php" method="post" name="form" enctype="multipart/form-data">
	 <table>
	 <tr>
	 <td>Product Name:</td>
	 <td><input type="text" id="product_name" name="product_name"></td>
	</tr>
	<tr>
	 <td>City Name:</td>
	 <td><input type="text" id="city_name" name="city_name"></td>
	</tr>
	<tr>
	 <td>Product Type:</td>
	 <td>
	 <select name="product_type" id="product_type">
	 	<option value=""></option>
	 <option value="Mobiles">Mobiles</option>
	 <option value="Cameras">Cameras</option>
	 <option value="Television">Television</option>
	 <option value="DVD player">DVD player</option>
	 </select>
	</td>
	</br>
	</tr>
	<tr>
	 <td>Brand Type:</td>
	 <td>
	 <select name="brand_type" id="brand_type">
	 <option value=""></option>
	 <option value="Sony">Sony</option>
	 <option value="Phillips">Phillips</option>
	 <option value="Micromax">Micromax</option>
	 <option value="Videocon">Videocon</option>
	 </select>
	</td>
	</tr>
	<tr>
	 <td>Upload Image:</td>
	 <td><input type="file" name="file" id="file"/></td>
	</tr>
	 <tr>
	 <td>Product Desc:</td>
	 <td><input type="text" id="product_desc" name="product_desc"></td>
	</tr>
	 <tr>
	 <td>Cost:</td>
	 <td><input type="text" id="cost" name="cost">
	</tr>
</table>
</br></br>
	 <input type="submit" value="Add product"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="button" value="Reset" onclick="blank()">
	</form></br>
	<a href="view_reviews.php">View Reviews</a>

</div>
</body>
</html>