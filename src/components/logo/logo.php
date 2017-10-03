<?php
$show_logo = true;
$show_title = false;
$show_tagline = true;
$logo = get_theme_mod( 'header_logo', '' );
$header_show = get_theme_mod( 'header_show', 'logo-text' );

if ( 'logo-only' == $header_show ) {
	$show_tagline = false;
} elseif ( 'title-only' == $header_show ) {
	$show_tagline = false;
	$show_logo = false;
} elseif ( 'title-text' == $header_show ) {
	$show_logo = false;
	$show_title = true;
}?>

<div id="logo">
	<?php echo is_home() ?  '<h1 class="site-name">' : '<span class="site-name">'; ?>

  <?php

  if ( $show_logo && has_custom_logo() ) {
    the_custom_logo();
  } else { ?>
    <a
      class="navbar-brand"
      href="<?php echo esc_url( home_url( '/' ) ); ?>"
      title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
      rel="home"
    >
      <?php  bloginfo( 'name' ); ?>
    </a>
  <?php } ?>

  <?php echo is_home() ?  '</h1>' : '</span>'; ?><!-- end of .site-name -->

	<?php if ( $show_tagline && get_bloginfo( 'description' ) != '' ) : ?>
		<div class="tagline"><?php bloginfo( 'description' ); ?></div>
	<?php endif; ?>
</div><!-- end of #logo -->
