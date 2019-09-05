<?php
session_start(); // Starting Session

// $error=''; // Variable To Store Error Message

// if (isset($_POST['submit'])) {
// if (empty($_POST['Name']) || empty($_POST['Password']) ) {
// $error = "Name or Password is invalid";
// }
// else
// {
    
// // Define $username and $password
// $Name=$_POST['Name'];
// $Password=$_POST['Password'];
// //$Type=$_POST['Type'];
// // Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database");

// // Selecting Database
// $db = mysqli_select_db($con,"trackkid_my_database");

// // SQL query to fetch information of registerd users and finds user match.
// $query = mysqli_query($con,"select * from employee where  Name='$Name' and Password='$Password' " );
//  $row=mysqli_fetch_assoc($query);
//  $type1=$row['Tpye'];

// if ($type1 == 'chef1') {

// header("location: About.php"); // Redirecting To Other Page

// } else if ($type1 == 'chef2'){
    
//     header("location: Chef.php");
// //$error = "Name or Password is invalid";
// }
// else if ($type1 == 'Manager'){
    
//     header("location: Manager.php");
// //$error = "Name or Password is invalid";
// }
// mysqli_close($con); // Closing Connection
// }
// }



$Name=$_POST['Name'];
$Password=$_POST['Password'];
//$Type=$_POST['Type'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database");

// Selecting Database
$db = mysqli_select_db($con,"trackkid_my_database");

// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($con,"select * from employee where  Name='$Name' and Password='$Password' " );
 $row=mysqli_fetch_assoc($query);
 $ID_Employee=$row['ID_Employee'];




	if(isset($_POST['Name'])){
		
$Name =  mysqli_real_escape_string($con,$_POST['Name']) ;
$Password =  mysqli_real_escape_string($con,$_POST['Password']) ;
$query = mysqli_query($con,"select * from employee where  Name='$Name' and Password='$Password' " );

if(mysqli_num_rows($query)>0){
	$user = mysqli_fetch_array($query);
	
	$_SESSION['ID_Employee'] = $user['ID_Employee'] ;
	$_SESSION['Tpye'] = $user['Tpye'] ;
	
	if($user['Tpye']=='Manager'){
		$redirect = "Manager.php" ; 
		
	}elseif($user['Tpye']=='chef 1'){
		$redirect = "Chef.php" ; 
	
	}elseif($user['Tpye']=='chef 2'){
		$redirect = "Chef.php" ; 
	
	}else{
		$redirect = "Login.php" ; 
	}
	
	?>
<div>

 
 <script>
	window.location="<?php echo $redirect ; ?>" ; 

	</script>
 
</div>
	<?php
}else{
	?>
	<div class="alert alert-danger">
اسم المستخدم أو كلمة المرور غير صحيحة 
</div>
	<?php
}
	}
 mysqli_close($con); // Closing Connection


?>

