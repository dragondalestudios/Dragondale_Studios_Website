<?php 
$pageTitle = "games";
include "header.php";

?>
<script src="jssor/jquery-1.9.1.min.js"></script>
<script src="jssor/jssor.slider.mini.js"></script>

<script>
    jQuery(document).ready(function ($) {
        var options = {
            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 2
            }
        };
        var jssor_slider1 = new $JssorSlider$('slider1_container', options);
    });
</script>

<div id="quantum">
	
	<h1>Quantum Echo</h1>
	<h2>Go back in time to help yourself navigate complex environments before it's too late. </h2>
	<p>We here at Dragondale studios are excited to be working on a number of upcoming titles. Check back soon for more information or email us through our <a href="contact.php">contact page</a>.</p>

	<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 600px; height: 300px;">
    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; overflow: hidden; left: 0px; top: 0px; width: 600px; height: 300px;">
        <div><img u="image" src="images/quantum_screenshot.png" /></div>
        <div><img u="image" src="images/production_screenshot.png" /></div>
		
		
    </div>
		<!-- Arrow Navigator Skin Begin -->
		...
		<!-- Arrow Left -->
		<span u="arrowleft" class="jssora01l" style="top: 123px; left: 8px;"></span>
		<!-- Arrow Right -->
		<span u="arrowright" class="jssora01r" style="top: 123px; right: 8px;"></span>
		...
		<!-- Arrow Navigator Skin End -->
	</div>
	
	
</div>

<?php

/* For Debugging only: Remove before Launch!*/
//unset($_SESSION['count']);
/***/

include "footer.php";
?>