<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php bloginfo('name'); wp_title(' - ',true); ?></title> 
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<meta name="robots" content="index,follow" />

<?php wp_head(); ?>
</head>
<body>				
<div id="wrapper">
	<div id="header">
		<div id="logo"><a href="<?php bloginfo('url'); ?>" rel="start"><img alt="THS N&auml;ringsliv" src="<?=bloginfo('template_directory');?>/images/THS_foot_logo.png" /></a></div>

<?php
if(is_page('start') or is_page_template('page-start.php')) { 
	the_post();
}
?>
		<div id="headerbox">
			<div>
			<!--	<h1><?php _e('V&auml;lkommen'); ?></h1>
				<p><?php _e('till THS N&auml;ringsliv!');?><br />
				<?=nl2br(strip_tags(get_the_content()))?></p>
			--></div>
		</div>

	</div>
	<br style="clear: both;" />
	<div id="menubg">

        <div> <ul class="soc">
        	 <li>
				 <a href="https://www.facebook.com/pages/THS-N%C3%A4ringsliv/279104938773217" send="true" layout="button_count" width="250" show_faces="false" font=""><img src="<?=bloginfo('template_directory');?>/images/fb.png" alt="Follow THSNaringsliv on Facebook"/></a>
			</li>
             <li >
				<a href="http://www.twitter.com/THSNaringsliv"><img src="<?=bloginfo('template_directory');?>/images/BIRDY.png" alt="Follow THSNaringsliv on Twitter"/></a>
			</li>
			
			
			
            </ul>
        </div>
	</div>

	 
	
	<div id="menucontainer">
		<?php wp_nav_menu(); ?>
		   	</div>



	


