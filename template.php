<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> <?php 
	echo $title;
	 ?>
	</title>
	<link rel="stylesheet" type="text/css" href="styles/stylesheet.css">
</head>
<body>
	<div id="wrapper">
		<div id="banner"></div>
		<nav id="navigation">
			<ul id="nav">
				<li> <a href="index.php"> Home </a></li>
				<li> <a href="#"> About  </a></li>
				<li> <a href="#"> Skills </a></li>
				<li> <a href="projects.php"> Projects </a></li>
			</ul>
		</nav>	
		<div id="content-area">
			<?php echo $content; ?>
		</div>
		<div id="sidebar"> </div> 
		<footer>
			<p>All rights reserved</p>
		</footer>
	</div>

</body>
</html>