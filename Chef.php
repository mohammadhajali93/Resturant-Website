<!DOCTYPE html>
<html>
   <head>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Chef</title>
		
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
        <a class="nav-link" href="http://track-kids.com/Mo/res/home.php">Home</a>
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
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-------------------------------------------------------------------->
<!-- end navbar-->
<?php
 	$con = mysqli_connect("localhost","trackkid_hasan","}xosPF!7JM+P","trackkid_my_database");
 	$db = mysqli_select_db($con, "trackkid_my_database");
 	

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
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="a2.jpg" alt="Checken" ><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 style = "font-weight:bold;" class="text-success">Prosted Checken</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 5.5$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Meets </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : 3 pieces  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 500gm  </li>
           </ul>
           
   <!--        <form  method="post"  action=""  style="  float:right; margin-top:5px;" >-->
				
			<!--	<input style="color:black;" type="submit" name="submit1" value="SEARCH DEVICE " class="signup-btn">-->
	
			<!--</form>-->
			
			<form action="ins1.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
    
     </div>
     </div>

</div>
</div>
</Section>
</div>
   
   
   <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="download.jpg" alt="Checken" width = "213"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">Grilled chicken</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 4.0$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Meets </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : 0.5 chicken  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 500gm  </li>
           </ul>
           <form action="ins2.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
    <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="a3.jpg" alt="Checken" width = "213"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">Pizza</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 4.5$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : pastry </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : 1 piece  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 250gm  </li>
           </ul>
           <form action="ins3.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
    <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="fish.jpg" alt="Checken" width = "232"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">fish</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 8.5$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Meets </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : 3 piece  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 500gm  </li>
           </ul>
           <form action="ins4.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
    <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="a1.jpg" alt="Checken" ><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">meet</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 3.5$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Meets </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : 1 piece  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 150gm  </li>
           </ul>
           <form action="ins5.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
  <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="coffe.jpg" alt="Checken" width = "232"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">coffe</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 0.5$</p>
           <ul class="list-unstyled">
              <li style = "font-weight:bold;color:#1F085C;"> Type : Drinks </li>
               <li> Amount : One cup  </li>
               <li> The weight : 250 ml  </li>
           </ul>
           <form action="ins6.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
   <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="bibsi.jpg" alt="Checken" width = "250"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">bibsi</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 0.30$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Drinks </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : One cup  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 250 ml  </li>
           </ul>
           <form action="ins7.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
    <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="water.jpg" alt="Checken" width = "185"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">water</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 0.25$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Drinks </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : One cup  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 250 ml  </li>
           </ul>
           <form action="ins8.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>
    <div class = "col-lg-4 col-md-6 col-sm-12">
       <Section class="price-table text-center">
           <div class="container">
       <img class="img-responsive" src="fruit.png" alt="Checken" width = "280"><br>
       <div class="row">
           
           <div class = "col-lg-12 col-md-12 col-sm-12">
           <div class = "price-box">
           <h2 class="text-success">fruit juice</h2>
           <p style = "font-size:60px;font-weight:bold;color:#4704FD;border:1px solid #FF5252"> 0.75$</p>
           <ul class="list-unstyled">
               <li style = "font-weight:bold;color:#1F085C;"> Type : Drinks </li>
               <li style = "font-weight:bold;color:#1F085C;"> Amount : One cup  </li>
               <li style = "font-weight:bold;color:#1F085C;"> The weight : 250 ml  </li>
           </ul>
           <form action="ins9.php" method="post">
				
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
    font-size: 1.5rem;
    font-weight: bold;
    line-height: 1.5;
    border-radius: 1rem;
    background:blue;
    color:white;
    transition: color .15s" name="submit" type="submit" value=" SELECT ">
				
			</form>
     </div>
     </div>

</div>
</div>
</Section>
</div>

	</div>	
	</div> 
	
   </body>
</html>