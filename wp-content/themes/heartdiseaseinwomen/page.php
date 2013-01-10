<?php get_header();?>
<?php if (have_posts()) : while (have_posts()) : the_post();?>
<div class=ArticleBox>
            <div>
              <h1 class="single"><?php the_title(); ?></h1>              
              <div class=clear></div>
               <div class="isPage"> <?php the_content();?></div>
            <div class=clear></div>
          </div>
            </div>
<?php endwhile;?>
<?php endif?>
<?php get_footer();?>
