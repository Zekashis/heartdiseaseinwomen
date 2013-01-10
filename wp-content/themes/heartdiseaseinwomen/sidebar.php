<div id=ContentRight class="fl_right <?php if(!is_home()){?>InnerPage<?php }?>">
          <?php if(!is_page('privacy-policy')){?> <div class=ads-box><?php dynamic_sidebar('top-right-sidebar');?></div><?php }?>
        <div id=SideArticleHeader> Featured Articles </div>
    <div id=SideArticleBox>
                <?php $i = 1;?>
                <?php
                $featured_article    = get_post_meta($post->ID, 'featured_article', true);
                $args = array(
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => 3,
                'meta_query' => array(
								array(
								'key' => 'featured_article',
								'value' => '1'
								)
									)
						);
                query_posts($args);
                
                if( have_posts() ): while( have_posts() ):the_post();
				$TheSidebarExcerpt = substr(get_the_excerpt(), 0,96);
                ?>
                <div class="SideArticleWrapper  <?php if($i == 1) {echo ' first-child';}elseif($i == 3) {echo 'last-child';}?>">
                <div class=SideArticleWrapperPadding>
                  <div class="SideArticleImg fl_left"><a href="<?php echo get_permalink($post->ID)?>"><?php FeaturedImage();?></a></div>
                  <div class="SideArticleText fl_right">
                    <div class=SideArticleTitle> <a href="<?php echo get_permalink($post->ID)?>"><?php the_title();?></a></div>
                     <?php echo strip_tags($TheSidebarExcerpt); ?>... 
                     <?php echo '<a class=readmore href="'. get_permalink($post->ID) . '">Read More</a>'?>
                    </div>
                  <div class=clear></div>
                </div>
              </div>
                <?php $i++; ?>
                <?php endwhile; ?>
                <?php else:?>
                    <div class="SideArticleWrapper">
                    <h3>No Featured Post </h3>
                    </div>
            <?php endif;?>
            <?php wp_reset_query(); ?>
</div>
        <?php if(!is_page('privacy-policy')){?><div class=ads-box><?php dynamic_sidebar('middle-right-sidebar');?></div><?php }?>
        <?php if(!is_page('privacy-policy')){?><div class=ads-box><?php dynamic_sidebar('bottom-right-sidebar');?></div><?php }?>
        </div>
