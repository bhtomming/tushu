<?php
/**
 * Author: 烽行天下
 * Date: 2018\10\31 0031
 * Time: 11:29
 * QQ: 233238526
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?>  clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
    </header>
  <?php endif; ?>
  <div class="col-md-12">
    <?php if ($display_submitted): ?>
      <p class="submitted">
        <?php print $user_picture; ?>
        <?php print $submitted; ?>
      </p>
    <?php endif; ?>
    <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
    ?>
  </div>
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
