<?php 
$rootpath = dirname(__DIR__);
define('ROOT_PATH', dirname(__DIR__) . "/");
$pageTitle = "home";
include "header.php";
$_POST["billingAddress"] = "";
?>

<div id="index">
	
	<!--Ask if first visit -->
	<?php if($_SESSION['count'] < 1){ ?>
	<!-- Display only on first visit -->
	<div id="splashDiv">
		<h1>Welcome!</h1>
		<a href="index.php"><h2>Click here</h2></a>
	</div>
	
	<?php }else{ ?>
	<a href="games.php">
		<img id="logo" src="images/dragondale_logo.png"/>
		<h1>Dragondale Studios</h1>
		</a>
	
	<div id="games"> <a href="games.php"> Games </a> </div>
	
	<div id="store"> <a href="store.php"> Store </a> </div>
	
	<div id="about_us"> <a href="about.php">about us </a></div>
	
	<?php }; ?>
</div>
<?php
$_SESSION['count']++;
include "footer.php";
?>