<?php

session_start();
//
?>
<html>
<head>
	<title>adCo</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Welcome to adco.com.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="assets/material.min.css">
	<script src="assets/material.min.js"></script>
	<link rel="stylesheet" 
	href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<script src="assets/select/getmdl-select.min.js"></script>
   <link rel="stylesheet" href="assets/select/getmdl-select.min.css">

   <style>
		.demo-card-square.mdl-card 
		{
		 
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
			background:
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

  <?php

if (isset($_SESSION["user_name"]))
{
	$use = $_SESSION["user_name"];
	echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect"id="menu" style="color:white;"> 
		 ' . $use . '
		</button>';

	// echo '<a class="mdl-navigation__link" href"" id="menu" >'.$use.'</a>';

}
else
{
	echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
}

?>
	   
	<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="menu">
	
		<li class="mdl-menu__item"><a href="login.php" class="mdl-menu__item">Logout</a></li>
 
	</ul>
      </nav>
    </div>
  </header>
  
  
<main class="mdl-layout__content">
 <div class="page-content">
  <!-- Your content goes here -->

<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" height:  margin:auto; ">

<?php
				 include 'database.php';
if (isset($_SESSION["user_name"]))
{
	$use = $_SESSION["user_name"];
	if ($use == "admin")
	{
		if (mysqli_connect_errno())
		{
			echo "MySQLi Connection was not established: " . mysqli_connect_error();
		}
		else
		{
			$ya = "INSERT INTO `property` (`property_id`, `category`, `location`, `city`, `district`, `price`, `user_email`) VALUES (NULL, 'rent', NULL, '', '', '', '');";
			if (isset($_POST['district']) && $_POST['district'] != "")
			{
				$get_district = $_POST['district'];
				if (isset($_POST['category']) && $_POST['category'] != "")
				{
					$get_category = $_POST['category'];
					if (isset($_POST['price']) && $_POST['price'] != "")
					{
						$get_price = $_POST['price'];
						if (isset($_POST['area']) && $_POST['area'] != "")
						{
							$get_latitude = $_POST['latitude'];
						if (isset($_POST['latitude']) && $_POST['latitude'] != "")
						{
								$get_longitude = $_POST['longitude'];
						if (isset($_POST['longitude']) && $_POST['longitude'] != "")
						{
							$get_area = $_POST['area'];
							$ya = "INSERT INTO `property` (`property_id`, `category`, `location`, `city`, `district`, `price`, `user_email`,`latitude`, `longitude`) VALUES (NULL, '" . $get_category . "', '" . $get_area . "', '" . $get_district . "', '" . $get_district . "', '" . $get_price . "', '" . $use . "', '" . $get_latitude . "', '" . $get_longitude . "');";
											 include 'database.php';
							if (mysqli_connect_errno())
							{
								echo "MySQLi Connection was not established: " . mysqli_connect_error();
							}
							else
							{
								if (mysqli_query($con, $ya))
								{
									$last_id = mysqli_insert_id($con);
									$dir = "assets/properties/" . $last_id;
									$_SESSION['last_id'] = $last_id;
									if (is_dir($dir) === false)
									{
										mkdir($dir);
									}
									else
									{
										echo 'house added';
									}

									echo 
										'
										<div class="mdl-card__title">
										<h2 class="mdl-card__title-text" style="text-align:center;">  You have successfully added a property<br/>Click below to add images to your property
										</br>
										
										</br>
										</h2>
										</br>
										</div>
									
										<div>
										
										<span class="mdl-layout-title"><a class="mdl-navigation__link" href="upload image.php" style="font-size: 20px; margin-left:30%;">Next</span></a>
					
										</div>
										</div>';
								}
								else
								{
									echo "Error: " . $ya . "<br />" . mysqli_error($con);
								}
							}
						}
						}
						}
					}
				}
			}
			
			else {
					echo 
													'
													<div class="mdl-card__title">
													<h2 class="mdl-card__title-text" style="text-align:center;">Error! Something Went Wrong.Try that Again
													</br>
													
													</br>
													</h2>
													</br>
													</div>
												
													<div>
													
													<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Home</span></a>
								
													</div>
													</div>';
	}
			

			if (isset($_POST['area']) && $_POST['area'] != "")
			{
				$get_area = $_POST['area'];
			}
		}
	} else {
		echo 
										'
										<div class="mdl-card__title">
										<h2 class="mdl-card__title-text" style="text-align:center;">  Please Log In as an Administrator to View this page
										</br>
										
										</br>
										</h2>
										</br>
										</div>
									
										<div>
										
										<span class="mdl-layout-title"><a class="mdl-navigation__link" href="login.php" style="font-size: 20px; margin-left:30%;">Log in</span></a>
					
										</div>
										</div>';
	}
}else 
{
	echo 
										'
										<div class="mdl-card__title">
										<h2 class="mdl-card__title-text" style="text-align:center;">  Please Log In to View this page
										</br>
										
										</br>
										</h2>
										</br>
										</div>
									
										<div>
										
										<span class="mdl-layout-title"><a class="mdl-navigation__link" href="login.php" style="font-size: 20px; margin-left:30%;">Log in</span></a>
					
										</div>
										</div>';
}
?>
 </div>
  
  


</main>
</div>

</body>
</html>