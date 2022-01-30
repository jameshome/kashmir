<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kashmir
 */

get_header(); 
?>

<div class="caption caption-outer">
  <?php the_content(); ?>
</div>

<?php
  function show_post($path) {
  $post = get_page_by_path($path);
  $content = apply_filters('the_content', $post->post_content);
  echo  $content;
  }
?>

<section class="summary now" id="now">
  <div class="layout layout-summary">
    <?php show_post('home/now'); ?>
  </div>
</section>

<section class="summary" id="screens">
  <div class="layout layout-summary">
    <?php show_post('home/screens'); ?>
  </div>
</section>

<section class="summary" id="books">
  <div class="layout layout-summary">
    <?php show_post('home/books'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/books-gallery'); ?>
  </div>
  <div class="layout layout-more">
    <a href="/books">More books by Kevin</a>
  </div>
</section>

<section class="summary" id="tools">
  <div class="layout layout-summary">
    <?php show_post('home/tools'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/tools-gallery'); ?>
  </div>
</section>

<div class="photo-wide">
  <?php show_post('home/outro-photo'); ?>
</div>

<?php get_footer(); ?>