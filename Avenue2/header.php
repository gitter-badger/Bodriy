<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/listing.css" media="screen" />	
<link rel="alternate" type="application/rss+xml" title="RSS-лента <?php bloginfo('name'); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php 
wp_enqueue_script('jquery');
wp_enqueue_script('bxslider', get_stylesheet_directory_uri() .'/js/jquery.bxSlider.min.js');
wp_enqueue_script('superfish', get_stylesheet_directory_uri() .'/js/superfish.js');
wp_enqueue_script('effects', get_stylesheet_directory_uri() .'/js/effects.js'); 
?>

<?php wp_get_archives('type=monthly&format=link'); ?>
<?php //comments_popup_script(); // off by default ?>

<?php 
if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
wp_head(); 
?>

</head>
<body>



<div id="masthead">

<div id="head">

<div id="top" class="clearfix"> 
	<div id="blogname">
		<h1><a href="<?php bloginfo('siteurl');?>/" title="<?php bloginfo('name');?>"><?php bloginfo('name');?></a></h1>
	</div>
	
	<div id="contactlist">
		<div class="rphone">
		<span>Звоните</span><br/>
		<p><?php $my_phone =get_option('aven_my_phone'); echo $my_phone ?></p>
		</div>
		<div class="rmail">
		<span>Наш e-mail</span><br/>
		<p><?php $my_mail =get_option('aven_my_email'); echo $my_mail ?></p>
		</div>
	</div>

</div>

<div id="botmenu">
	<?php wp_nav_menu( array( 'container_id' => 'submenu', 'theme_location' => 'primary','menu_class'=>'sfmenu','fallback_cb'=> 'fallbackmenu' ) ); ?>
	<?php include (TEMPLATEPATH . '/searchform.php'); ?>	
</div><!-- END botmenu -->
	
</div>

</div><!--end masthead-->
<div id="wrapper"> 
<div id="casing">
