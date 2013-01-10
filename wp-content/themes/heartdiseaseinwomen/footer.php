
          </div>
         <?php get_sidebar();?>
          <div class=clear></div>
          <div class=ads-box><?php if(!is_page('privacy-policy')){ dynamic_sidebar('bottom-ad'); } ?></div>
        </div>
      </div>
       
    </div>
  </div>
  <footer> 
    
    <div id=FooterWrapper>
      <div id=FooterBg>
        <div id=FooterMainWrapper>
          <div id=FooterLeft class=fl_left>
             <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_id' => 'FooterLinks', 'fallback_cb'=> 'false'));?>
            <div class=clear></div>
            &copy; 2012 <a href="<?php bloginfo('url');?>"><strong><?php bloginfo('name');?></strong></a>. All rights reserved. </div>
          <div id=FooterRight class=fl_right> <span class=st_twitter_custom></span><span class=st_facebook_custom></span><a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/spacer.gif" alt="" class=rss_custom /></a> <span class=st_sharethis_custom></span> </div>
        </div>
      </div>
    </div>
     
    
  </footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script> 
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.1.min.js"><\/script>')</script> 

<script src='<?php bloginfo('stylesheet_directory'); ?>/js/9795bdf.js'></script> 
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js" type="text/javascript"></script> 
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/AvantGardeMdITC.font.js" type="text/javascript"></script> 
<script type="text/javascript">var switchTo5x=true;</script> 
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script> 
<script type="text/javascript">stLight.options({publisher: "ur-9807b2af-993c-b6b3-8974-b899600d96d"}); </script> 
<script type="text/javascript">
	$(document).ready(function(){
	Cufon.replace('#SideArticleHeader',{fontFamily: 'AvantGardeMdITC', textShadow: '0px -1px 0px rgba(0, 0, 0, 0.6)'} );
	Cufon.replace('#nav a', {fontFamily: 'AvantGardeMdITC', hover: { color:'#fff'}});
	Cufon.replace('.SideArticleTitle a, .BannerArticleText a',{fontFamily: 'AvantGardeMdITC'} );
	});
</script> 
 <?php wp_footer();?>
  </body>
</html>