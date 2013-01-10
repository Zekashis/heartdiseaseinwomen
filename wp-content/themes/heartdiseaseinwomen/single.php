<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class=ArticleBox>
              <h1><?php the_title(); ?></h1>
              <div class=ArticleTimeWrapper>Posted by <?php the_author_posts_link();?> on <?php the_time('l');?> | <?php the_time('F d, Y');?></div>
              <div class=ContentShareThisWrapper> <span class=st_sharethis></span> <span class=st_googleplus></span> <span class=st_twitter></span> <span class=st_facebook></span> </div>
              <div> <?php the_content();?></div>
              
              <div class=clear></div>
            </div>

<div class="ArticleBox">
  <div class="ArticleContentWrapper">
    <?php comments_template(); ?>
  </div>
</div>
<?php endwhile;?>
<div class="navigation">
  <div class="fl_right">
    <?php previous_posts_link('Newer Entries &raquo;', 0) ?>
  </div>
  <div class="fl_left">
    <?php next_posts_link('&laquo; Older Entries', 0); ?>
  </div>
  <div class=clear></div>
</div>
<br />
<?php endif?>
<?php get_footer();?>
