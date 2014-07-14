<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
$tmpl = JURI::base()."templates/onoffline/";
?>
<div id="page" class="mh640">
    <section id="header">
        <p class="float_left p20l"><a href="index.php"><img src="<?php echo $tmpl;?>img/logo.jpg" id="logo"/></a></p>
        <div class="float_right" style="padding-right:35px;padding-top:27px;">
            <a href="https://www.facebook.com/onoffline.dk" target=""><img src="<?php echo $tmpl;?>img/btn-fb.jpg" alt=""></a>
        </div>
        <div class="cb"></div>
    </section>

    <section id="main">
        <div id="bgr"  style="height: 560px;position: relative;width: 848px;" >
            <img id="bgrim" src="<?php echo $tmpl;?>img/3.gif" />
            <?php echo $this->item->text; ?>
        </div>
    </section>
</div>