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
                <a class="mdl-navigation__link" href="index.php" style=
                "font-size: 20px;">AdCo</a> 
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
                <div class="demo-card-square mdl-card mdl-shadow--2dp" style=
                " margin:auto;">
                    
                        
<?php

if (isset($_SESSION["last_id"]))
	{
		echo '<div class="mdl-card__title">';
	$target_dir = "assets/properties/" . $_SESSION["last_id"] . "";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

	// Check if image file is a actual image or fake image

	if (isset($_POST["submit"]))
		{
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
		if ($check !== false)
			{
			echo '  File is an image - ' . $check["mime"] . '.<br/><br/><br/>';
			$uploadOk = 1;
			}
		  else
			{
			echo '    File is not an image. <br/><br/><br/><br/>';
			$uploadOk = 0;
			}
		}

	// Check if file already exists

	if (file_exists($target_file))
		{
		echo '<br/><br/>  Sorry, file already exists.<br/><br/>';
		$uploadOk = 0;
		}

	// Check file size

	if ($_FILES["fileToUpload"]["size"] > 5000000000)
		{
		echo '<br/><br/>  Sorry, your file is too large.<br/><br/>';
		$uploadOk = 0;
		}

	// Allow certain file formats

	if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "PNG" && $imageFileType != "JPEG" && $imageFileType != "GIF")
		{
		echo '<br/><br/>  Sorry, only JPG, JPEG, PNG & GIF files are allowed.<br/><br/>';
		$uploadOk = 0;
		}

	// Check if $uploadOk is set to 0 by an error

	if ($uploadOk == 0)
		{
		echo '<br/><br/>  Sorry, your file was not uploaded. Click </  ><br/><br/>';

		// if everything is ok, try to upload file

		}
	  else
		{
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
			{
			echo '
                                                </div>
                                                  
                                                            The file "' . basename($_FILES["fileToUpload"]["name"]) . ' " has been uploaded. <br/>Click next to add a gallery of images to the property</  ><br/><br/><br/><br/>
                                                            
                                                             <a class="mdl-navigation__link" href="multi.php" style="font-size: 20px; margin-left:30%;">next.. or</span></a>';

			// echo '  The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</  >';

			rename($target_dir . basename($_FILES["fileToUpload"]["name"]) . "", $target_dir . "/header.jpg");
			}
		  else
			{
			echo "Sorry, there was an error uploading your file.";
				if (isset($_SESSION['last_id'])) 
				 {
					unset($_SESSION['last_id']);
				 }
			}
		}
	

	echo '<a class="mdl-navigation__link" href="index.php" style=
                                                "font-size: 20px; margin-left:30%;">go home</a>';
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

?><br>
                        <br>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
</html>