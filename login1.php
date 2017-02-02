<?php
session_start();


if (isset($_SESSION['user_name'])) 
     {
         
        unset($_SESSION['user_name']);
        
     }

?>
<!DOCTYPE html>
<html>
<head>
    <title>adCo</title>
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="Welcome to adco.com." name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <link href="assets/material.min.css" rel="stylesheet">
    <script src="assets/material.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="assets/select/POSTmdl-select.min.js"></script>
    <link href="assets/select/POSTmdl-select.min.css" rel="stylesheet">
    <style>
        .demo-card-square.mdl-card 
        {
          width: 300px;
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
				<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" margin:auto;">
                <?php

                // establishing the MySQLi connection

                 

               include 'database.php';

                if (mysqli_connect_errno())

                {

					echo "MySQLi Connection was not established: " . mysqli_connect_error();

                }

                else
				{
                    if(isset($_POST['login']))
					{

						$email = mysqli_real_escape_string($con,$_POST['email']);

						$pass = mysqli_real_escape_string($con,$_POST['pass']);

						$sel_user = "select * from users where user_name='$email' AND user_pass='$pass'";

						$run_user = mysqli_query($con, $sel_user);

						$check_user = mysqli_num_rows($run_user);

						if($check_user>0)
						{
						$email = strtolower($email);
						$_SESSION['user_name']=$email;
							echo '
									<div class="mdl-card__title">
									<h2 class="mdl-card__title-text">  Thank You for logging in to Adco
									<br/>
									<br/>
									<br/>
									
									<br/>
									</h2>
									<br/>
									</div>
									<br/>
									<br/>
									<div>
									<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Go Home</span></a>
									</div>
									</div>';


						}

						else 
						{

						echo "<script>alert('Email or password is not correct, try again!')</script>";

						}
					}else 
					{
						echo '
									<div class="mdl-card__title">
									<h2 class="mdl-card__title-text">  Something Went Wrong<br/> Please try again
									<br/>
									<br/>
									<br/>
									
									</h2>
									<br/>
									</div>
									
									<div>
									<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Go Home</span></a>
									</div>
									</div>';
					}

                // checking the user



                }

                ?>
            </div>
        </main>
    </div>
</body>
</html>