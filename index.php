<?php
/**
 * The main template file.
 *
 * @package knowingberlin
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->

  <?php get_template_part('src/components/head/head'); ?>

<body <?php body_class(); ?>>
  <div class="site">

    <?php get_template_part('src/components/layout/header'); ?>
    <?php get_template_part('src/components/layout/content'); ?>
    <?php get_template_part('src/components/layout/footer'); ?>

  </div>
</body>
</html>
