<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('head.php'); ?>
</head>

<body>
	<div id="page_margins" class="p5t">
		<div id="page" class="mh640">
			<section id="header">
		        <p class="float_left p20l"><a href="index.php"><img src="img/logo.jpg" id="logo"/></a></p>
		        <div class="float_right" style="padding-right:35px;padding-top:27px;">
		        	<a href="https://www.facebook.com/onoffline.dk"><img src="img/btn-fb.jpg" alt=""></a>
				</div>
		        <div class="cb"></div>
		    </section>

		    <section id="main">
		    	<div id="bgr"  style="height: 560px;position: relative;width: 848px;" >
		            <img id="bgrim" src="img/3.gif" />
		            <div class="menu_hvem font_nenu"><a href="hvem.php">Hvem er On Off Line</a></div>
					<div class="menu_hvad font_nenu"><a href="hvad.php">Hvad kan On Off Line</a></div>
					<div class="menu_udstyr font_nenu"><a href="udstyr.php">Udstyr</a></div>
					<div class="menu_kontakt font_nenu"><a href="kontakt.php">kontakt</a></div>
					<div class="menu_cases font_nenu"><a href="cases.php">Cases</a></div>
					<div class="menu_referencer font_nenu"><a href="anbefalinger.php">Anbefalinger</a></div>
					<div class="menu_showreel font_nenu show"><a href="showreel.php">Showreel</a></div>
		      	</div>
		  	</section>
		</div>

		<?php require_once('footer.php'); ?>
	</div>

	<script type="text/javascript">
		$('#bgrim2').hide();
		var tick = function() {
			setTimeout('waitingshowlink()',1000);
		}
		var waitingshowlink = function() {
		   	$('#bgr div').removeClass("hide").addClass("show");
		}		   
		$(document).ready(function() {
			$('#bgr div').addClass("hide");
			var loadTimeout = setTimeout(tick, 1000);
		});
	</script>

</body>
</html>
