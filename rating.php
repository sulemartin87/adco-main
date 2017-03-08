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
    <link href="assets/select/getmdl-select.min.css" rel="stylesheet">
    <link href="assets/star.css" rel="stylesheet">
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
        
  

    </style>
</head>
<body>
    <!-- Uses a header that scrolls with the text, rather than staying
  locked at the top -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <div class="mdl-layout__header-row">
                <!-- Title -->
                <span class="mdl-layout-title"><a class="mdl-navigation__link"
                href="index.php" style="font-size: 20px;">AdCo</a></span> 
                <!-- Add spacer, to align navigation to the right -->
                <div class="mdl-layout-spacer"></div><!-- Navigation -->
                <nav class="mdl-navigation">
                    <?php 
                                                                  if (isset($_SESSION["user_name"])) 
                                                                 {
                                                                     $use = $_SESSION["user_name"];
                                                                     echo '<button class="mdl-button mdl-js-button mdl-js-ripple-effect"id="menu" style="color:white;"> 
                                                                     '.$use.'
                                                                    </button>';
                                                                     //echo '<a class="mdl-navigation__link" href"" id="menu" >'.$use.'</a>';
                                                                    
                                                                 }else {
                                                                     
                                                                    echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
                                                                 }
                                                                   ?>
                    <ul class=
                    "mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect">
                    <li class="mdl-menu__item">
                            <a class="mdl-menu__item" href=
                            "login.php">Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <!-- Square card -->
                <div class="demo-card-square mdl-card mdl-shadow--2dp">
                    <form action="#" method="get">
                        <br>
                        <p style="text-align:center;"><strong>Rate and review
                        this area</strong></p>
						
<?php

if (isset($_SESSION["user_name"]))
{
	if (isset($_SESSION["location"]))
	{
		echo '  <p style="text-align:center ;"><strong>' . $_SESSION["location"] . '</strong></p>
                                                                                                <div class="mdl-layout-spacer"></div>
                                                                                        
                                                                                         </br>
                                                                                       
                                                                                        <div class="stars">
                                                                                            <input type="radio" name="star" class="star-1" id="star-1" value="1"/>
                                                                                            <label class="star-1" for="star-1" >1</label>
                                                                                            <input type="radio" name="star" class="star-2" id="star-2" value="2"/>
                                                                                            <label class="star-2" for="star-2" >2</label>
                                                                                            <input type="radio" name="star" class="star-3" id="star-3"  value="3"/>
                                                                                            <label class="star-3" for="star-3">3</label>
                                                                                            <input type="radio" name="star" class="star-4" id="star-4" value="4"/>
                                                                                            <label class="star-4" for="star-4">4</label>
                                                                                            <input type="radio" name="star" class="star-5" id="star-5" value="5"/>
                                                                                            <label class="star-5" for="star-5">5</label>
                                                                                            <span></span>
                                                                                        </div>

                                                                                       <!-- Textfield with Floating Label -->


                                                                                      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                                                                        <input class="mdl-textfield__input" type="text" id="sample1" maxlength="30" name="summary" REQUIRED>
                                                                                        <label class="mdl-textfield__label" for="sample3">Review Summary</label>
                                                                                      </div>



                                                                                      <div class="mdl-textfield mdl-js-textfield">
                                                                                        <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" maxlength="100" name="full_review"></textarea>
                                                                                        <label class="mdl-textfield__label" for="sample5">full review</label>
                                                                                      </div>



                                                                                        <div class="mdl-layout-spacer"></div>
                                                                                        </br>
                                                                                        </br>
                                                                                        </br></br>
                                                                                        </br>
                                                                                        
                                                                                        <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="rate" value="rate and review" style="width:100%;"/>

                                                                                        </form>
                                                                                    ';
	}
	else
	{
		echo '<a class="mdl-navigation__link" href="index.php">Go back and chose a location</a>';
	}
}
else
{
	echo '
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
<?php

if (isset($_SESSION["user_name"]))
{
	if (isset($_SESSION["location"]))
	{
		$location = $_SESSION["location"];
		$use = $_SESSION["user_name"];
		if (isset($_GET['star']))
		{
			$star = $_GET['star'];
			if (isset($_GET['summary']))
			{
				$summary = $_GET['summary'];
				if (isset($_GET['full_review']))
				{
					$full_review = $_GET['full_review'];
					include 'database.php';
					if (mysqli_connect_errno())
					{
						echo "MySQLi Connection was not established: " . mysqli_connect_error();
					}
					else
					{
						$q = "INSERT INTO `adco`.`reviews` (`review_id`, `review_summary`, `review`, `rating`, `location`, `user_name`) VALUES (NULL, '" . $summary . "', '" . $full_review . "', '" . $star . "', '" . $location . "', '" . $use . "');";
						if (mysqli_query($con, $q))
						{
							echo "";
							echo '<br/><a class="mdl-navigation__link" href="index.php" style="font-size: 20px;">your Review Has Been Posted Successfully, Click to Go <span style="    color: rgb(0,150,136);">Home</span></a>';
						}
						else
						{
							echo "Error: " . $q . "<br />" . mysqli_error($con);
						}
					}
				}
			}
		}
	}
}

$full_review = "";
$summary = "";
$star = "";
?>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>
</html>