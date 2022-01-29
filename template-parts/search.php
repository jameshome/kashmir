<?php
/**
 *
 * @link https://programmablesearchengine.google.com/about/
 *
 * @package kashmir
 */

?>
<button class="nav-search-button"></button>
<form class="nav-search" action="https://www.google.com/cse" autocomplete="off">
  <input class="nav-search-input" type="text" name="q" placeholder="Search..." required>
  <div class="nav-search-close"></div>
  <input type="hidden" name="cx" value="001456274107331321700:gs2cizbkq_k">
  <input type="hidden" name="cof" value="FORID:1">
  <input class="nav-search-submit" type="image" src="<?php echo get_template_directory_uri(); ?>/img/icon-search-blue.svg" alt="Search">
</form>
