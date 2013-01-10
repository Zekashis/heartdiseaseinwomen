<?php get_header();?>

<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class=ArticleBox>
              <div class="ArticleTextInner fl_right">
			  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class=ArticleTimeWrapper>Posted by <?php the_author_posts_link();?> on <?php the_time('l');?> | <?php the_time('F d, Y');?></div>
			  <?php the_excerpt();?> 
              <a href="<?php the_permalink(); ?>" class="article-readmore fl_left">Read More</a>
              
              <div class="ContentShareThisWrapper fl_right"> <span class='st_sharethis'></span>
<span class='st_facebook'></span>
<span class='st_twitter'></span>
<span class='st_googleplus'></span>
</div>
        <div class="clear"></div>
              </div>
              <div class="ArticleImg fl_left">  <a href="<?php the_permalink(); ?>"><?php PostExcerptImage();?></a></div>
              <div class=clear></div>
              
            </div>
<?php endwhile;?>

<div class="navigation" id="prev-next-btn">
  <div class="fl_right ArticleButton">
    <?php previous_posts_link('Latest Entries &raquo;', 0) ?>
  </div>
  <div class="fl_left ArticleButton">
    <?php next_posts_link('&laquo; Previous Entries', 0); ?>
  </div>
  <div class=clear></div>
</div>
<br />
<?php endif?>
<?php get_footer();?>
