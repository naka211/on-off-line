<?php

/*
 * @version		$Id: default.php 2.3.0 2014-06-21 $
 * @package		Joomla
 * @copyright   Copyright (C) 2012-2014 MrVinoth
 * @license     GNU/GPL http://www.gnu.org/licenses/gpl-2.0.html
*/

defined('_JEXEC') or die('Restricted access');

$config = $this->config;
$videos = $this->videos;
$header = ( substr(JVERSION,0,3) != '1.5' ) ? 'page_heading' : 'page_title';
$link = "index.php?option=com_allvideoshare&view=video&slg=";
$qs = '';
$qs .= JRequest::getCmd('orderby') ? '&orderby=' . JRequest::getCmd('orderby') : '';
$qs .= JRequest::getInt('Itemid')  ? '&Itemid=' . JRequest::getInt('Itemid') : '';
$row = 0;
$column = 0;
$isResponsive = ($config[0]->responsive == 1) ? 'class="avs_responsive"' : '';

$document = JFactory::getDocument();
$document->addStyleSheet( JRoute::_("index.php?option=com_allvideoshare&view=css"),'text/css',"screen");
$document->addStyleSheet( JURI::root() . "components/com_allvideoshare/css/allvideoshareupdate.css",'text/css',"screen");
$tmpl = JURI::base()."templates/onoffline/";
?>
<script language="javascript">
jQuery( document ).ready(function() {
	loadVideo = function(i){
        jQuery.ajax({
            type: "POST",
            url: "<?php echo JURI::base();?>index.php?option=com_allvideoshare&view=video&task=loadVideo",
            data: { id: i }
        }).done(function( html ) {
            $('#videoPlayer').html(html);
            jQuery('#scrollbar2').tinyscrollbar({sizethumb: 14});
        });
    }
});
</script>
<div id="page" class="mh640">
    <section id="header">
        <p class="float_left p20l"><a href="index.php"><img src="<?php echo $tmpl;?>img/logo.jpg"></a></p>
        <div class="cb"></div>
        <div class="flash_top"><a href="#"><img src="<?php echo $tmpl;?>img/lineshow.gif"></a></div>
    </section>

    <nav class="font_nenu" id="nav_main smoothmenu1">
        {module Sub menu}
    </nav>

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
                            <?php foreach($videos as $video){?>
                            <li><a href="javascript:void(0);" onClick="loadVideo(<?php echo $video->id;?>)"><img width="109" height="62" src="<?php echo $video->thumb;?>" alt="<?php echo $video->title;?>"></a></li>
                            <?php }?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="videoPlayer">
            <div class="txt_content">		           
                <div id="player1">	
                    <iframe width="410" height="231" frameborder="0" src="<?php echo $videos[0]->targeturl;?>"></iframe>
                </div>
            </div>
    
            <div class="video_info">
                <div id="scrollbar2">
                    <div class="scrollbar">
                         <div class="track">
                           <div class="thumb">
                             <div class="end"></div>
                           </div>
                         </div>
                       </div>
                     <div class="viewport">
                        <div class="overview">
                        <?php echo $videos[0]->description;?>
                       </div>
                  </div>
                 </div>
            </div>
        </div>
        <div class="cb"></div>
    </section>
</div>
<script>
    jQuery(document).ready(function() {
        jQuery('#scrollbar1, #scrollbar2').tinyscrollbar({sizethumb: 14});
    });
</script>
<?php 
return;
if($this->params->get('show_'.$header, 1)) : ?>
	<h2> <?php echo $this->escape($this->params->get($header)); ?> </h2>
<?php endif; ?>
<div id="avs_gallery<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>" <?php echo $isResponsive; ?>>
  <?php 
  	if(!count($videos)) echo JText::_('ITEM_NOT_FOUND');
  	for ($i=0, $n=count($videos); $i < $n; $i++) {   
		$clear = ''; 
    	if($column >= $this->cols) {
			$clear  = '<div class="avs_clear"></div>';
			$column = 0;
			$row++;		
		}
		$column++;
		echo $clear;
  ?>
  <div class="avs_thumb" style="width:<?php echo $this->thumb_width; ?>px;" onclick='javascript:location.href="<?php echo JRoute::_($link.$videos[$i]->slug.$qs); ?>"'>
  	<div class="avs_thumb_inner">
        <div class="avs_img_container">
    		<img class="arrow" src="<?php echo JURI::root(); ?>components/com_allvideoshare/assets/play.png" border="0" /> 
    		<img class="image" src="<?php echo $videos[$i]->thumb; ?>" style="width:<?php echo $this->thumb_width; ?>px; height:<?php echo $this->thumb_height; ?>px;" title="<?php echo JText::_('CLICK_TO_VIEW').' : '.$videos[$i]->title; ?>" border="0" /> 
    	</div>
    	<span class="title"><?php echo $videos[$i]->title; ?></span> 
    	<span class="views"><strong><?php echo JText::_('VIEWS'); ?> : </strong><?php echo $videos[$i]->views; ?></span> 
 	 </div>
  </div>
  <?php } ?>
  <div style="clear:both"></div>
</div>
<div id="avs_pagination<?php echo $this->escape($this->params->get('pageclass_sfx')); ?>"><?php echo $this->pagination->getPagesLinks(); ?></div>