<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\11 0011
 * Time: 15:40
 * QQ: 233238526
 */
?>
<div class="links fl">
  <?php if ($block->subject): ?>
    <div class="tit"><?php print $block->subject ?></div>
    <span class="line"></span>
  <?php endif; ?>
  <?php print $content ?>
</div>
