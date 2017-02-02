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
		 
		  margin:auto;
		  margin-top:1%;
		  padding:1%;
		
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
			 #46B6AC;
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

<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">
	  
		<a href="index.php" class="site-logo-link" rel="home" itemprop="url"><img width="75" height="64" src="assets/logo.jpg" 
		class="site-logo attachment-large" alt="logo-mark" data-size="large" itemprop="logo"></a>ADCO
	  
	  </span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
	  <?php 
		  if (isset($_SESSION["user_name"])) 
		  {
				$use = $_SESSION["user_name"];
				echo 
				'<button class="mdl-button mdl-js-button mdl-js-ripple-effect"id="menu" style="color:white;"> 
				'.$use.'
				</button>';
				if ($use == "admin") 
				{
					
				echo '	
				<ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="menu">
		
					<li class="mdl-menu__item"><a href="login.php" class="mdl-menu__item">Logout</a></li>
					<li class="mdl-menu__item"><a href="add_property.php" class="mdl-menu__item">add property</a></li>
					<li class="mdl-menu__item"><a href="admin.php" class="mdl-menu__item">administrator page</a></li>
		
				</ul>';
					
				}
				else 
				{
					echo '
					
					<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="menu">
		
						<li class="mdl-menu__item"><a href="login.php" class="mdl-menu__item">Logout</a></li>
	 
					</ul> 
					';
				}
		 }else 
		 {
			 
			echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
		 }
     ?>
				  <a class="mdl-navigation__link" href="contact.php">Contact Us</a>

      </nav>
    </div>
  </header>
  
  
<main class="mdl-layout__content" style="background-color:white;

background-image: url('assets/logo1.png');
background-repeat: no-repeat;
background-position: center;">

<div class="page-content" >
  <!-- Your content goes here -->

	<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" overflow:auto; ">
	  
		<form action="search.php" method="GET">
		</br>
		<p style="text-align:center; ;"><strong>Search For Properties</strong></p>
		<div class="mdl-layout-spacer"></div>
		</br>
	   
		<p style="text-align:center; color:rgb(0,150,136);">Select District </p>

		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
		<input class="mdl-textfield__input" type="text" id="district"  readonly tabIndex="-1" name="district">
		
		<label for="district">
		 <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
		</label>
		
		<label for="district" class="mdl-textfield__label" style="text-align:center;" ></label>
		<ul for="district" class="mdl-menu mdl-menu--bottom-left mdl-js-menu" style="overflow:auto; position:absolute;">
			<li class="mdl-menu__item">Balaka</li>
			<li class="mdl-menu__item">Blantyre</li>
			<li class="mdl-menu__item">Chikwawa</li>
			<li class="mdl-menu__item">Chiradzulu</li>
			<li class="mdl-menu__item">Chitipa</li>
			<li class="mdl-menu__item">Dedza</li>
			<li class="mdl-menu__item">Dowa</li>
			<li class="mdl-menu__item">Karonga</li>
			<li class="mdl-menu__item">Kasungu</li>
			<li class="mdl-menu__item">Likoma</li>
			<li class="mdl-menu__item">Lilongwe</li>
			<li class="mdl-menu__item">Machinga</li>
			<li class="mdl-menu__item">Mangochi</li>
			<li class="mdl-menu__item">Mchinji</li>
			<li class="mdl-menu__item">Mulanje</li>
			<li class="mdl-menu__item">Mwanza</li>
			<li class="mdl-menu__item">Mzimba</li>
			<li class="mdl-menu__item">Neno</li>
			<li class="mdl-menu__item">Nkhata Bay</li>
			<li class="mdl-menu__item">Nkhotakota</li>
			<li class="mdl-menu__item">Nsanje</li>
			<li class="mdl-menu__item">Ntcheu</li>
			<li class="mdl-menu__item">Ntchisi</li>
			<li class="mdl-menu__item">Phalombe</li>
			<li class="mdl-menu__item">Rumphi</li>
			<li class="mdl-menu__item">Salima</li>
			<li class="mdl-menu__item">Thyolo</li>
			<li class="mdl-menu__item">Zomba</li>		
		</ul>
		</div>
	
		<p style="text-align:center; color:rgb(0,150,136);">Select Category </p>
		
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
			
			<input class="mdl-textfield__input" type="text" id="category"  readonly tabIndex="-1" name="category">
			
			<label for="category">
				<i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
			</label>
			
			<label for="category" class="mdl-textfield__label" style="text-align:center;"></label>
			
			<ul for="category" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
				<li class="mdl-menu__item">Sale</li>
				<li class="mdl-menu__item">Rent</li>
				<li class="mdl-menu__item">Hostel</li>
				<li class="mdl-menu__item">Commercial</li>
				<li class="mdl-menu__item">Plot</li>
				<li class="mdl-menu__item">Leisure</li>
			</ul>
		
		</div>
		
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " style="width:40%; float:left;"> 
		  
		  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="min_price" name= "min_price" >
		  <label class="mdl-textfield__label" for="sample2">Min Price</label>
		  <span class="mdl-textfield__error">Input is not a number!</span>
		
		</div>
		 
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:40%; float:right;">
		  
		  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="max_price" name= "max_price">
		  <label class="mdl-textfield__label" for="sample2">Max Price</label>
		  <span class="mdl-textfield__error">Input is not a number!</span>
		
		</div>
		
		<div class="mdl-layout-spacer"></div>
		
		<!-- haaaacckkk -->
		</br>
		</br>
		</br>
		</br>
		</br>
		<!-- not proud, but it works-->
		
		<div class="mdl-card__actions mdl-card--border">
		
		<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="search" value="Search" style="width:100%;"/>

		</form>
		
		</div>
	  
	</div>
	 
	<pre>

</div>

</main>

</div>

</body>
</html>