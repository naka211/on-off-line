<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once('head.php'); ?>
</head>

<body>
	<div id="page_margins" class="p5t">
		<div id="page" class="mh640">
			<section id="header">
		        <p class="float_left p20l"><a href="index.php"><img src="img/logo.jpg"></a></p>
		        <div class="cb"></div>
		        <div class="flash_top"><a href="#"><img src="img/lineshow.gif"></a></div>
		    </section>

		    <?php require_once('nav.php'); ?>

		    <section id="main" class="p50t p45l p20r">
		    	<h3>Video</h3>
		        <div class="w142 float_left osX">
					<div id="scrollbar1">
				      	<div class="scrollbar">
					        <div class="track">
					          <div class="thumb">
					            <div class="end"></div>
					          </div>
					        </div>
				      	</div>
					    <div class="viewport">
					      	<div class="overview">
								<ul class="list_video">
				  					<li><a href="#"><img width="109" height="62" src="img/4_thumb.jpg" alt="Ikano"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/14_thumb.jpeg" alt="Krysters Kartel"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/15_thumb.jpeg" alt="ATEA TV Reklame"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/16_thumb.jpeg" alt="Projekt Frivillig"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/17_thumb.jpeg" alt="SBS Promo - 4 Stjernsmiddag"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/18_thumb.jpeg" alt="Stofa instruktionsfilm"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/19_thumb.jpeg" alt="HP Elitebook"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/20_thumb.jpeg" alt="ATEA - Lokkeduen"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/21_thumb.jpeg" alt="Max grading demo"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/22_thumb.jpeg" alt="ATEA - viral"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/23_thumb.jpeg" alt="ISS - FM Award 2011"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/24_thumb.jpeg" alt="SKUM intro"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/25_thumb.jpeg" alt="Adidas F50"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/26_thumb.jpeg" alt="Aqoola"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/27_thumb.jpeg" alt="ATEA - International"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/28_thumb.jpeg" alt="ATEA Telekonference"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/29_thumb.jpeg" alt="ISS - Stræk Ud"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/30_thumb.jpeg" alt="Statens Center for Kompetenceudvikling - Personlig Udvikling"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/31_thumb.jpeg" alt="Statens Center for Kompetenceudvikling - HK"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/32_thumb.jpeg" alt="Statens Center for Kompetenceudvikling - Læs Godt"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/33_thumb.jpeg" alt="Talking Head"></a></li>
									<li><a href="#"><img width="109" height="62" src="img/34_thumb.jpeg" alt="En Torn i Øjet - Trailer"></a></li>
				             	</ul>
							</div>
						</div>
					</div>
		        </div>

		        <div class="txt_content">		           
	                <div id="player1">	
	                	<iframe width="410" height="231" frameborder="0" src="http://player.vimeo.com/video/25453367?title=0&amp;byline=0&amp;portrait=0"></iframe>
	                </div>
		        </div>

		        <div class="video_info">
					<p>Ikano Bank</p>
		        </div>

		        <div class="cb"></div>
		  	</section>

		</div>
		<?php require_once('footer.php'); ?>
		<script>
			$(document).ready(function() {
				$('#scrollbar1').tinyscrollbar();
			});
		</script>
		
	</div>
</body>
</html>
