<?php get_header();?>
<?php if ( have_posts() ) : ?>

 <h1><?php printf( __( 'Search Results for: %s', 'celebrityappearance' ), '<span>' . get_search_query() . '</span>' ); ?></h1><br />

<?php while ( have_posts() ) : the_post(); ?>
<?php if ( is_search() ) : ?>

<div class=ArticleBox>
            <div><span class=ArticleTimeWrapper>Posted by <?php the_author_posts_link();?> on <?php the_time('l');?> | <?php the_time('F d, Y');?></span>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class=ContentShareThisWrapper> <span class=st_sharethis></span> <span class=st_googleplus></span> <span class=st_twitter></span> <span class=st_facebook></span> </div>
              <div class=clear></div>
               <?php the_excerpt();?>
              <a href="<?php the_permalink(); ?>" class=article-readmore>Read more</a></div>
            
            <div class=clear></div>
          </div>



  <!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
  </div>
  <!-- .entry-content -->
  <?php endif; ?>
  <?php endwhile; ?>
  
  
  <?php else : ?>
  <header><h1>Nothing Found</h1></header>
  <p>Sorry, but nothing matched your search criteria. Please try again with some different keywords.</p>
  <?php endif; ?>

<?php get_footer();?>
>
