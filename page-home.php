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

<section class="summary" id="about">
  <div class="layout layout-summary">
    <?php show_post('home/about'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/about-gallery'); ?>
  </div>
</section>

<section class="summary" id="futurism">
  <div class="layout layout-summary">
    <?php show_post('home/futurism'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/futurism-gallery'); ?>
  </div>
</section>

<section class="summary" id="cooltools">
  <div class="layout layout-summary">
    <?php show_post('home/cooltools'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/cooltools-gallery'); ?>
  </div>
</section>

<section class="summary" id="art">
  <div class="layout layout-summary">
    <?php show_post('home/art'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/art-gallery'); ?>
  </div>
</section>

<section class="summary" id="archives">
  <div class="layout layout-summary">
    <?php show_post('home/archives'); ?>
  </div>
  <div class="layout-gallery">
    <?php show_post('home/archives-gallery'); ?>
  </div>
</section>

<div class="photo-wide">
  <?php show_post('home/outro-photo'); ?>
</div>

<?php get_footer(); ?>