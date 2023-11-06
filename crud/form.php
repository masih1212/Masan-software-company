<html>
<head>
</head>


<body>
<?php

if(isset($_GET["required"])){
	echo  "the form fill is reqire";
};

?>
<form action="register.php" method="POST">
<table>
<tr>
<td>name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>father name</td>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>confirm password</td>
<td><input type="password" name="cpassword"></td>
</tr>
<tr>
<td>
<?php
if(isset($_GET["password"])){
	echo "<p style='color:red'>the password not match</p>";
};
?>
<td/>
</tr>
<tr>
<td>gender</td>
<td><input type="radio" name="gender" value="male" checked>male
<input type="radio" name="gender" value="female">female</td>
</tr>
<tr>
<td>phone number</td>
<td><input type="text" name="phone"></td>
</tr>
<tr>
<td>photo</td>
<td><input type="file" name="photo"></td>
</tr>
<tr>
<td>province</td>
<td><select name="province">
<option value="">-select your province-</option>
<option value="kabul">kabul</option>
<option value="parwan">parwan</option>
<option value="ghazni">ghazni</option>
<option value="ghoor">ghoor</option>
<option value="takhar">takhar</option>
<option value="kapisa">kapisa</option>
<option value="herat">herat</option>
<option value="mazar">mazar</option>
<option value="paktya">paktaya</option>
</select></td>
</tr>
<tr>
<td>details</td>
<td><textarea name="massage"></textarea></td>
</tr>
<tr>
<td></td>
<td><input type="submit"></td>
</tr>
</table>
</form>
</body>




</html>