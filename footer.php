<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 */
?>
</div><!-- .site-content -->
<div class="clear"></div>
<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-sm-2 col-sm-offset-1">
                <div class="footer-nav">
                    <h4>About ownCloud</h4>
                    <ul id="menu-about" class="menu">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'about',
                            'menu_id'        => 'menu-about',
                            'items_wrap' => '%3$s',
                            'container'=> false
                        ) ); ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <div class="footer-nav">
                    <h4>Resources</h4>
                    <ul id="menu-support-and-documentation" class="menu">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'resources',
                            'menu_id'        => 'menu-support-and-documentation',
                            'items_wrap' => '%3$s',
                            'container'=> false
                        ) ); ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2 col-sm-offset-2">
                <div class="footer-nav">
                    <h4>Interact</h4>
                    <ul id="menu-interact" class="menu">
                        <?php wp_nav_menu( array(
                            'theme_location' => 'interact',
                            'menu_id'        => 'menu-interact',
                            'items_wrap' => '%3$s',
                            'container'=> false
                        ) ); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 footer-text">
                <p><font face="sans"> &copy; </font> 2017 ownCloud</p>
            </div>
        </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
