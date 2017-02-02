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
                <div class="demo-card-square mdl-card mdl-shadow--2dp" style=
                " overflow:auto;">
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
                                                           <p style="text-align:center; ;"><strong>Upload Gallery Images</strong></p>
                                                           
                                                             </br>



                                                        <form action="" enctype="multipart/form-data" method="post">

                                                            <div>
                                                                <label for="upload">Add Attachments:</label>
                                                                <input  class="mdl-textfield__input" id="upload" name="upload[]" type="file" multiple="multiple" />
                                                            </div>

                                                            <p><input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" type="submit" name="submit" value="Submit"></p>

                                                        </form>

                                                            
                                                          </div>';
                            }
                            else
                            {
                                echo '
                                                                                <div class="mdl-card__title">
                                                                                <h2 class="mdl-card__title-text" style="text-align:center;"> Log in as an administrator to view this content
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
                                                                                <h2 class="mdl-card__title-text" style="text-align:center;"> Log in  to view this content
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
                    echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style=
                                    "  overflow:auto;">';
                    if (isset($_SESSION["user_name"]))
                        {
                            $use = $_SESSION["user_name"];
                            if ($use == "admin")
                            {               
                                if (isset($_SESSION["last_id"]))
                                {
                                    if (isset($_POST['submit']))
                                    {
                                        if (count($_FILES['upload']['name']) > 0)
                                        {

                                            // Loop through each file

                                            for ($i = 0; $i < count($_FILES['upload']['name']); $i++)
                                            {

                                                // Get the temp file path

                                                $tmpFilePath = $_FILES['upload']['tmp_name'][$i];

                                                // Make sure we have a filepath

                                                if ($tmpFilePath != "")
                                                {

                                                    // save the filename

                                                    $shortname = $_FILES['upload']['name'][$i];

                                                    // save the url and the file

                                                    $filePath = "assets/properties/" . $_SESSION["last_id"] . "/" .$_FILES['upload']['name'][$i];

                                                    // Upload the file into the temp dir

                                                    if (move_uploaded_file($tmpFilePath, $filePath))
                                                    {
                                                        $files[] = $shortname;

                                                        // insert into db
                                                        // use $shortname for the filename
                                                        // use $filePath for the relative url to the file

                                                    }
                                                }
                                            }
                                        }

                                        // show success message

                                        
                                        if (is_array($files))
                                        {
                                            echo "<ul>";
                                            foreach($files as $file)
                                            {
                                                echo '<h2 class="mdl-card__title-text" style="text-align:center;"> </h2>
                                                                                            ';
                                                echo "<li>$file</li>";
                                            }

                                            echo "</ul>";
                                        }

                                        echo '<h2 class="mdl-card__title-text" style=" font-size:20px; color: rgb(0,150,136);">  You have successfully added a property<br/>Click below to add a description for your property</h2>
                                                                                
                                                                                <br/> <a class="mdl-navigation__link" href="text summary.php" style="font-size: 20px; margin-left:40%;">next</span></a><br/>';
                                    }
                                }
                            }
                        }
                    ?>
                    <!-- IMPORTANT:  FORM's enctype must be "multipart/form-data" -->
                </div>
            </div>
        </main>
    </div>
</body>
</html>