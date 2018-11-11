<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\11 0011
 * Time: 15:09
 * QQ: 233238526
 */
?>

<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php print render($title_prefix); ?>
  <div class="newsList">
    <div class="titl clear">
      <div class="tit fl <?php print $title_attributes; ?>">
        <?php if ($block->subject): ?>
          <?php print $block->subject ?>
        <?php endif;?>
      </div>
      <?php print render($title_suffix); ?>
      <div class="morel fr"><a href="/news/dynamic">更多&gt;&gt;</a></div>
    </div>
    <?php print $content ?>
  </div>
</div>
