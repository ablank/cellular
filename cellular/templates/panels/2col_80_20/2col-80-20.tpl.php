<?php
/**
 * @file
 * Template for a 2 column (80%/20%) panel layout.
 */
/* Variables:
 * $css_id: An optional CSS id to use for the layout.
 *
 *  $content['left']
 *  $content['right']
 */

?>

<div<?php
if (!empty($css_id)): print " id=\"$css_id\"";
endif;

?> class="panels cell">

    <?php if ($content['left']): ?>
    <div class="panel-left cell-80">
    <?php print $content['left']; ?>
    </div>
  <?php endif; ?>

    <?php if ($content['right']): ?>
    <div class="panel-right cell-20">
    <?php print $content['right']; ?>
    </div>
<?php endif; ?>

</div>
