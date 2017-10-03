<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'src/components/post/post', 'image' ); ?>

  <?php
  // If comments are open or we have at least one comment, load up the comment template
  if ( get_theme_mod( 'activello_page_comments', 1 ) == 1 ) :
    if ( comments_open() || '0' != get_comments_number() ) :
      comments_template('/src/components/comments/comments.php');
      endif;
    endif;
  ?>

<?php endwhile; ?>
