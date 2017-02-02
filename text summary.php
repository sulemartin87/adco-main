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

                                                                    
                                                                 }
                                                                 else 
                                                                 { 
                                                                    echo '<a class="mdl-navigation__link" href="login.php#sign_up">Login or Sign Up</a>';
                                                                 }
                                                                   ?>
                </nav>
                <ul class=
                "mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect">
                <li class="mdl-menu__item">
                        <a class="mdl-menu__item" href="login.php">Logout</a>
                    </li>
                </ul>
            </div>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <!-- Square card -->
   
             <?php

if (isset($_SESSION["user_name"]))
{
	$use = $_SESSION["user_name"];
	if ($use == "admin")
	{
		echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" >
                                                        <!-- Floating Multiline Textfield -->
                                                <form action="#" method="get">
                                                  <div class="mdl-textfield mdl-js-textfield">
                                                    <textarea class="mdl-textfield__input" type="text"  id="description" name="description" style="height:70%; " ></textarea>
                                                    <label class="mdl-textfield__label" for="sample5">Include a Description for the property</label>
                                                  </div>
                                                  
                                                  
                                                  
                                                   <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="descript" id="descript" value="add description" style="width:100%;"/>
                                                </form>




                                                  
                                                    
                                                  
                                                 </div>';
	}
	else
	{
		echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style="width:592px;">
                                                        <!-- Floating Multiline Textfield -->
                                                <b><a class="mdl-navigation__link" href="login.php#sign_up" style="font-size:20px;">Login as an administrator to view content</a></b>



                                                  
                                                    
                                                  
                                                 </div>';
	}
}
else
{
	echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style="width:592px;">
                                                        <!-- Floating Multiline Textfield -->

                                                 <b><a class="mdl-navigation__link" href="login.php#sign_up" style="font-size:20px;">Login as an administrator to view content</a></b>
                                                  



                                                  
                                                    
                                                  
                                                 </div>';
}

?>
<?php
/*
* PHP XMLWriter - How to create a simple xml
*/

if (isset($_SESSION["user_name"]))
{
	$use = $_SESSION["user_name"];
	if ($use == "admin")
	{
		if (isset($_SESSION["last_id"]))
		{
			$target_dir = "assets/properties/" . $_SESSION["last_id"] . "";
			if (isset($_GET['descript']))
			{
				if (isset($_GET['description']))
				{
					$t = $_GET['description'];

					// create a new xmlwriter object

					$xml = new XMLWriter();
					$xml->openURI('test.xml');

					// using memory for string output

					$xml->openMemory();

					// set the indentation to true (if false all the xml will be written on one line)

					$xml->setIndent(true);

					// create the document tag, you can specify the version and encoding here

					$xml->startDocument();

					// Create an element

					$xml->startElement("data");

					// Write to the element

					$xml->writeElement("body", $t);

					// $xml->writeElement("name", "Oluwafemi");
					// $xml->writeElement("address", "Cresent Drive, TX");

					$xml->endElement(); //End the element

					// output the xml (obviosly this output could be written to a file)

					file_put_contents($target_dir . '/test.xml', $xml->flush(true));
					echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" >
                                                                                <div class="mdl-card__title">
                                                                                <h2 class="mdl-card__title-text" style="text-align:center;"> <b>Description changed</b>
                                                                                </br>
                                                                                
                                                                                </br>
                                                                                </h2>
                                                                                </br>
                                                                                </div>
                                                                            
                                                                                <div>
                                                                                
                                                                                
                                                                                </div>
                                                                                </div>';
					echo '
                                                                        




                                                                        
                                                                            <a  id="view-source" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-color--accent mdl-color-text--accent-contrast"  href="index.php" target="_top">Finish</a>
                                                                            ';
					echo htmlentities($xml->outputMemory());
					unset($_SESSION['last_id']);
				}
			}
		}
		else
                    {
                        echo '
                                                                                <div class="mdl-card__title">
                                                                                <h2 class="mdl-card__title-text" style="text-align:center;">Error Something Went Wrong
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
}
else
{
	echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style="width:592px;">
                                                        <!-- Floating Multiline Textfield -->

                                                 <b><a class="mdl-navigation__link" href="login.php#sign_up" style="font-size:20px;">Login as an administrator to view content</a></b>
                                                  



                                                  
                                                    
                                                  
                                                 </div>';
}

?>
            </div>
        </main>
    </div>
</body>
</html>