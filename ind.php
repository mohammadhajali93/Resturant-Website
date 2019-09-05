<?php

// (@include("Login.php")) or die ("File Not Exist");

// if(isset($_SESSION['login_user'])){
// header("location: About.php");
// }
?>

<!DOCTYPE html>
<html>
   <head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Log in</title>
		
		<link rel = "stylesheet" href = "css/bootstrap.min.css"/>
		<link rel = "stylesheet" href = "css/fontawesome.min.css"/>
		<link rel = "stylesheet" href = "style.css"/>
		
		<script src = "js/bootstrap.min.js"></script>
		<script src = "js/jquery.min.js"></script>
		
	
		
   </head>
   <body style = "background-image:url(a33.jpg)">
   
   
   <!--start navbar-->
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-fixed-top"role = "navigation">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
	
	<li class="nav-item">
        <a class="nav-link" href="http://track-kids.com/Mo/res/home.php">Home</a>
      </li>
	  
	  <li class="nav-item"><a class="nav-link" href="#"></a></li><li class="nav-item"><a class="nav-link" href="#"></a></li>
	
      <li class="nav-item">
        <a class="nav-link active" href="http://track-kids.com/Mo/res/ind.php">Login</a>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<!-------------------------------------------------------------------->
<!-- end navbar-->

<!-------------------------------------------------------------------->


<!--start grid system-->
   	    
<div align="center">
<h1 style = "font-size:3.8rem;font-weight:700;latter-spacing:.3rem;
             text-shadow:.1rem .1rem .8rem black;padding-bottom:1rem;color:white"> Welcome to Resturants</h1><br>

<form action="Login.php" method="post">

<input style="display: block;
    width: 30%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="name" name="Name" placeholder="username" type="text">
    
<br><br>
<input style="display: block;
    width: 30%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    " id="Password" name="Password" placeholder="**********" type="password">

<br><br>
<select style="display: block;
    width: 30%;" class="form-control mr-sm-2" name = "Tpye">
<option>Select</option>
<option>Manager</option>
<option>chef1</option>
<option>chef2</option>
</select>
<br><br>
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
    transition: color .15s" name="submit" type="submit" value=" Login ">

<span><?php echo $error; ?></span>
</form>

</div>
	
	<!--end grid system-->
<!-------------------------------------------------------------------->
	

   </body>
</html>
