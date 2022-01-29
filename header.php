<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kashmir
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header>
  <div class="canvas">
    <button id="menu-button" class="menu-button">
      <img src="<?php echo get_template_directory_uri(); ?>/img/icon-menu-blue.svg" alt="Menu" class="nav-icon">
    </button>

    <p class="tagline">
      <?php
        $kashmir_description = get_bloginfo( 'description', 'display' );
        if ( $kashmir_description || is_customize_preview() ) :
          echo $kashmir_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
        endif; ?>
    </p>

    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="chop">
      <h1>Kevin Kelly</h1>
    </a>
    <nav id="menu" class="nav-site">
      <?php
        $menuParameters = array(
          'theme_location'  => 'header',
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
</header>
