<?php
// Search

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");

$search = $_POST["search"];

// if($search == ""){ 
// echo "You Didn't enter a text to search for !"; 
// }

//  else { 
    $res=mysqli_query($con, "select * from employee where Name like '%$search%'");
   $row=mysqli_fetch_assoc($res);

   $ID_Employee=$row["ID_Employee"];
   $Name=$row["Name"];
   $Tpye=$row["Tpye"];
   $Password=$row["Password"];   
    $Salary=$row["Salary"]; 
    $Address=$row["Address"]; 
    $Pone_Number=$row["Pone_Number"]; 
    
    
    // echo $ID_Employee;
    
//   $mysqle =  "SELECT * FROM employee WHERE  Name LIKE '%$search%'";
//  $result = mysqli_query($con,$mysqle);
// $response = array();

//  if(mysqli_num_rows($result)!=0){

//  while($row=mysqli_fetch_array($result)){
    
//     array_push($response , array('id_user'=>$row[0]));
//     }

//  echo json_encode($response);



// $search = $db->query("SELECT * FROM 'employee' WHERE Name LIKE '%$search%'"); 
// $num = $search->num_rows; 
// if($num != 0){ 
// $row = $search->fetch_object(); 

// }
// else{ 
// echo "There is no results for this seach !!!<br>Try Another Search Words"; 
    
 //} 
//}


// mysqli_close($idd)


?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset = "utf-8">
		<title>search</title>
</head>
<body>
   <form action="" method="post"> 
      <input class="form-control mr-sm-2" name="search" id="search"  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
<h1>student id  : <?php echo $ID_Employee; ?>             <br/>
student name:<?php echo $Name; ?>    <br/>
student branch:<?php echo $stbranch; ?>   
</h1>


                                 
</body>
</html>