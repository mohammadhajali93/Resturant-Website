<?php
session_start(); // Starting Session

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");


//$ID_Employee=$_SESSION['id'];
//echo $ID_Employee;


$ID_Employee = $_POST["ID_Employee"];
$Name = $_POST["Name"];
$Type = $_POST["Tpye"];
$Password = $_POST["Password"];
$Salary = $_POST["Salary"];
$Address = $_POST["Address"];
$Phone_Number = $_POST["Pone_Number"];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

mysqli_select_db($con,"trackkid_my_database");

// mysqli_query($con," update employee set  
//                     Name='$Name',Tpye='$Type',Password='$Password',
//                     Salary='$Salary',Address='$Address',Phone_Number='$Phone_Number',image='$image' WHERE ID_Employee='$ID_Employee'");
                    
                    mysqli_query($con," update employee set  
                    Name='$Name',Tpye='$Type',Salary='$Salary',Address='$Address',Password='$Password',
                    Pone_Number='$Phone_Number',image='$image' WHERE ID_Employee='$ID_Employee'");

print ("your changes are updated .");

mysqli_close($con)

?>