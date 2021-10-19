<!--Author Details: 

	Name: Nandita Dhanda
	Student ID: SUKD1702275
	Email address: nandita.nd64@gmail.com

	Course: Web Project
	Course Code: TCS3224
	Instructor: Dr Ahmad Faiz Bin Ghazali

	Title: Individual Assignment - ABC Tuition Centre
	Due Date: 14/04/2020-->

<!--Please ensure that you have a working internet connection while reviewing this website otherwise some elements may not display or work properly-->

<?php require_once('server.php');?> <!--server.php file for mandatory server side functionalities-->

<!DOCTYPE html>
<html>
<head>
	<!--meta tags-->
	<meta charset="utf-8">
	<meta name="description" content="ABC Tuition Centre is Malaysia's number 1 academic learning institute with over 5000 students spanned across our 11 different centres">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title><?= isset($PageTitle) ? $PageTitle : "ABC Tuition Centre"?></title> <!--Page title function implemented to implement different title for each page from $PageTitle variable-->
	<link rel="icon" type="image/png" href="images/favicon.png"> <!--favicon-->

     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> <!--Import Google Icon Font--> 
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/> <!--materialize css-->

    <link rel="stylesheet" href="css/font-awesome.min.css"> <!--font awesome icons-->
	<link rel="stylesheet" type="text/css" href="css/style.css"> <!--stylesheet-->

	<script src="js/jquery.js"></script> <!--jquery-->
    <script src="js/materialize.min.js"></script>	<!--materialize.js file-->	
</head>
<body>
	<!--page header-->
	<header>
		<nav>
		    <div class="nav-wrapper">
		      <a href="homepage.php" class="brand-logo"><img src="images/logo.png" alt="ABC Tuition Centre"></a> <!--logo-->
		      <ul class="right ">
		      	<?php
		      		//if user is not logged in
		      		if(!isset($_SESSION['username'])){ ?>
						<li><a href="sign-in.php"  class="waves-effect waves-light btn">Sign In</a></li>
		        		<li><a href="register.php"  class="waves-effect waves-light btn">Register</a></li>

		      	<?php	} //end if
		      		else{ ?>

		      			<!--if user is logged in-->

		      			<!--username of user - stored in session retrieved from server.php-->
		      			<li><h6 class="color-white margin-0">Welcome: <a href="index.php"><i class="fas fa-user fa-sm "></i> <?php echo $_SESSION['accName'];?></a></h6></li>
		      			
		      			<!--logout function-->
		        		<li>
		        			<form method="get" action="index.php">
		        				<button class="waves-effect waves-light btn btn-icon" title="Sign Out" type="submit" name="logout" id="logout"><i class="fas icon fa-xs fa-sign-out-alt"></i></button>
		        			</form>	
		        		</li>		  					        			        			
		      	<?php	} //end else - checking if user is logged in ?>	        
		      </ul>
		    </div>
		  </nav>		
	</header> <!--header end-->