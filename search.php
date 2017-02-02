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
            background:
            
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
            </div>
            <ul class=
            "mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect">
                <li class="mdl-menu__item">
                    <a class="mdl-menu__item" href="login.php">Logout</a>
                </li>
            </ul>
        </header>
        <main class="mdl-layout__content">
            <div class="page-content">
                <!-- Your content goes here -->
                <?php
                 
               include 'database.php';

                if (mysqli_connect_errno())
                {
                 echo "MySQLi Connection was not established: please refer to the documentation and user guide to fix this problem" . mysqli_connect_error();
                 
                }

                else
                {
                $sel = "select * from property where location='kawale' ";   
                #$base_query = "SELECT * FROM `property` WHERE `district` = 'lilongwe' AND `category` = 'rent' AND `price` BETWEEN 0 AND 2000000";
                $base_query = "SELECT * FROM `property` ";
                $final = "";
                if(isset($_GET['district']) && $_GET['district'] != "")
                {
                  $get_district = $_GET['district'];
                  $final =  " WHERE`district` = '$get_district'";
                  
                }

                if(isset($_GET['category']) && $_GET['category'] != "")
                {
                     $get_category = $_GET['category'];
                     
                     if(isset($_GET['district']) && $_GET['district'] != "") 
                     {
                        $final = $final ."AND `category` = '$get_category'";
                     }
                     
                     else
                     {
                        $final = $final . "WHERE`category` = '$get_category'" ;
                     }
                      
                }

                if(isset($_GET['min_price']) && $_GET['min_price'] != "") 
                {
                     $get_min = $_GET['min_price'];
                     if(isset($_GET['max_price']) && $_GET['max_price'] != "") 
                     {
                        $final = $final . "AND `price` BETWEEN  $get_min AND ";
                     }
                     else
                     {
                        $final = $final . "WHERE `price` >= $get_min" ;
                     }
                         
                }

                if(isset($_GET['max_price']) && $_GET['max_price'] != "") 
                {
                    
                    $get_max = $_GET['max_price'];
                    if(isset($_GET['min_price']) && $_GET['min_price'] != "") 
                    {
                     $final = $final . $get_max;
                    }
                    else    
                    {
                        $final = $final . "AND `price` <= $get_max" ;   
                    }
                    
                }

                 $final = $base_query ." ". $final;
                    

                $run_user = mysqli_query($con, $final);
                if (mysqli_num_rows($run_user) > 0) 
                {
                    // output data of each row
                    while($row = mysqli_fetch_assoc($run_user)) 
                    {
                        
                        
                        if ($row["category"] == "rent") {
                            $category = "per month";
                        }
                        else {
                            $category = "";
                        }
                        
                       # echo "id: " . $row["property_id"]. " - Name: " . $row["category"]. " " . $row["location"]. "<br>";
                        echo "<!-- Square card -->";
                        echo '<form action="property.php" method="GET">';
                        echo '<div class="demo-card-square mdl-card mdl-shadow--4dp" style=" height:300px;   margin-top:1%;
                          margin-left:1%;
                          float:left;">';
                        echo'       
                        <div style="
                             height:100%;
                             width:100%;
                             background:
                             url(&#39;assets/properties/'.$row["property_id"].'/header.jpg&#39;);
                             background-size: 100% 100%;
                             background-repeat: no-repeat;">
                        </div>  
                        <div>
                        <p name="category" value=" ' . $row["category"]. '" style="margin-left:1%;"> house For ' . $row["category"]. ' </p>
                        <p name ="location" value="' . $row["location"]. '" style="margin-left:1%;"> Location: ' . $row["location"]. '</p>
                        <p name="price" value="' . $row["price"]. '" style="margin-left:1%;"> Price: <b>MK' . $row["price"]. ' ' . $category. '  </b></p>
                        <input type="hidden" value="'.$row["property_id"].'" name="property_id" id="property_id" />
                        <input type="hidden" value="'.$row["location"].'" name="location" id="location" />
                         <div class="mdl-card__actions mdl-card--border">
                        <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="search" value="view offer"/>
                        </div> 
                        </div>
                        </form>
                        </div>
                        <div>';
                    }
                }
                 else 
                {
                     echo '<div class="demo-card-square mdl-card mdl-shadow--2dp" style=" height: 500px; margin:auto;">
                     
                     
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">0 Results 
                            </br>
                            </br>
                            </br>
                            Please run another Search
                            </br>
                            
                            
                            
                            
                            
                            </h2>
                            
                            </br>
                            
                            
                        
                        </div>
                        </br>
                        
                        </br>
                        
                    
                        <div>
                            <span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px; margin-left:30%;">Search Again</span></a>
                            <div>
                     
                     </div>
                    
                   ';
                }
                    
                    

                }
                 

                 
                ?>
            </div>
        </main>
    </div>
</body>
</html>