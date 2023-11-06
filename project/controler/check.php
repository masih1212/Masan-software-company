<?php
$uname=$_POST["username"];
$pwd=$_POST["password"];

$connection=mysqli_connect("localhost","ODBC","","masan_company");
$select="SELECT * FROM user WHERE username='$uname' AND password='$pwd'";
$query=mysqli_query($connection, $select);

if(mysqli_num_rows($query) == 1){
	session_start();
	$_SESSION["login"]=$uname;
    header("location:../student_list.php");   
}
else{
	header("location:../loginform.php?login=failed");
}

?>