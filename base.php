<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

// Strings used throughout ownCloud.org.
require get_template_directory().'/theme-setup.php';

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="main">
          <?php include Wrapper\template_path(); ?>

          <?php  // Get the providers on the providers page
          if(is_page('providers') && $PROVIDER) { require get_template_directory().'/template-parts/providers.php'; } ?>

          <?php  // Get the providers on the providers page
          if(is_page('faq') && $FAQ) { require get_template_directory().'/template-parts/faq.php'; } ?>

          <?php  // Get the content widget area on specific pages/templates
          if (is_page('homepage')) {
           if ( is_active_sidebar( 'sidebar-main-content' ) ) { ?>
           <div id="sidebar-main-content">
            <?php dynamic_sidebar( 'sidebar-main-content' ); ?>
           </div>
          <?php }}; ?>

          <?php //Load the social icons if activated
          if(get_field('social_icons')) { get_template_part('template-parts/social-icons'); } ?>

        </main><!-- /.main -->
        <?php if (Setup\display_sidebar()) : ?>
          <aside class="sidebar">
            <?php include Wrapper\sidebar_path(); ?>
          </aside><!-- /.sidebar -->
        <?php endif; ?>

      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      include(locate_template('templates/footer.php'));
      wp_footer();
    ?>


    <?php if(is_page('install')) { require get_template_directory().'/template-parts/install-instructions.php'; } ?>

  </body>
</html>
