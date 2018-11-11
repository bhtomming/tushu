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
      <div class="morel fr"><a href="/news/meta">更多&gt;&gt;</a></div>
    </div>
    <?php print $content ?>
  </div>
</div>
