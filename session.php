<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database");

// Selecting Database
$db = mysqli_select_db($con, "trackkid_my_database");

session_start();// Starting Session

// Storing Session
$user_check=$_SESSION['login_user'];

// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con,"select Name from employee where Name='$user_check'");

$row = mysqli_fetch_assoc($ses_sql);

$login_session =$row['Name'];

if(!isset($login_session)){
mysqli_close($con); // Closing Connection
header('Location: ind.php'); // Redirecting To Home Page
}
?>