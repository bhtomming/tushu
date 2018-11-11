<?php
/**
 * Author: 烽行天下
 * Date: 2018\10\31 0031
 * Time: 11:46
 * QQ: 233238526
 */
?>
<?php print render($title_prefix); ?>
  <?php if ($block->subject): ?>
    <div id="<?php print $block_html_id; ?>" class="links fl <?php print $classes; ?>"<?php print $attributes; ?> >
      <div class="tit <?php print $title_attributes; ?>"><?php print $block->subject ?></div>
      <span class="line"></span>
    </div>
  <?php endif;?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php print $content ?>
  </div>

