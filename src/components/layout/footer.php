<?php
/**
 * Layout: footer.
 *
 *
 * @package activello
 */
?>

<footer id="colophon" class="footer site-footer" role="contentinfo">
  <div class="site-info container">
    <div class="row">
      <?php if ( ! get_theme_mod( 'footer_social' ) ) {
        activello_social_icons();
      } ?>
      <div class="copyright col-md-12">
        <?php echo esc_html( get_theme_mod( 'activello_footer_copyright', 'Activello' ) ); ?>
        <?php activello_footer_info(); ?>
      </div>
    </div>
  </div><!-- .site-info -->
  <?php get_template_part('src/components/scroll-to-top/scroll-to-top'); ?>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
