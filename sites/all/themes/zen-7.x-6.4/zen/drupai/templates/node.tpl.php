<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
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

      

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
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
   <?php if(!$variables['teaser']): ?>
   上一篇:
   <?php $p_node = pn_node($node->nid,$node->type,'p'); 
		print l($p_node['title'],'node/'.$p_node['nid'],array('html'=>true));
   ?>
   下一篇:
   <?php $n_node = pn_node($node->nid,$node->type,'n');
		print l($n_node['title'],'node/'.$n_node['nid'],array('html'=>true));
   ?>
   <?php endif; ?>
	</div>
  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
