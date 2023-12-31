<?php
/**
 * @file
 * Template file for field_slideshow_pager
 *
 *
 */
?>
<?php if ($pager == 'number') : ?>

  <div id="field-slideshow-<?php print $id; ?>-pager" class="field-slideshow-pager slides-<?php print count($items); ?>"></div>

<?php elseif ($pager == 'image' || $pager == 'carousel') : ?>

  <?php if ($pager == 'carousel') : ?>
    <div id="field-slideshow-<?php print $id; ?>-carousel-wrapper" class="field-slideshow-carousel-wrapper">
      <a href="#" class="carousel-prev">«</a>
      <div id="field-slideshow-<?php print $id; ?>-carousel" class="field-slideshow-carousel">
  <?php endif; ?>

  <?php print $thumbnails; ?>

  <?php if ($pager == 'carousel') : ?>
      </div>
      <a href="#" class="carousel-next">»</a>
    </div>
  <?php endif; ?>

<?php endif; ?>