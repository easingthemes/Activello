<div class="posts">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('src/components/post/post'); ?>
  <?php endwhile; ?>
</div>

<?php activello_paging_nav(); ?>
