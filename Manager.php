<?php
// Search
//session_start(); // Starting Session

$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database")or die ("Could not connect");

//$ID_Employee=$_SESSION['ID_Employee']  ;
// echo $ID_Employee;

// $ses_sql=mysqli_query($con,"select ID_Employee from employee where ID_Employee='$ID_Employee'");
// $row = mysqli_fetch_assoc($ses_sql);
// $id =$row['ID_Employee'];
// $_SESSION['id']=$id;

if(!empty($_POST["search"])){
$search = $_POST["search"];

if($search == ""){ 
 echo "You Didn't enter a text to search for !"; 
 }

  else { 
    $res=mysqli_query($con, "select * from employee where Name like '%$search%'");
   $row=mysqli_fetch_assoc($res);

   $ID_Employee=$row["ID_Employee"];
   $Name=$row["Name"];
   $Tpye=$row["Tpye"];
   $Password=$row["Password"];   
    $Salary=$row["Salary"]; 
    $Address=$row["Address"]; 
    $Pone_Number=$row["Pone_Number"]; 
    $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
    
    
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
}

}
 mysqli_close($con)
?>

<!DOCTYPE html>
<html>
   <head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Manager</title>
		
		<link rel = "stylesheet" href = "css/bootstrap.min.css"/>
		<link rel = "stylesheet" href = "css/fontawesome.min.css"/>
		<link rel = "stylesheet" href = "style.css"/>
		
		<script src = "js/bootstrap.min.js"></script>
		<script src = "js/jquery.min.js"></script>
		
		
   </head>
   <body>
   
   <!--start navbar-->
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top"role = "navigation">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
	<li class="nav-item">
        <a class="nav-link active" href="http://track-kids.com/Mo/res/home.php">Home</a>
      </li>
	
	<li class="nav-item"><a class="nav-link" href="#"></a></li><li class="nav-item"><a class="nav-link" href="#"></a></li>
	
      <li class="nav-item">
        <a class="nav-link" href="http://track-kids.com/Mo/res/ind.php">Login</a>
      </li>
	  
	<li class="nav-item"><a class="nav-link" href="#"></a></li><li class="nav-item"><a class="nav-link" href="#"></a></li>
	  
      <li class="nav-item">
        <a class="nav-link" href="http://track-kids.com/Mo/res/offers.php">Offers</a>
      </li>
	  
	<li class="nav-item"><a class="nav-link" href="#"></a></li><li class="nav-item"><a class="nav-link" href="#"></a></li>
	  
      <li class="nav-item">
        <a class="nav-link" href="http://track-kids.com/Mo/res/About.php">About</a>
      </li>
	  
    </ul>
    
    <!--<form class="form-inline my-2 my-lg-0">-->
    <form class="form-inline my-2 my-lg-0 action="" method="post"> 
      <input class="form-control mr-sm-2" name="search" id="search"  type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    
  </div>
</nav>

<br>

<!--End navbar----------------------------------------------------------------------------------------------->

<?php
 	$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database");
 	$db = mysqli_select_db($con, "trackkid_my_database");

      //$ID_Employee=$row["ID_Employee"]; 
      

 $ses_sql=mysqli_query($con,"select image from employee ");

 	$row = mysqli_fetch_assoc($ses_sql);
echo '<div align="center">';
   echo "<tr>";
  
  

echo '<td><img width=200 height=200 src="data:image/jpeg;base64,' 
   .base64_encode( $row['image']) .'"</td>';
   
echo "</tr>"; 
  echo "</div>";
  
 ?>
 <br>

   <div class="container">     
      <div class="row">  
   
   <div class = "col-lg-4 col-md-6 col-sm-12">
<div align="center">
<form action="insert.php" method="post"  enctype="multipart/form-data">

<input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="ID_Employee" placeholder="ID_Employee" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="Name" placeholder="username" type="text"><br>
    
    <select style="display: block;width: 100%;" class="form-control mr-sm-2" name = "Tpye">
<option>Select</option>
<option>Manager</option>
<option>chef1</option>
<option>chef2</option>
<option>Employee</option>
</select>
<br>
<input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Password" placeholder="**********" type="password"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="Salary" placeholder="Salary" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Address" placeholder="Address" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Pone_Number" placeholder="Pone_Number" type="text"><br>
    
    <input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 0.5rem;
    background:green;
    color:white;
    transition: color .15s" type="file" name="image"><br><br>

<input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 2rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" Register ">
</form>

</div>
</div>

<!--update-------------------------------------------------------------------------------------------------------->
   
   <div class = "col-lg-4 col-md-6 col-sm-12">
   
   <div align="center">

<form action="update.php" method="post">

<input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="ID_Employee" placeholder="ID_Employee" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="Name" placeholder="username" type="text"><br>
    
    <select style="display: block;width: 100%;" class="form-control mr-sm-2" name = "Tpye">
<option>Select</option>
<option>Manager</option>
<option>chef 1</option>
<option>chef 2</option>
</select>
<br>
<input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Password" placeholder="**********" type="password"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="Salary" placeholder="Salary" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Address" placeholder="Address" type="text"><br>
    
    <input style="display: block;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Pone_Number" placeholder="Pone_Number" type="text"><br>
    
    <input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 1rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 0.5rem;
    background:green;
    color:white;
    transition: color .15s" type="file" name="image"><br><br>

<input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 2rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:gold;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" Update !! ">

</form>
</div>
</div>
   
   <!-- Search ------------------------------------------------------------------------------------>
    <div class = "col-lg-4 col-md-6 col-sm-12">
   <?php 
 print "<table border=2 cellpadding=3 cellspacing=0 style='color:blue; background:yellow;font-weight:bold;
                                                           border:3px solid #0000FF;width:100%'>";
  
   print "<tr> <td> $ID_Employee </td>   <td> $Name </td>   <td> $Tpye </td>   <td> $Password </td>
                  <td> $Salary </td>   <td> $Address </td>   <td> $Pone_Number </td>  <td> $image </td> </tr>";
   
 
   for ($i=0;$i < mysqli_num_rows($res);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($res);
       foreach ($row as $value) {
           
           
           print "<td>$value</td>";
       }
          print "</tr>\n";
   
   
     }
   
   print "</table>";
?>
</div></div></div><br><hr><br>

<!-- Delete ------------------------------------------------------------------------------------>
   
   <div class = "col-lg-12 col-md-6 col-sm-12">
   <div align="center">
  <form action="delete.php" method="post">
<input style="display: block;
    width: 50%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #2E2EFE;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="ID_Employee" placeholder="ID_Employee" type="text"><br>
    
    <input style="display: block;
    width: 50%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #2E2EFE;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;"
    id="name" name="Name" placeholder="username" type="text"><br>     

<input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 2rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:red;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" Delete ">
    </form>
</div>
</div>
   <br>
	
	<!--end grid1 system--><hr>
<!-- Show --------------------------------------------------------------------------------------------------->  

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
?>
 <div align="center">

<input style = "display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: .375rem .75rem;
    font-size: 2rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:gold;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" View ">
    
</div>
<br>
<?php $res=mysqli_query($con, "select * from employee");

   print "<table class='table table-bordered'> ";
  
   print "<tr class='table-info'> <td> ID_Employee </td><td> Name </td><td> Tpye </td>
               <td> Password </td> <td> Salary </td> <td> Address </td>
               <td> Pone_Number </td> <td> Image </td> </tr>\n";
   
   for ($i=0;$i < mysqli_num_rows($res);$i++) {
       print "<tr>";

       $row = mysqli_fetch_row($res);
       
           echo "<td>";
           echo(htmlentities($row[0]));
           echo("</td>");
           
           echo "<td>";
           echo(htmlentities($row[1]));
           echo("</td><td>");  
       
           echo(htmlentities($row[2]));
           echo("</td><td>");  
         
           echo(htmlentities($row[3]));
           echo("</td><td>");
    
           echo(htmlentities($row[4]));
           echo("</td><td>");
    
           echo(htmlentities($row[5]));
           echo("</td><td>");
    
           echo(htmlentities($row[6]));
           echo("</td>");
  
           echo '<td><img style="border-radius:50%;" width=100 height=100 src="data:image/jpeg;base64,' 
           .base64_encode( $row[7]) .'"</td>';
  
 print "</tr>\n";

     }
   
   print "</table>";
?>
<!----------------------------------------------------------------------------------------------------------->
<br>


</body>
</html>
