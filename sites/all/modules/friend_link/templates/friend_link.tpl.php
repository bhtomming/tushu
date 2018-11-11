<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\5 0005
 * Time: 17:53
 * QQ: 233238526
 */

?>

<div id="searchresults" class="clearfix">
   <?php foreach($rows as $link){?>
    <div class="feedback">
       <div class="email"><?php print $link['site_name']?></div>
      <?php print $link['site_type']?>
       <div class="created"><?php print $link['link']?></div>
       </div>
    <?php }?>
</div>
