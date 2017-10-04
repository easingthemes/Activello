<header id="masthead" class="site-header" role="banner">

  <?php get_template_part('src/components/navigation/navigation'); ?>

  <div class="container">

    <?php get_template_part('src/components/language-switcher/language-switcher'); ?>

    <?php get_template_part('src/components/logo/logo'); ?>

    <?php if ( ! is_front_page() || ! is_home() ) : ?>
    <div id="line"></div>
    <?php endif; ?>

  </div>

</header><!-- #masthead -->
<!-- W3TC-include-css -->
