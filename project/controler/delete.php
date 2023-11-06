<?php
$id=$_GET["id"];
$connection=mysqli_connect("localhost","ODBC","","masan_company");
$delete="DELETE FROM student WHERE id=$id";
if(mysqli_query($connection,$delete))
    header("location:../student_list.php?delete=success");
else
     header("location:../student_list.php?delete=failed");
    










?>