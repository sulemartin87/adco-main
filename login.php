<?php
	session_start();
	if (isset($_SESSION['user_name'])) 
		 {
			unset($_SESSION['user_name']);
		 }
		   ob_start();
	
	  // code 
	
	 ob_end_flush();
	?>
<html>
	<head>
		<title>Adco.com</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Welcome to Adco.com">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="assets/material.min.css">
		<script src="assets/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script src="assets/select/POSTmdl-select.min.js"></script>
		<link rel="stylesheet" href="assets/select/POSTmdl-select.min.css">
		<style>
			.demo-card-square.mdl-card 
			{
			overflow:hidden;
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
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header  mdl-layout--fixed-tabs" >
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
					<span class="mdl-layout-title"><a class="mdl-navigation__link" href="index.php" style="font-size: 20px;">AdCo</span></a>
				</div>
			</header>
			<main class="mdl-layout__content">
				<div class="page-content">
					<!-- Your content goes here -->
					<!-- Square card -->
					<div class="page-content">
						<!-- Your content goes here --> 
						<div class="demo-card-square mdl-card mdl-shadow--2dp" style="padding:10px;">
							<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
								<div class="mdl-tabs__tab-bar">
									<a href="#log_in_tab" class="mdl-tabs__tab is-active">Log in</a>
									<a href="#sign_up_tab" class="mdl-tabs__tab">Sign up</a>
								</div>
								<div class="mdl-tabs__panel is-active" id="log_in_tab">
									<form action="login1.php" method="POST">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" name="email" type="text" id="email" required>
											<label class="mdl-textfield__label" for="email">email/user name</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="password" name="pass" required="required">
											<label class="mdl-textfield__label" for="pass">password</label>
										</div>
										<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="login" value="login"/>
									</form>
								</div>
								<div class="mdl-tabs__panel " id="sign_up_tab">
									<form action="#" method="POST">
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" id="name" required="required" name="name">
											<label class="mdl-textfield__label" for="name">Name</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
											<input class="mdl-textfield__input" type="text" id="email" required="required" name="email">
											<label class="mdl-textfield__label" for="email">email</label>
										</div>
										<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" >
											<input class="mdl-textfield__input" type="password" id="pass" required="required" name="pass">
											<label class="mdl-textfield__label" for="pass">password</label>
										</div>
										<input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" type="submit" name="sign_up" value="Sign Up"/>
									</form>
								</div>
							</div>
						</div>
					</div>
					</form>
				</div>
				<?php
					if(isset($_POST['email']))
					{
						
					include 'database.php';
					$use = "Select * FROM users WHERE user_name='".$_POST['email']."' LIMIT 1";
						if (mysqli_connect_errno())
							{
								echo "MySQLi Connection was not established: " . mysqli_connect_error();
							}
						else 
						{	
						$run_user = mysqli_query($con, $use);
						if (mysqli_num_rows($run_user) > 0) 
						{
							
							$message = "user name already exists";
							echo "<script type='text/javascript'>alert('$message');</script>";
						}
						else 
						{
						if(isset($_POST['name']))
							
						 {	
							$_SESSION['name'] = $_POST['name'];		 
						  if(isset($_POST['email']))
							{
								$_SESSION['email'] = $_POST['email'];		 
							 if(isset($_POST['pass']))
							  {
								  $_SESSION['pass'] = $_POST['pass'];		
								//header('Location: signup.php');		
							echo("<script>location.href = 'signup.php';</script>");				
							  }
							}
						 }
						}		
						}
					}
					?>
		</div>
		</div>
		</div>
		</section>
		</div>
		</main>
		</div>
	</body>
</html>