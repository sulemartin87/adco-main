<?php 

//$con = mysqli_connect("localhost","adcomw_admin","admin100%","adcomw_adco");
$con = mysqli_connect("localhost", "root", "", "adco");
//$sq = "INSERT INTO `adcomw_adco`.`users` (`user_id`, `user_name`, `user_pass`, `full_name`) VALUES (NULL, '".$_SESSION['email']."', '".$_SESSION['pass']."', '".$_SESSION['name']."');";
$sq = "INSERT INTO `adco`.`users` (`user_id`, `user_name`, `user_pass`, `full_name`) VALUES (NULL, '".$_SESSION['email']."', '".$_SESSION['pass']."', '".$_SESSION['name']."');";
						



?>