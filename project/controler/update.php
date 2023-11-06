<?php
$id=$_POST["std_id"];
$name=$_POST["name"];
$fname=$_POST["fname"];
$gender=$_POST["gender"];
$phone=$_POST["phone"];
$province=$_POST["province"];
$tazkira=$_POST["tazkira"];
$address=$_POST["address"];


if($_FILES["std_photo"]["name"]!=""){
 $photo=$_FILES["std_photo"]["name"];
$path="pictures/".$photo;
move_uploaded_file($_FILES["std_photo"]["tmp_name"],"../$path");
$connection=mysqli_connect("localhost","ODBC","","masan_company");
$update="UPDATE student SET name='$name',fathername='$fname',gender='$gender',phone='$phone',province='$province',tazkira='$tazkira',address='$address' std_photo='$photo' WHERE id=$id ";
    
    if($mysqli_query($connection,$update))
    header("location:../student_list.php?update=success");
    else
    header("location:../student_list.php?update=failed"); 
    
}
    else{
        
$connection=mysqli_connect("localhost","ODBC","","masan_company");
$update="UPDATE student SET name='$name',fathername='$fname',gender='$gender',phone='$phone',province='$province',tazkira='$tazkira',address='$address' WHERE id=$id ";
    
    if(mysqli_query($connection,$update))
    header("location:../student_list.php?update=success");
    else
    header("location:../student_list.php?update=failed"); 
}






?>
