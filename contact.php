<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>adCo</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="Welcome to adco.com." name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/material.min.css" rel="stylesheet">
    <script src="assets/material.min.js">
    </script>
    <link href=
    "https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/select/getmdl-select.min.js">
    </script>
    <link href="assets/select/getmdl-select.min.css" rel="stylesheet">
    
	<style>
        
        body 
        {
            background-color:#EFEFEF;
        }
        ul 
        {   
          overflow: hidden;
        }
        li 
        {   
             float:left;
        }

        .mdl-textfield__input 
        {
            text-align:center;
        }
		.demo-card-wide.mdl-card 
		{
		  margin:10%;
		  margin-top:1%;
		  width: 80%;
		  height:50%;
		  
		}
		.demo-card-wide > .mdl-card__title 
		{
		  color: #fff;
		  height: 150px;
		  background-color: #21a5f7;
		}
		.demo-card-wide > .mdl-card__menu 
		{
		  color: #fff;
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
				
				<span class="mdl-layout-title">
					<a class="mdl-navigation__link" href="index.php" style="font-size: 20px;">AdCo</a>
				</span> 
				
				<!-- Add spacer, to align navigation to the right -->
				
				<div class="mdl-layout-spacer">	</div>
				
				<!-- Navigation -->
				<?php 
						if (isset($_SESSION["user_name"])) 
						{
							$use = $_SESSION["user_name"];
							echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect"id="menu" style="color:white;"> 
							'.$use.'
							</button>';
							//echo '<a class="mdl-navigation__link" href"" id="menu" >'.$use.'</a>';
								
						}	else 
						{
								 
							echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
						
						}
				?>
				
			</div>
			
			<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect">
			
				<li class="mdl-menu__item">
					<a class="mdl-menu__item" href="login.php">Logout</a>
				</li>
				
			</ul>
			
		</header>
		
		<main class="mdl-layout__content">
			
			<div class="page-content">
		
				<div class="demo-card-wide mdl-card mdl-shadow--2dp">
					
					<div class="mdl-card__supporting-text" >
					
						<p style="font-size:15pt;">Do you have any questions or comments?  <br/>
							Sales & Advertising: Banner Advertising, proposals?<br/>
							<span> email us at johnloga@adcomw.com or simply click 
							<a class="mdl-list__item-secondary-action" href="mailto:johnloga@adcomw.com">
							<i class="material-icons">email</i></a></span>

							<br/>Here's our phone number if you'd like to reach us <br/>
							<span> Phone : +265 888 714426
								<a class="mdl-list__item-secondary-action" href="tel: +265 888 714426"><i class="material-icons">call</i></a>
							</span>

							<br/>Please note that we do not deal with the properties directly, 
							the contact details for the person advertising the property are provided by the administritaor of the website.
						</p>
						
					</div>
								
				</div>
								 						
			</div>
			
		</main>
    </div>
</body>
</html>