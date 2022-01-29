<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kashmir
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="layout layout-basic">
    <?php if ( $post->post_parent ) { ?>
      <div class="breadcrumb">
        <a href="<?php echo get_permalink(    $post->post_parent ); ?>" >
        <?php echo get_the_title( $post->post_parent ); ?>
        </a>
      </div>
    <?php } ?>
    <?php the_title( '<h2>', '</h2>' ); ?>
  </div>
  <div class="layout layout-basic">
    <?php
    the_content();
    wp_link_pages(
      array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kashmir' ),
        'after'  => '</div>',
      )
    );
    ?>
  </div>
</article>
<!-- #post-<?php the_ID(); ?> -->
