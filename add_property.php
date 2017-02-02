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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel=
    "stylesheet">
    <script src="assets/select/getmdl-select.min.js">
    </script>
    <link href="assets/select/getmdl-select.min.css" rel="stylesheet">
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
            url('assets/cross.jpg')  #46B6AC;
        }
        .mdl-layout__drawer
        {
            background: rgb(217, 245, 249);
        }
        
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
    <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px;">AdCo</a></span> 
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div><!-- Navigation -->
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
                    <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect">
						<li class="mdl-menu__item">
								<a class="mdl-menu__item" href="login.php">Logout</a>
						</li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <!-- Square card -->
                <div class="demo-card-square mdl-card mdl-shadow--2dp" style=" overflow:auto;">
                    <?php

                    if (isset($_SESSION["user_name"]))
                    {
                        $use = $_SESSION["user_name"];
                        if ($use == "admin")
                        {
                            echo 
                           '
                            <form action="add_prop.php" method="POST">
                              </br>
                               <p style="text-align:center; ;"><strong>Add Property</strong></p>
                                <div class="mdl-layout-spacer"></div>
                                 </br>
                               
                               <p style="text-align:center; color:rgb(0,150,136);">Select District </p>

                              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                <input class="mdl-textfield__input" type="text" id="district"  readonly tabIndex="-1" name="district" required>
                                
                                <label for="district">
                                 <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                </label>
                                
                                <label for="district" class="mdl-textfield__label" style="text-align:center;" ></label>
                                <ul for="district" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
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
                             <!--<p style="text-align:center;">or </p>!-->
                             <!--<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                <input class="mdl-textfield__input" type="text" id="city"  value=""readonly tabIndex="-1" name ="city" required>
                                <label for="city">
                                <i class="mdl-icon-toggle__label material-icons">keyboard_arrow_down</i>
                                </label>
                                <label for="city" class="mdl-textfield__label" style="text-align:center;">Select a City</label>
                                <ul for="city" class="mdl-menu mdl-menu--bottom-left mdl-js-menu">
                                    <li class="mdl-menu__item">Lilongwe</li>
                                    <li class="mdl-menu__item">Blantyre</li>
                                    <li class="mdl-menu__item">Mzuzu</li>
                                    <li class="mdl-menu__item">Zomba</li>
                                </ul>
                               </div>!-->
                               
                               <p style="text-align:center; color:rgb(0,150,136);">Select Category </p>
                                
                                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label getmdl-select">
                                <input class="mdl-textfield__input" type="text" id="category"  readonly tabIndex="-1" name="category" required>
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
                                
                                 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " style="width:100%; float:left;"> 
                                  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="min_price" name= "price" required>
                                  <label class="mdl-textfield__label" for="sample2">Price</label>
                                  <span class="mdl-textfield__error">Input is not a number!</span>
                                 </div>
                                 
                                 <!-- Simple Textfield -->

                              <div class="mdl-textfield mdl-js-textfield">
                                <input class="mdl-textfield__input" type="text" id="area" name="area" required>
                                <label class="mdl-textfield__label" for="area">Area</label>
                              </div>
                              

							<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label " style="width:40%; float:left;"> 
							  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="latitude" name= "latitude" required>
							  <label class="mdl-textfield__label" for="latitude">Latitude</label>
							  <span class="mdl-textfield__error">Input is not a number!</span>
							 </div>
							 
							 <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="width:40%; float:right;">
							  <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="longitude" name= "longitude" required>
							  <label class="mdl-textfield__label" for="longitude">longitude</label>
							  <span class="mdl-textfield__error">Input is not a number!</span>
							 </div>
                                
                                <div class="mdl-layout-spacer"></div>
                                </br>
                                </br>
                                </br></br>
                                </br>
                                
                                 <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="search" value="add property" style="width:100%;"/>

                                </form>
                              </div>';
                        }
                    }
                    else
                    {
                        echo  
                        '<p style="text-align:center; ;"><strong>Please Log in to view contents</strong></p><br/>
                        <span class="mdl-layout-title"><a class="mdl-navigation__link" href="login.php" style="font-size: 20px; margin-left:40%;">Log in</span></a>
                        </div>';
                    }

                    ?>
                </div>
            </div>
        </main>
    </div>
</body>
</html>