<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.protostar
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/onoffline/";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Le styles -->
	<link href="<?php echo $tmpl;?>css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $tmpl;?>css/tinyscrollbar.css" rel="stylesheet">
	<link href="<?php echo $tmpl;?>css/style.css" rel="stylesheet">

	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="shortcut icon" href="<?php echo $tmpl;?>favicon.ico">

	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/menu.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.touchdrag.js"></script>
	<script type="text/javascript" src="<?php echo $tmpl;?>js/jquery.tinyscrollbar.js"></script>
    
	<jdoc:include type="head" />
	
</head>

<body>
    <div id="page_margins" class="p5t">
        <jdoc:include type="component" />

        <footer id="footer">
            <span class="float_left">On Off Line - Farvergade 27 D, 2. Sal - 1463 København K  - +45 28 11 24 23  - <a href="mailto:morten@onoffline.dk">morten@onoffline.dk</a></span>
            <span class="float_right"></span>
            <p class="cb"></p>
        </footer>
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
