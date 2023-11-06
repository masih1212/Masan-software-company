<?php
$name=$_POST["name"];
$fname=$_POST["fname"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$province=$_POST["province"];
$tazkira=$_POST["tazkira"];
$address=$_POST["address"];

$photo=$_FILES["std_photo"]["name"];
$path="pictures/".$photo;
move_uploaded_file($_FILES["std_photo"]["tmp_name"],"../$path");


$connection=mysqli_connect("localhost","ODBC","","masan_company");
$insert="INSERT INTO student(name,fathername,gender,phone,province,tazkira,photo,address)
VALUE('$name','$fname','$gender','$phone','$province','$tazkira','$photo','$address')";
if(mysqli_query($connection,$insert))
header("location:../student_form.php?insert=success");

else{
    header("location:../student_form.php?insert=failed");
}
?>