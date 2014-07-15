<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_contact
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$cparams = JComponentHelper::getParams('com_media');

jimport('joomla.html.html.bootstrap');
$tmpl = JURI::base()."templates/onoffline/";
?>
<script language="javascript">
jQuery( document ).ready(function() {
	submitContactForm = function(){
		jQuery("#contactForm").submit();
	}
});
</script>
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
        <h3>Kontakt</h3>
        <div class="form_contact">
            <form id="contactForm" name="emailForm" method="post" class="form-validate" action="#">
                <label>Navn:</label>
                <input type="text" id="name" name="jform[contact_name]"><br>
                <label>Titel.:</label>
                <input type="text" name="jform[contact_title]" id="title"><br>
                <label>Firma:</label>
                <input type="text" name="jform[contact_company]" id="company"><br>
                <label>Postnr.:</label>
                <input type="text" name="jform[contact_zip]" id="zip" maxlength="4"  class="w90 float_left">
                <label class="w40 p10l">By:</label>
                <input type="text" name="jform[contact_city]" id="by" class="w169 float_left">
                <br class="cb">
                <label>Telefon:</label>
                <input type="text" name="jform[contact_phone]" id="phone"><br>
                <label>Email:</label>
                <input type="text" name="jform[contact_email]" id="email"><br>
                <label>Besked:</label>
                <textarea rows="" cols="" id="text" name="jform[contact_text]"></textarea><br>
                <label>&nbsp;</label>				        
                <a href="javascript:void(0);" onClick="submitContactForm();"><img src="<?php echo $tmpl;?>img/bt_send.jpg" alt=""></a>
                <br class="cb">
                <input type="hidden" name="option" value="com_contact" />
                <input type="hidden" name="task" value="contact.submit" />
                <input type="hidden" name="return" value="<?php echo $this->return_page;?>" />
                <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                <?php echo JHtml::_( 'form.token' ); ?>
            </form>
        </div>
        <div style="line-height:25px;" class="contact_info">
              <?php echo $this->contact->misc;?>
        </div>
        <div class="cb"></div>
    </section>

</div>
