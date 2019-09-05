<?php
// insert 

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");

$ID_Employee=$_POST["ID_Employee"];
$Name=$_POST["Name"];
$Type = $_POST["Tpye"];
$Password = $_POST["Password"];
$Salary = $_POST["Salary"];
$Address = $_POST["Address"];
$Phone_Number = $_POST["Pone_Number"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));



mysqli_select_db($con,"trackkid_my_database");

mysqli_query($con,"insert into employee values('$ID_Employee' ,'$Name','$Type','$Password','$Salary','$Address','$Phone_Number' ,'$image')");

print ("your information saved in trackkid_my_database table employee");




mysqli_close($con)


?>