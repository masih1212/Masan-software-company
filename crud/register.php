<?php
$name=$_POST["name"];
$fname=$_POST["fname"];
$password=$_POST["password"];
$cpassword=$_POST["cpassword"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$photo=$_POST["photo"];
$province=$_POST["province"];
$massage=$_POST["massage"];


if($name="" || $fname="" || $password=="" || $cpassword=="" || $gender=="" || $phone=="" || $photo="" || $province="" || $massage==""){
	
header("location:form.php?required=fals");	
}
if($password!=cpassword){
	
	header("location:form.php?password=not match");
	
};

?>