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
        
        #view-source {
      position: fixed;
      display: block;
      right: 0;
      bottom: 0;
      margin-right: 40px;
      margin-bottom: 40px;
      z-index: 900;
    }

    .mdl-button--file {
    input {
    cursor: pointer;
    height: 100%;
    right: 0;
    opacity: 0;
    position: absolute;
    top: 0;
    width: 300px;
    z-index: 4;
    }
    }

    .mdl-textfield--file {
    .mdl-textfield__input {
    box-sizing: border-box;
    width: calc(100% - 32px);
    }
    .mdl-button--file {
    right: 0;
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
                                                                     ' . $use . '
                                                                    </button>';

	// echo '<a class="mdl-navigation__link" href"" id="menu" >'.$use.'</a>';

	}
  else
	{
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
                <div class="demo-card-square mdl-card mdl-shadow--2dp" style=
                " height: 300px; overflow:auto;">
                   <?php

if (isset($_SESSION["last_id"]))
	{
	if (isset($_SESSION["user_name"]))
		{
		$use = $_SESSION["user_name"];
		if ($use == "admin")
			{
			echo '   

                                                          </br>
                                                           <p style="text-align:center; ;"><strong>Upload Header Image</strong></p>
                                                           
                                                             </br>


                                                         <form action="upload.php" method="post" enctype="multipart/form-data">
                                                             <p style="text-align:center; ;"><strong>Select Image To Upload</strong></p>
                                                            <input  class="mdl-textfield__input" type="file" name="fileToUpload" id="fileToUpload" placeholder="File" multiple="multiple" required="required">
                                                            <div class="mdl-layout-spacer"></div><br/>
                                                                 <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" value="Upload Image" name="submit" style="width:100%;"/> 
                                                        </form>

                                                            
                                                          </div>';
														  
			}
		  else
			{
			echo '
                                                                                                                        <div class="mdl-card__title">
                                                                                                                        <h2 class="mdl-card__title-text" style="text-align:center;">Log in as administratorto view this content
                                                                                                                        </br>
                                                                                                                        
                                                                                                                        </br>
                                                                                                                        </h2>
                                                                                                                        </br>
                                                                                                                        </div>
                                                                                                                        </br>
                                                                                                                        </br>
                                                                                                                        <div>
                                                                                                                        <span class="mdl-layout-title"><a class="mdl-navigation__link" href="login.php" style="font-size: 20px; margin-left:30%;">Log in</span></a>
                                                                                                                        </div>
                                                                                                                        </div>';
			}
		}
	  else
		{
		echo '
                                                                                                                        <div class="mdl-card__title">
                                                                                                                        <h2 class="mdl-card__title-text" style="text-align:center;">Log in to view this content
                                                                                                                        </br>
                                                                                                                        
                                                                                                                        </br>
                                                                                                                        </h2>
                                                                                                                        </br>
                                                                                                                        </div>
                                                                                                                        </br>
                                                                                                                        </br>
                                                                                                                        <div>
                                                                                                                        <span class="mdl-layout-title"><a class="mdl-navigation__link" href="login.php" style="font-size: 20px; margin-left:30%;">Log in</span></a>
                                                                                                                        </div>
                                                                                                                        </div>';
		}
	}
  else
	{
	echo '
                                                                                                                        <div class="mdl-card__title">
                                                                                                                        <h2 class="mdl-card__title-text" style="text-align:center;">Error! Something Went Wrong
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


                </div>
            </div>
        </main>
    </div>
</body>
</html>