<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kashmir
 */

?>

<footer>
  <div class="footer-nav">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="chop"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-kk-white.svg" alt="Home"></a>
    <nav id="menu" class="nav-site">
      <?php
        $menuParameters = array(
          'theme_location'  => 'footer',
          'container'       => false,
          'echo'            => false,
          'items_wrap'      => '%3$s',
          'depth'           => 0,
        );
        echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
        get_template_part( 'template-parts/search' );
      ?>
    </nav>
  </div>
  <div class="footer-social">
    <nav>
      <a href="https://www.twitter.com/kevin2kelly/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter-white.svg" class="nav-icon"
          alt="Follow kevin2kelly on Twitter"></a>
      <a href="https://www.youtube.com/c/KevinKelly"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-youtube-white.svg" class="nav-icon"
          alt="Subscribe on YouTube"></a>
      <a href="https://www.instagram.com/kevin2kelly/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-instagram-white.svg" class="nav-icon"
          alt="Follow kevin2kelly on Instagram"></a>
      <a href="https://www.facebook.com/kevin2kelly/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook-white.svg" class="nav-icon"
          alt="Follow kevin2kelly on Facebook"></a>
      <a href="https://feedpress.me/thetechnium"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-rss-white.svg" class="nav-icon"
          alt="Subscribe to the feed"></a>
    </nav>
    <nav>
      <a href="https://creativecommons.org/licenses/by/4.0/"><img src="<?php echo get_template_directory_uri(); ?>/img/icon-cc-white.svg"
          class="inline-icon"></a>
      <a href="/disclosure">Disclosure</a>
      <a href="/contact">Contact</a>
    </nav>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
