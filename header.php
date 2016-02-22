<?php

?>

<!DOCTYPE html>
<html>
<head>
	<title>Dragondale Studios</title>
	<link href="style.css" type="html/css" rel="stylesheet"/>

</head>
<body>
<div id="horizontalNav">
	
	<h1 id="dds"> Dragondale Studios.</h1>
	<nav>
			<a href="contact.php" class="nav_bar <?php if($pageTitle == "contact"){echo "active";}; ?>">Contact</a>
			<a href="about.php" class="nav_bar <?php if($pageTitle == "about"){echo "active";}; ?>">About</a>
			<a href="store.php" class="nav_bar <?php if($pageTitle == "store"){echo "active";}; ?>">Store</a>
			<a href="games.php" class="nav_bar <?php if ($pageTitle == "games"){echo "active";}; ?>">Games</a>
			<a href="index.php" class="nav_bar <?php if($pageTitle == "home"){echo "active";}; ?>">Home </a>	
	</nav>
</div>	
	
	