<?php 
$pageTitle = "games";
include "header.php";
$numGames = 6;
?>
<div id="games_page">
	<h1>Games</h1>
	<div id="games_page">
	<?php 
	for($i=0;$i<$numGames; $i++){ ?>
		<div class="games" id="game_<?php echo $i; ?>">
			<a href="#"><img src="images/coming_soon.jpg"/></a>
		</div>
	<?php }; ?>
	</div>
</div>
<?php
include "footer.php";
?>