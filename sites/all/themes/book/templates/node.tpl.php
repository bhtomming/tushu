<?php
/**
 * Author: 烽行天下
 * Date: 2018\10\31 0031
 * Time: 11:29
 * QQ: 233238526
 */
?>

    <div class="topInfo">
      <?php if (!$page && $title): ?>
        <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <div class="dec clear">
        <p><span>发布时间：<?php print $date; ?></span>来源：<?php print user_load($uid)->name; ?></p>
      </div>
    </div>
    <div class="article">
      <?php print render($content); ?>
    </div>
    <div class="link">
      <ul>
        <?php if($pre_node = node_load($node->nid - 1)): ?>
        <li><span>上一篇：</span><a href="/node/<?php print $pre_node->nid; ?>"><?php print $pre_node->title; ?></a></li>
        <?php endif; ?>
        <?php if($next_node = node_load($node->nid + 1)): ?>
        <li><span>下一篇：</span><a href="/node/<?php print $next_node->nid; ?>"><?php print $next_node->title; ?></a></li>
        <?php endif; ?>
      </ul>
    </div>

