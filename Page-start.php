<?php
/*
Template Name: page-start.php
*/
date_default_timezone_set("Europe/Stockholm");
?>
<?php get_header(); ?>


	
<div id="body">
		<div id="nyheter">
			<ul >
			<?php
			$items = array();
			
			query_posts(array('post_type' => 'post', 'category_name' => 'startsida', 'posts_per_page' => 10));
			if ( have_posts() ) : while ( have_posts() ) : the_post(); 
			
			$sorttime = strtotime(get_the_time("r"));
			$items[$sorttime]['type'] = "post";
			$items[$sorttime]['title'] = get_the_title();
			$items[$sorttime]['title_attribute'] = the_title_attribute('echo=0');
			$items[$sorttime]['link'] = get_permalink();
			$items[$sorttime]['date'] = get_the_time('j M Y');
			$items[$sorttime]['thumbnail'] = get_the_post_thumbnail();
			
			endwhile;
			endif;

			wp_reset_query();
			
			$itemcount = 0;
			if(!empty($items)) : foreach ($items as $item):
			if ($itemcount >= 9) break;
			?>
			<div class="item">
				<div class=""> <li>
					<a href="<?php echo $item['link'] ?>" rel="bookmark" title="<?php echo $item['title_attribute']; ?>">
						<?php
						if(!empty($item['thumbnail'])) {
							echo $item['thumbnail'];
						} else {
							echo '<img  src="' . get_bloginfo('template_directory') . '/images/no_thumb.png" alt="' . $item['title_attribute'] . '" title="' . $item['title_attribute'] .'" />';
						}
						?>

						<span class="date-hover"><span>Läs mer</span></span>
					</a>
				</div><!--disable title
				<h3><a href="<?php echo $item['link'] ?>" rel="bookmark" title="<?php echo $item['title_attribute']; ?>"><?php echo $item['title']; ?></a></h3>
				 -->
			</div>
			<?php
			$itemcount++;
			endforeach;	else:
			?>
			<h3><?php _e('Just nu finns inga nyheter.');?></h3><p><?php _e('G&aring; med i');?> <a href="/maillista"><label for="email"><?php _e('maillistan');?></label></a> <?php _e('eller prenumerera p&aring;');?> <a href="<?php bloginfo('rss2_url'); ?>"><?php _e('RSS-feeden');?></a> <?php _e('f&ouml;r att f&aring; informationen f&ouml;rst.');?></p>
			<?php
			endif;
			?>
		</li></div> 
<div><!--disable left sidebar
		<div id="ads"><h2>Sociala medier</h2>
                <ul>
				<li><h2>Facebook</h2>
					<div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#appId=109673335802290&amp;xfbml=1"></script><fb:like href="https://www.facebook.com/pages/THS-N%C3%A4ringsliv/279104938773217" send="true" layout="button_count" width="250" show_faces="false" font=""></fb:like>
				</li>
				<li>
					<h2>Twitter</h2>
				<a href="http://www.twitter.com/THSNaringsliv"><img src="http://twitter-badges.s3.amazonaws.com/follow_us-b.png" alt="Follow THSNaringsliv on Twitter"/></a>
				</li>
				
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
				<?php endif; ?>
			</ul>
			
			
		
			<br />
			<div class="line"></div>	
			<h2><?php _e('I samarbete med');?></h2>
		
			
			<div class="ads_logo">
			<a href="http://www.sverigesingenjorer.se/Sidor/default.aspx" target="_blank"><img alt="Sveriges Ingenjörer" width="100" src="<?=bloginfo('template_directory');?>/images/si_logo.png" /></a>
			</div>
			
			<div class="ads_logo">
				<a href="http://www.thskonsulter.se" target="_blank"><img alt="Tekniska Högskolans Studentkonsulter" width="200" src="http://www.thsnaringsliv.se/wp-content/uploads/2014/10/THSK.png" /></a>
			</div>
			
			<div class="ads_logo">
				<a href="http://podio.com" target=_blank><img alt="Podio" width="100" src="<?=bloginfo('template_directory');?>/images/podio_logo.png"/></a><br />
				<br /><a id="info_link" href="http://www.thsnaringsliv.se/podio">About Podio</a>
			</div>
			<div class="ads_logo">
				<a href="http://podda.se" target=_blank><img alt="Podda" width="100" src="http://podda.se/system/users/avatars/000/000/001/original/podda.JPG?1373316033"/></a>¨
			</div>
		</div>	

       --></ul>  </div>
	</div>	

<?php get_footer(); ?>
