<header class="page-header">
  <h1 class="page-title">
    <?php printf( esc_html__( 'Search Results for: %s', 'activello' ), '<span>' . get_search_query() . '</span>' ); ?>
  </h1>
</header><!-- .page-header -->

<div class="posts">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php get_template_part('src/components/post/post'); ?>
  <?php endwhile; ?>
</div>

<?php activello_paging_nav(); ?>
