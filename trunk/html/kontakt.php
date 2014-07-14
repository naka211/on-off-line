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
		    	<h3>Kontakt</h3>
		        <div class="form_contact">
		    		<form id="emailForm" name="emailForm" method="post" class="form-validate" action="#">
						<label>Navn:</label>
				        <input type="text" id="name" name="name"><br>
				        <label>Titel.:</label>
				        <input type="text" name="title" id="title"><br>
				        <label>Firma:</label>
				        <input type="text" name="company" id="company"><br>
				        <label>Postnr.:</label>
				        <input type="text" name="zip" id="zip" class="w90 float_left">
				        <label class="w40 p10l">By:</label>
				        <input type="text" name="by" id="by" class="w169 float_left">
				        <br class="cb">
				        <label>Telefon:</label>
				        <input type="text" name="phone" id="phone"><br>
				        <label>Email:</label>
				        <input type="text" name="email" id="email"><br>
				        <label>Besked:</label>
				        <textarea rows="" cols="" id="text" name="text"></textarea><br>
				        <label>&nbsp;</label>				        
				        <a href="#"><img src="img/bt_send.jpg" alt=""></a>
				        <br class="cb">
					</form>
          		</div>
          		<div style="line-height:25px;" class="contact_info">
	          		<p>On Off Line <br>
					Farvergade 27 D, 2. Sal<br>
					1463 København K <br>
					(+45) 28 11 24 23<br>
					</p>  
          		</div>
		        <div class="cb"></div>
		  	</section>

		</div>
		<?php require_once('footer.php'); ?>
	</div>
</body>
</html>
