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
   <link rel="stylesheet" href="assets/star.css" />
 <!--<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'>!-->

   <style>
		.demo-card-square.mdl-card 
		{
	
		 
		  
		  margin:1%;
		  margin-right:1%;
		  
			
		  
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

		h2 
		{
				font-weight: 300;
				margin: 4vh 4vw;
				letter-spacing: 3px;
				color: grey;
				text-transform: uppercase;
		}

		.demo-btn 
		{
		 display: inline-block;
				margin: 0 2.5px 4vh 2.5px;
				text-decoration: none;
				color: grey;
				padding: 15px;
				line-height: 1;
				min-width: 140px;
				background: rgba(0,0,0, 0.07);
				border-radius: 6px;
			}

			.demo-btn:hover 
			{
				background: rgba(0,0,0,0.12);
			}

			@media (max-width: 640px) 
			{
				.demo-btn 
				{
					min-width: 0;
					font-size: 14px;
				}
			}
	</style>
  
</head>

<body>

<!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header  mdl-layout--fixed-tabs" >
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
}
else
{
	echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
}

?>
      </nav>

	  
	<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="menu">
	
		<li class="mdl-menu__item"><a href="login.php" class="mdl-menu__item">Logout</a></li>
	<?php

if (isset($_GET['property_id']))
{
	if (isset($_SESSION["location"]))
	{
		$get_location = $_SESSION["location"];
		$_SESSION["property_id"] = $_GET['property_id'];
	}
}

?>
	</ul>

	

    </div>
	  <!-- Tabs -->
    <div class="mdl-layout__tab-bar mdl-js-ripple-effect" style="height:40px;">
     
      <a href="#fixed-tab-1" class="mdl-layout__tab is-active">Information</a>
	   
      <a href="#fixed-tab-2" class="mdl-layout__tab">View Map</a>
      <a href="#fixed-tab-3" class="mdl-layout__tab">Area Reviews</a>
   
	</div>
  </header>

  
<main class="mdl-layout__content">

 <div class="page-content">
  <!-- Your content goes here -->
      <section class="mdl-layout__tab-panel is-active" id="fixed-tab-1">
      <div class="page-content"><!-- Your content goes here --> 
	  
	  <div class="demo-card-square mdl-card mdl-shadow--2dp" style="width:98%;">
	  <div>
		
<?php
include 'database.php';

if (mysqli_connect_errno())
{
	echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
else
{
	if (isset($_GET['property_id']))
	{
		$get_prop = $_GET['property_id'];
		$_SESSION["property_id"] = $_GET['property_id'];
		$sel = "select * from property where property_id=$get_prop";
		$run_user = mysqli_query($con, $sel);
		while ($row = mysqli_fetch_assoc($run_user))
		{
			
			if (mysqli_num_rows($run_user) > 0)
			{
				
				
				if ($row["category"] == "rent")
				{
					$category = "per month";
				}
				else
				{
					$category = "";
				}
				if ($row["latitude"] == "")
				{
					
				}else {
					$_SESSION["latitude"] = $row["latitude"] ;
				 $_SESSION["longitude"] = $row["longitude"] ;
				}
				

				echo '<div class="mdl-card__supporting-text" style="color:rgb(0,150,136); font-size:24px;">';
				echo 'Area: ' . $row["location"] . ' ';
				$_SESSION["location"] = $row["location"];
				echo ' </br></br>K' . $row["price"] . ' ' . $category . ' </div>';
			}
		}
	}
	else
	{

		// echo "<p> select property</p>";

	}
}


echo '	<div class="mdl-card__supporting-text">';


if (isset($get_prop))
{
	$filename = "assets/properties/" . $get_prop . "";
}
else
{
	$filename = "";
}

if (file_exists($filename))
{
	if (isset($_GET['property_id']))
	{
		$_SESSION["file_name"] = $filename;
		$get_prop = $_GET['property_id'];
		$parser = xml_parser_create();
		function char($parser, $data)
		{
			echo $data;
		}

		xml_set_character_data_handler($parser, "char");
		$filename = "assets/properties/" . $get_prop . "/test.xml";
		if (file_exists($filename))
		{
			$fp = fopen("assets/properties/" . $get_prop . "/test.xml", "r");
			while ($data = fread($fp, 4096))
			{
				xml_parse($parser, $data, feof($fp)) or die(sprintf("XML Error: %s at line %d", xml_error_string(xml_get_error_code($parser)) , xml_get_current_line_number($parser)));
			}

			xml_parser_free($parser);
		}
		else
		{
			echo "No description has been added for this property";
			if (isset($_SESSION["user_name"]))
			{
				$use = $_SESSION["user_name"];
				if ($use == "admin")
				{
					if (isset($_SESSION['last_id']))
					{
						unset($_SESSION['last_id']);
						$_SESSION['last_id'] = $_GET['property_id'];
						echo '<span class="mdl-layout-title"><a class="mdl-navigation__link" href="text summary.php" style="font-size: 20px; margin-left:30%;">Add a description</span></a>';
					}
					else
					{
						$_SESSION['last_id'] = $_GET['property_id'];
						echo '<span class="mdl-layout-title"><a class="mdl-navigation__link" href="text summary.php" style="font-size: 20px; margin-left:30%;">Add a description</span></a>';
					}
				}
			}
		}
	}

	echo '
		  </div>
		  <div class="mdl-card__actions mdl-card--border">
			<!--<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="mailto:johnloga@adcomw.com?Subject=Enqiury" target="_top">-->
			 <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="contact.php" target="_top">
			 Get in contact now
			</a>
		  </div>
		</div>
	  </div>
	  <div>';
	echo '  <div>
    </section>
	<section class="mdl-layout__tab-panel" id="fixed-tab-2">
      ';
	  
	  $_SESSION["longitude"];
	  if (isset($_SESSION["latitude"]))
			{
				echo' <div class="page-content"><!-- Your content goes here -->
	  	<div class="demo-card-square mdl-card mdl-shadow--4dp" id="map" style="width:98%; height:45%; margin:1%;">  </div>  
	  </div>';
	  echo"	  		 <script>
      var map;
	  var myLatLng =  {lat: " .$_SESSION["latitude"].", lng:  " .$_SESSION["longitude"]."};
      function initMap() 
	  {
        map = new google.maps.Map(document.getElementById('map'), 
		{
          center: {lat:" .$_SESSION["latitude"].", lng: " .$_SESSION["longitude"]."},
		  
          zoom: 12
        });
		
		 var marker = new google.maps.Marker
		 ({
			position: myLatLng,
			map: map,
			title: '".$_SESSION["location"]."'
		});
      }
    </script>";
  echo '  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBi5cB7DJMEzwxplLVv6B0oDxb4pQdWaU&callback=initMap"
			async defer></script>';
			
		
		unset($_SESSION['latitude']);
	 }
			else {
					echo' <div class="page-content"><!-- Your content goes here -->
	  	<div class="demo-card-square mdl-card mdl-shadow--4dp" id="map" style=" height:45%; margin:1%;">  
		 <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text" style="text-align:center;"> No GPS Location Has Been Set for this property yet</h2>
		
		</div>  
	  </div>';
			}
    echo '</section>
	<section class="mdl-layout__tab-panel" id="fixed-tab-3">
      <div class="page-content"><!-- Your content goes here --> 
	 ';
	if (isset($_SESSION["location"]))
	{
		$get_location = $_SESSION["location"];
		if (isset($_SESSION["user_name"]))
		{
			$use = $_SESSION["user_name"];
			if ($use == "admin")
			{
				echo '	 
					<a  id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" href="delete_property.php" target="_top">Delete this property</a>
					';
			}
		}
	}
	else
	{
		$get_location = "null";
	}

	$final = "SELECT * FROM `reviews` WHERE `location` = '" . $get_location . " '";
	$final1 = "SELECT * FROM `users`";
	$run_user = mysqli_query($con, $final);
	$run_user1 = mysqli_query($con, $final1);
	if (mysqli_num_rows($run_user1) > 0)
	{
		while ($row = mysqli_fetch_assoc($run_user1))
		{
			$star1 = $row["user_id"];
		}
	}

	if (mysqli_num_rows($run_user) > 0)
	{
		$inc = 1;
		while ($row = mysqli_fetch_assoc($run_user))
		{
			$star = $row["rating"];
			$id = $star . $inc;
			echo '   	<div class="demo-card-square mdl-card mdl-shadow--2dp" style="margin-left:2%;float:left;">
							<form id="ratingsForm' . $inc . '" action="rating.php" method="GET"> 
							<div class="stars">
								<input type="radio" name="star' . $inc . '" class="star-1" id="star-1' . $inc . '" disabled/>
								<label class="star-1" for="star-1' . $inc . '">1</label>
								<input type="radio" name="star' . $inc . '" class="star-2" id="star-2' . $inc . '" disabled/>
								<label class="star-2" for="star-2' . $inc . '">2</label>
								<input type="radio" name="star' . $inc . '" class="star-3" id="star-3' . $inc . '" disabled/>
								<label class="star-3" for="star-3' . $inc . '">3</label>
								<input type="radio" name="star' . $inc . '" class="star-4" id="star-4' . $inc . '" disabled/>
								<label class="star-4" for="star-4' . $inc . '">4</label>
								<input type="radio" name="star' . $inc . '" class="star-5" id="star-5' . $inc . '" disabled/>
								<label class="star-5" for="star-5' . $inc . '">5</label>
								<span></span>
							</div>
							<script type="text/javascript">
							document.getElementById("star-' . $id . '").checked = true;
							</script>
							<div class="mdl-card__title mdl-card--expand" style="margin:auto;">
							<h2 class="mdl-card__title-text">
							"' . $row["review_summary"] . '" 
							</h2>
							</div>	  
							<div class="mdl-card__supporting-text">
							"' . $row["review"] . '" 
							</div>	  
							<div class="mdl-card__actions mdl-card--border">  ' . $row["location"] . '
							<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="search" value="Review this area" style="width:100%;"/>
							</div>
							</form>
							</div>
					';
			$inc++;
		}
	}
	else
	{
		echo '  <div class="demo-card-square mdl-card mdl-shadow--2dp" style="margin-left:2%;float:left;">
					<form id="ratingsForm" action="rating.php" method="GET"> 
					<div class="mdl-card__title mdl-card--expand" style="margin:auto;">
					<h2 class="mdl-card__title-text">
					NO Reviews Yet :(</br></br> but you can review this area down below.
					</h2>
					</div>	  
					<div class="mdl-card__actions mdl-card--border">  
						<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="search" value="Review this area" style="width:100%;"/>
					</div>
					</form>
					</div>
				';
	}

	echo '
	  </div>
    </section>
 </div>';
	if (isset($_SESSION["user_name"]))
	{
		$use = $_SESSION["user_name"];
		if ($use == "admin")
		{
			echo '	 
				<a  id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" href="delete_property.php" target="_top">Delete this property</a>
				';
		}
		else
		{
			echo '	<a  id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" href="gallery/index.php" target="_top">View Image Gallery</a>	';
		}
	}
	else
	{
		echo '	<a  id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast" href="gallery/index.php" target="_top">View Image Gallery</a>	';
	}



	

	 }
else
{
	echo '<p style="text-align:center; font-size:40px;">property does not exist</p></div>
    </section>';
}
 ?>  
</main>
</div>

</body>
</html>