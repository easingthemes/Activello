<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <div class="row">
      <div class="site-navigation-inner col-sm-12">
        <div class="navbar-header">
          <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only"><?php _e( 'Toggle navigation', 'activello' ); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php activello_header_menu(); // main navigation ?>

        <?php get_template_part('src/components/search/search', 'header'); ?>
      </div>
    </div>
  </div>
</nav><!-- .site-navigation -->
