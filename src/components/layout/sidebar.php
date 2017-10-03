<?php
/**
 * Layout: sidebar
 *
 * @package knowingberlin
 */
?>

<?php
	$show_sidebar = true;
	if ( is_singular() && ( get_post_meta( $post->ID, 'site_layout', true ) ) ) {
		if ( get_post_meta( $post->ID, 'site_layout', true ) == 'no-sidebar' || get_post_meta( $post->ID, 'site_layout', true ) == 'full-width' ) {
			$show_sidebar = false;
		}
	} elseif ( get_theme_mod( 'activello_sidebar_position' ) == 'no-sidebar' ||  get_theme_mod( 'activello_sidebar_position' ) == 'full-width' ) {
		$show_sidebar = false;
	}
?>
<?php if ( $show_sidebar && is_active_sidebar( 'sidebar-1' ) ) : ?>
  <div class="layout__sidebar col-sm-12 col-md-4" role="complementary">
    <?php do_action( 'before_sidebar' ); ?>
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
  </div>
<?php endif; ?>
