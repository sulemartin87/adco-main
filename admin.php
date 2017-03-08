
<?php

session_start();

?>
<!doctype html>
<!--
  Material Design Lite
  Copyright 2015 Google Inc. All rights reserved.

  Licensed under the Apache License, Version 2.0 (the "License");
  you may not use this file except in compliance with the License.
  You may obtain a copy of the License at

      https://www.apache.org/licenses/LICENSE-2.0

  Unless required by applicable law or agreed to in writing, software
  distributed under the License is distributed on an "AS IS" BASIS,
  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
  See the License for the specific language governing permissions and
  limitations under the License
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>Material Design Lite</title>

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" 
	href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.1.3/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="styles.css">
    <style>
    #view-source {
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
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">Home</span>
          <div class="mdl-layout-spacer"></div>
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
            <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
              <i class="material-icons">search</i>
            </label>
            <div class="mdl-textfield__expandable-holder">
              <input class="mdl-textfield__input" type="text" id="search">
              <label class="mdl-textfield__label" for="search">Enter your query...</label>
            </div>
          </div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <li class="mdl-menu__item">About</li>
            <li class="mdl-menu__item">Contact</li>
            <li class="mdl-menu__item">Legal information</li>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="images/user.jpg" class="demo-avatar">
          <div class="demo-avatar-dropdown">
            <span>Administrator</span>
            <div class="mdl-layout-spacer"></div>
          
   
          </div>
		  <?php

				if (isset($_SESSION["user_name"]))
				{
					$use = $_SESSION["user_name"];
					if ($use == "admin")
					{
						echo '</header>
						<nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
						  <a class="mdl-navigation__link" href="index.php">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Inbox
						  </a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">delete</i>Trash
						  </a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">report</i>Spam</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">forum</i>Forums</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">flag</i>Updates</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">local_offer</i>Promos</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">shopping_cart</i>Purchases</a>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">people</i>Social</a>
						  <div class="mdl-layout-spacer"></div>
						  <a class="mdl-navigation__link" href="">
						  <i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">help_outline</i>
						  <span class="visuallyhidden">Help</span>
						  </a>
						</nav>
					  </div>
					  <main class="mdl-layout__content mdl-color--grey-100">
						<div class="mdl-grid demo-content">
						<!--

						  <div class="demo-charts mdl-color--white mdl-shadow--2dp mdl-cell mdl-cell--12-col mdl-grid">
							<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" 
							class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							  <use xlink:href="#piechart" mask="url(#piemask)" />
							  <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" text-anchor="middle" 
							  dy="0.1">82<tspan font-size="0.2" dy="-0.07">%</tspan></text>
							</svg>
							<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" 
							class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							  <use xlink:href="#piechart" mask="url(#piemask)" />
							  <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" 
							  text-anchor="middle" dy="0.1">82 <tspan dy="-0.07" font-size="0.2">%</tspan></text>
							</svg>
							<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" 
							class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							  <use xlink:href="#piechart" mask="url(#piemask)" />
							  <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" 
							  text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
							</svg>
							<svg fill="currentColor" width="200px" height="200px" viewBox="0 0 1 1" 
							class="demo-chart mdl-cell mdl-cell--4-col mdl-cell--3-col-desktop">
							  <use xlink:href="#piechart" mask="url(#piemask)" />
							  <text x="0.5" y="0.5" font-family="Roboto" font-size="0.3" fill="#888" 
							  text-anchor="middle" dy="0.1">82<tspan dy="-0.07" font-size="0.2">%</tspan></text>
							</svg>
						  </div> !--> ';
						include 'database.php';
						if (mysqli_connect_errno())
						{
							echo "MySQLi Connection was not established: " . mysqli_connect_error();
						}
						else
						{
							$final1 = "SELECT * FROM `users`";
							$run_user_all = mysqli_query($con, $final1);
							echo '
						<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" overflow:auto; width:98%; margin:1%;">
						<table class="mdl-data-table mdl-js-data-table e mdl-shadow--2dp" style="width=100%;">';
							echo '<tr>
					<th>ID</th>
					<th>user name</th>
					<th>Passowrd</th>
					<th>Full Name</th>
					
					</tr>
					';
							while ($row = $run_user_all->fetch_assoc())
							{
								$i = 1;
								$j = 1;
								echo '<form name="pass' . $i . '" action="" method="post">';
								echo '<tr>';
								echo '<a name="row' . $i . '"></a>';
								echo '<td>' . $row["user_id"] . '</td><td>' . $row["user_name"] . '</td><td>' . $row["user_pass"] . 
								'</td><td> ' . $row["full_name"] . '</td><td><input class="mdl-button mdl-js-button mdl-js-ripple-effect" type="submit" 
								value="remove"  name="bruh' . $row["user_id"] . '"/>';
								echo '</tr>';
								if (isset($_POST['bruh' . $row["user_id"]]))
								{
									$remove_sql = "DELETE FROM users WHERE user_id =" . $row["user_id"];
									$remove = mysqli_query($con, $remove_sql);
								}

								$i++;
							}

							echo ("</table>");
							echo '</form></div>';
						}
					}
					else
					{
						echo "log in as administrator";
					}
				}
				else
				{
					echo 'log in as administrator';
				}

				?>
     

      <!--    <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
            <svg fill="currentColor" viewBox="0 0 500 250" class="demo-graph">
              <use xlink:href="#chart" />
            </svg>
          </div>
        
      	!-->
     
      </main>
    </div>

   <!--   
   <a href="https://github.com/google/material-design-lite/blob/master/templates/dashboard/" 
   target="_blank" id="view-source" 
   class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored mdl-color-text--white">View Source</a>
    !--><script src="https://code.getmdl.io/1.1.3/material.min.js"></script>



  </body>
</html>
