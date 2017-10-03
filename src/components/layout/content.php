<?php
	global $post;
if ( is_singular() && get_post_meta( $post->ID, 'site_layout', true ) ) {
	$layout_class = get_post_meta( $post->ID, 'site_layout', true );
} else {
	$layout_class = get_theme_mod( 'activello_sidebar_position' );
}?>

<div class="content">

	<div class="content__top">
		<?php activello_featured_slider(); ?>
	</div>

	<div class="content__main container">
		<div class="row">
        <?php get_template_part('src/components/layout/main'); ?>
        <?php get_template_part('src/components/layout/sidebar'); ?>
    </div>
  </div>

</div>
