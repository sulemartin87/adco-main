<?php

session_start();

?>
<html>
<head>
	<title>adCo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Welcome to adco.com.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/material.min.css">
	<script src="assets/material.min.js"></script>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="assets/select/getmdl-select.min.js"></script>
   <link rel="stylesheet" href="assets/select/getmdl-select.min.css">
   <style>
		.demo-card-square.mdl-card 
		{
		  width: 400px;
		  height: 400px;
		  margin:auto;
		  margin-top:1%;
		  
		}
		.demo-card-square > .mdl-card__title 
		{
		  color: #fff;
		}

		body 
		{
			background-color:#EFEFEF;
		}
		ul 
		{	
		  overflow: auto;
		}
		li 
		{	
			 float:left;
		}

		.mdl-textfield__input 
		{
			text-align:center;
		}
		.demo-card-square > .mdl-card__title 
		{
			width:100%;
			color: #009688;
		}
		.mdl-layout__drawer
		{
			background: rgb(217, 245, 249);
		}
		
		#view-source 
		{
		  position: fixed;
		  display: block;
		  right: 0;
		  bottom: 0;
		  margin-right: 40px;
		  margin-bottom: 40px;
		  z-index: 900;
		}

	</style>
  
</head>

<body>

<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    
	<div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px;">AdCo</span></a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">

	  <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="menu">
	  <li class="mdl-menu__item"><a href="login.php" class="mdl-menu__item">Logout</a></li>
	  </ul>
     
	 </nav>
    
	</div>
	
  </header>
  
  

<main class="mdl-layout__content">

<div class="page-content">
  <!-- Your content goes here -->
  
<?php
// establishing the MySQLi connection
if(isset($_SESSION['name']))
{
 if(isset($_SESSION['email']))
	{
	   if(isset($_SESSION['pass']))
		{
	   
			include 'database.php';
			
			if (mysqli_connect_errno())

			{
				echo "MySQLi Connection was not established: " . mysqli_connect_error();
			}

			else
			{
			
				echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" height: 500px; margin:auto;">
				<div class="mdl-card__title">
				<h2 class="mdl-card__title-text">  Thank You for joining Adco
				</br>
				</br>
				</br>
				click the button below to find your next home
				</br>
				</h2>
				</br>
				</div>
				</br>
				</br>
				<div>
				<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Go Home</span></a>
				</div>
				</div>';

				if (mysqli_query($con, $sq)) 
				{
					$username = $_SESSION['email'];
					unset($_SESSION['email']);
					unset($_SESSION['name']);
					unset($_SESSION['pass']);
					$_SESSION['user_name']= $username;
				} 
				else 
				{
					unset($_SESSION['email']);
					unset($_SESSION['name']);
					unset($_SESSION['pass']);
					echo "Error: " . $ql . "<br>" . mysqli_error($con);
				}
				
				
		
			}
		}
	}
}
else 
{
	echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" height: 500px; margin:auto;">
			<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">  
			</br>
			</br>
			</br>
			Sorry. Something went wrong 
			</br>
			</h2>
			</br>
			</div>
			</br>
			</br>
			<div>
			<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Go Home</span></a>
			</div>
			</div>';
  
}
 
?>
 
 </div>
 
</main>
</div>

</body>
</html>