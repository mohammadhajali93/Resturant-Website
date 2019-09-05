<?php 

$ID_Employee = $_POST["ID_Employee"];
$Name = $_POST["Name"];

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");

mysqli_select_db($con,"trackkid_my_database");



if (!empty($ID_Employee))
  {  
   $res=mysqli_query($con,"delete from employee where ID_Employee='$ID_Employee'");
  }

if (!empty($Name))
  {

   $res=mysqli_query($con, "delete from employee where Name like '$Name%'");
    }


mysqli_close($con)

?>
<!DOCTYPE html>
<html>
<body>
<h1>
Record with 
<?php 
if (!empty($Name)) 
  {echo "name:$Name";} 
else 
   {echo "id:$ID_Employee";} 
?> 
 where deleted!! <br/>
</h1>


                                 
</body>
</html>



