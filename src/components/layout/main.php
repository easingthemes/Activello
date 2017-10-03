<?php
/**
 * Layout: main.
 *
 * @package knowingberlin
 */
?>
<?php
  global $post;
    if ( is_singular() && get_post_meta( $post->ID, 'site_layout', true ) ) {
      $layout_class = get_post_meta( $post->ID, 'site_layout', true );
    } else {
      $layout_class = get_theme_mod( 'activello_sidebar_position' );
    }
?>
<?php
  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
  if (wp_attachment_is_image()) {
      $pageType = 'image';
  } elseif (is_search()) {
      $pageType = 'search';
  } elseif (is_page()) {
      $pageType = 'page';
  } elseif (is_archive()) {
      $pageType = 'archive';
  } elseif (is_single()) {
    $pageType = 'single';
  } else {
    $pageType = '';
  }
?>

<main class="layout__main <?php echo 'page-' . $paged;?> <?php echo activello_main_content_bootstrap_classes(); ?> <?php echo $layout_class; ?>" role="main">

  <?php if ( is_404() ) : ?>
     <?php get_template_part('src/components/layout/404'); ?>
  <?php elseif (have_posts()) : ?>
    <?php get_template_part('src/components/posts/posts', $pageType); ?>
  <?php else : ?>
    <?php get_template_part('src/components/post/post', 'none'); ?>
  <?php endif; ?>

</main>
