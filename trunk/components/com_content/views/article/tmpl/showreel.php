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
        <p class="float_left p20l"><a href="index.php"><img src="<?php echo $tmpl;?>img/logo.jpg"></a></p>
        <div class="cb"></div>
        <div class="flash_top"><a href="index.php"><img src="<?php echo $tmpl;?>img/lineshow.gif"></a></div>
    </section>

    <nav class="font_nenu" id="nav_main smoothmenu1">
        {module Sub menu}
    </nav>

    <section id="main" class="p50t p45l p20r">
        <h3>showreel</h3>
        <div style="width:770px;">
            <iframe width="770" height="433" frameborder="0" allowfullscreen="" mozallowfullscreen="" webkitallowfullscreen="" src="<?php echo strip_tags($this->item->introtext);?>"></iframe>
            <?php echo $this->item->fulltext;?>
        </div>
        <div class="cb"></div>
    </section>

</div>