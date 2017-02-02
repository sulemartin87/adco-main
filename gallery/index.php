<?php
session_start();



?>
<html>
	<head>
		<title>Material Photo Gallery</title>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,300' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css">
		<link rel="stylesheet" href="./dist/css/material-photo-gallery.css">

		<style>
			/* DEMO */
			body {
				background: #fefefe;
				color: white;
				-webkit-font-smoothing: antialiased;
				-moz-osx-font-smoothing: grayscale;
				text-align: center;
				font-family: 'Roboto Mono';
			}

			h2 {
				font-weight: 300;
				margin: 4vh 4vw;
				letter-spacing: 3px;
				color: grey;
				text-transform: uppercase;
			}

			.demo-btn {
				display: inline-block;
				margin: 0 2.5px 4vh 2.5px;
				text-decoration: none;
				color: grey;
				padding: 15px;
				line-height: 1;
				min-width: 140px;
				background: rgba(0,0,0, 0.07);
				
			}

			.demo-btn:hover {
				background: rgba(0,0,0,0.12);
			}

			@media (max-width: 640px) {

				.demo-btn {
					min-width: 0;
					font-size: 14px;
				}
			}
		</style>
	</head>
	<body>
		<h2>Property Image Gallery</h2>
		<p>
			<a href="../index.php" class="demo-btn" style= "background-color: rgb(173, 253, 246);">Home</a>
		</p>

		<div class="m-p-g">
			<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
			<!--	<img src="http://unsplash.it/600/400?image=940" data-full="http://unsplash.it/1200/800?image=940" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/640/450?image=906" data-full="http://unsplash.it/1280/900?image=906" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/550/420?image=885" data-full="http://unsplash.it/1100/840?image=885" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/650/450?image=823" data-full="http://unsplash.it/1300/900?image=823" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/600/350?image=815" data-full="http://unsplash.it/1200/700?image=815" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/560/500?image=677" data-full="http://unsplash.it/1120/1000?image=677" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/670/410?image=401" data-full="http://unsplash.it/1340/820?image=401" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/620/340?image=623" data-full="http://unsplash.it/1240/680?image=623" class="m-p-g__thumbs-img" />
				<img src="http://unsplash.it/790/390?image=339" data-full="http://unsplash.it/1580/780?image=339" class="m-p-g__thumbs-img" /> !-->
				
					  <?php 
					  if (isset($_SESSION["file_name"] )) {
						 
						  $folder = "../".$_SESSION["file_name"]."/";
						  echo $folder;
						  //$files = glob('folder/*.{jpg,png,gif}', GLOB_BRACE);
						  //$files = glob("../assets/*.jpg");
						//  $files = glob("../".$_SESSION["file_name"]."/*.PNG");
						 //$files = glob("../".$_SESSION["file_name"]."*.{jpg,png,gif}", GLOB_BRACE);
						 $files = glob($folder.'*.{jpg,png,gif,PNG,JPG,JPEG}', GLOB_BRACE);
						  //echo $_SESSION["file_name"];
$x= 1;

foreach($files as $jpg){
	
   // echo $jpg, "\n";
	// echo "<img src='" . $jpg . "' />";
	

	$next = $x +1;
	echo'
<div class="m-p-g">
			<div class="m-p-g__thumbs" data-google-image-layout data-max-height="350">
				<img src="'.$jpg.'" data-full="'.$jpg.'" class="m-p-g__thumbs-img"/>
			
			</div>
	
	';
	$x++;


}
	}else {
	echo 'chakutfdbdsfbhdfhdfhdfi';
}
  


  
  ?>
			</div>

			<div class="m-p-g__fullscreen"></div>
		</div>

		<script src="./dist/js/material-photo-gallery.js"></script>
		<script>
			var elem = document.querySelector('.m-p-g');

			document.addEventListener('DOMContentLoaded', function() {
				var gallery = new MaterialPhotoGallery(elem);
			});
		</script>
		
	</body>
</html>