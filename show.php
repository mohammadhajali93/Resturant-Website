<?php

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");

mysqli_select_db($con,"trackkid_my_database");

$res=mysqli_query($con, "select * from employee");

$ID_Employee=$row["ID_Employee"];
   $Name=$row["Name"];
   $Tpye=$row["Tpye"];
   $Password=$row["Password"];   
    $Salary=$row["Salary"]; 
    $Address=$row["Address"]; 
    $Pone_Number=$row["Pone_Number"]; 
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
   print "<table border=1 cellpadding=3 cellspacing=0>";
   
  
     print "<tr> <td> $ID_Employee </td>   <td> $Name </td>   <td> $Tpye </td>   <td> $Password </td>
                  <td> $Salary </td>   <td> $Address </td>   <td> $Pone_Number </td>  <td> $image </td> </tr>";
 
   for ($i=0;$i < mysqli_num_rows($res);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($res);
       foreach ($row as $value) {
           
           
           print "<td>$value</td>";
       }
          print "</tr>";
   
     }
   
   print "</table>";
   
mysqli_close($con);

?>