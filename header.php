<?php
session_start()
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dragondale Studios</title>
	<link href="style.css" rel="stylesheet"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script src="script.js"></script>

</head>
<body>
	<div id="container">
	<div id="horizontalNav">
		
		<a href="index.php"><h1 id="dds"> Dragondale Studios.</h1></a>
		<nav>
				<a href="contact.php" class="nav_bar <?php if($pageTitle == "contact"){echo "active";}; ?>">Contact</a>
				<!--<a href="forum.php" class="nav_bar <?php if($pageTitle == "forum"){echo "active";}; ?>">Forum</a>-->
				<a href="about.php" class="nav_bar <?php if($pageTitle == "about"){echo "active";}; ?>">About</a>
				<a href="store.php" class="nav_bar <?php if($pageTitle == "store"){echo "active";}; ?>">Store</a>
				<a href="games.php" class="nav_bar <?php if ($pageTitle == "games"){echo "active";}; ?>">Games</a>
				<a href="index.php" class="nav_bar <?php if($pageTitle == "home"){echo "active";}; ?>">Home </a>	
		</nav>
</div>	
	
	