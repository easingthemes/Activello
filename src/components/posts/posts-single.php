<?php while ( have_posts() ) : the_post(); ?>

  <?php get_template_part( 'src/components/post/post', 'single' ); ?>

  <?php
    // If comments are open or we have at least one comment, load up the comment template
  if ( comments_open() || '0' != get_comments_number() ) :
    comments_template('/src/components/comments/comments.php');
    endif;
  ?>

  <?php activello_post_nav(); ?>

<?php endwhile;
wp_reset_query(); // end of the loop. ?>
