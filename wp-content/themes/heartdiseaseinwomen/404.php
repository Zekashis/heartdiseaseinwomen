<?php get_header();?>

<div class=ArticleBox>
  <div>
    <h1 class="single">Page Not Found</h1><br />

    <div class=clear></div>
    <div class="isPage">Kindly check if you typed in the correct URL address or browse the list of links below for the page you're looking for:<br />
      <ul class="list-pages">
        <li><a href="<?php bloginfo('url');?>">Home</a></li>
        <?php wp_list_pages("title_li=");?>
      </ul>
    </div>
  </div>
  <div class=clear></div>
</div>
<?php get_footer();?>
