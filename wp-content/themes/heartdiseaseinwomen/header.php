<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=en><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang=en><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang=en><![endif]-->

<!--[if gt IE 8]><!--> <html class=no-js lang=en> <!--<![endif]-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv=X-UA-Compatible content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width">
<title>
<?php
	global $page, $paged;

	wp_title( '|', true, 'right' );

	bloginfo( 'name' );
 
 	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );
	?>
</title>
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />
<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('stylesheet_directory');?>/favicon.ico" />
<script src="<?php bloginfo('stylesheet_directory');?>/js/libs/modernizr-2.5.3.min.js"></script>
<?php wp_head();?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36523926-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<?php if(!is_page('privacy-policy')){?>
<!-- footar tag "precisionmedia_heartdiseaseinwomen.com_footar" (pub id "44") -->
<script type="text/javascript" src="http://ads.footar.com/EAS_tag.1.0.js"></script>
<script type="text/javascript" src="http://ads.footar.com/eas?cu=20037;cre=mu;js=y;target=_blank"></script>
<?php }?>
  <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
  <div id=MainBg>
  <header> 
    
    <div id=TopWrapper>
      <div id=TopBg>
        <div id=TopMainWrapper>
          <div id=TopAds><?php if(!is_page('privacy-policy')){  dynamic_sidebar('top-ad'); }?></div>
          <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/spacer.gif" alt="" id=Logo /></a> </div>
      </div>
    </div>
     
    
    <div id=NavWrapper>
      <div id=NavMainWrapper>
        <div id=NavLeft class=fl_left>
           <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_id' => 'nav',  'fallback_cb'=> 'false'));?>
        </div>
        <div  id=SearchIconWrapper class=fl_right>
          <div id=SocialIconTopWrapper class=fl_left><span class=st_twitter_customtop></span><span class=st_facebook_customtop></span><a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" class=rss_customtop /></a> <span class=st_sharethis_customtop></span> </div>
          <div id=SearchWrapper class=fl_left>
             <?php get_search_form();?>
          </div>
        </div>
        <div class=clear></div>
      </div>
    </div>
     
    
  </header>
  <div role=main>
    <div id=BannerContentWrapper> 
<?php if(is_home() || is_front_page()){?>
        <div id="BannerWrapper">
        <div id="BannerMainWrapper">
        
        <?php 
        $b = 1;
		
		$featured_banner    = get_post_meta($post->ID, 'featured_banner', true);
		
		$args = array(
		'orderby' => 'date',
		'order' => 'DESC',
		'posts_per_page' => 3,
		'meta_query' => array(
						array(
						'key' => 'featured_banner',
						'value' => '1'
						)
							)
				);
		query_posts($args);
		
		
		if( have_posts() ): while( have_posts() ):the_post();
		$TheBannerExcerpt = substr(get_the_excerpt(), 0,69);
		?>
        <div class="BannerArticleBox fl_left <?php if($b == 1) {echo 'first-child';}elseif($b == 3) {echo 'last-child';}?>  <?php if($b > 3) {echo 'none';}?>">
            <div class=BannerArticleImg><?php BannerImage(); ?> </div>
            <div class=BannerArticleText>
              <div class=BannerArticleTextTitle><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
            </div>
          </div>
		<?php $b++; ?>
        <?php endwhile;?>
        <?php endif?>
        <?php  wp_reset_query(); ?>
        </div>
        </div>
        <?php }?>
      
       
      
      <div id=ContentWrapper>
        <div id=ContentPadding>
          <div id=ContentLeft class="fl_left <?php if(!is_home()){?>InnerPage<?php }?>">
			<?php if(!is_page('privacy-policy') && !is_page('videos') ){?>
                <div class="videowrapper">
                <?php dynamic_sidebar('video-widget');?> 
                </div>
            <?php }?>        