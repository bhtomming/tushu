<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\6 0006
 * Time: 14:44
 * QQ: 233238526
 */
?>


<?php print $wrapper_prefix; ?>
<?php if (!empty($title)) : ?>
  <div class="tit fl"><?php print $title; ?></div>
  <div class="morel fr"><a href="taxonomy/term/">更多>></a></div>
<?php endif; ?>
<?php print $list_type_prefix; ?>
<?php foreach ($rows as $id => $row): ?>
  <li class="<?php print $classes_array[$id]; ?>"><?php print $row; ?></li>
<?php endforeach; ?>
<?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
