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
				<div class="demo-card-square mdl-card mdl-shadow--2dp" style="  margin:auto; ">
                                        
      
<?php

if (isset($_SESSION["user_name"]))
{
	$use = $_SESSION["user_name"];
	if ($use == "admin")
	{
		if (isset($_SESSION["property_id"]))
		{
			$property_id = $_SESSION["property_id"];
			 include 'database.php';
			if (mysqli_connect_errno())
			{
				echo "MySQLi Connection was not established: " . mysqli_connect_error();
			}
			else
			{

				$del = "DELETE FROM `property` WHERE `property`.`property_id` = " . $property_id . "";
				if (mysqli_query($con, $del))
				{
					$dir = 'assets/properties/' . $property_id;
					$it = new RecursiveDirectoryIterator($dir, RecursiveDirectoryIterator::SKIP_DOTS);
					$files = new RecursiveIteratorIterator($it, RecursiveIteratorIterator::CHILD_FIRST);
					foreach($files as $file)
					{
						if ($file->isDir())
						{
							rmdir($file->getRealPath());
						}
						else
						{
							unlink($file->getRealPath());
						}
					}

					rmdir('assets/properties/' . $property_id);
					echo '<div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text" style="text-align:center;">  Property Successfully deleted :(
                                        </br>
                                        
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
				else
				{
					echo "Error: " . $q . "<br />" . mysqli_error($con);
				}
			}
		}
		else
		{
			echo '<a class="mdl-navigation__link" href="index.php">Error has occured, please try that again</a></div>';
		}
	}
	else
	{
		echo '
                                        <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text" style="text-align:center;"> Log in as administrator to perform this action
                                        </br>
                                        
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
}
else
{
	echo '
                                        <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text" style="text-align:center;"> Log in as administrator to perform this action
                                        </br>
                                        
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
<?php
/*$full_review = "";
$summary = "";
$star = "";
$con = mysqli_connect("localhost", "root", "", "adco");

if (isset($_POST['location']))
{
	if (isset($_POST['property_id']))
	{
		$star = $_POST['star'];
		if (isset($_POST['summary']))
		{
			$summary = $_POST['summary'];
			if (isset($_POST['full_review']))
			{
				$full_review = $_POST['full_review'];
				$con = mysqli_connect("localhost", "root", "", "adco");
				if (mysqli_connect_errno())
				{
					echo "MySQLi Connection was not established: " . mysqli_connect_error();
				}
				else
				{

					$q = "INSERT INTO `adco`.`reviews` (`review_id`, `review_summary`, `review`, `rating`, `location`, `user_name`) VALUES (NULL, '" . $summary . "', '" . $full_review . "', '" . $star . "', '" . $_POST['location'] . "', '" . $_SESSION["user_name"] . "');";

					if (mysqli_query($con, $q))
					{
						echo '
                                        <div class="mdl-card__title">
                                        <h2 class="mdl-card__title-text" style="text-align:center;">  Property Successfully deleted
                                        </br>
                                        
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
					else
					{
						echo "Error: " . $q . "<br />" . mysqli_error($con);
					}
				}
			}
		}
	}
}
*/
?>

            </div>
        </main>
    </div>
</body>
</html>