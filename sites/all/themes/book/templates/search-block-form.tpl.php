<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\2 0002
 * Time: 15:42
 * QQ: 233238526
 */


$search["search_block_form"]= str_replace("请输入您想搜索的关键词。", "搜索公共图书馆的资源", $search["search_block_form"]);

/* add default 'search' value */
$search["search_block_form"] = str_replace('class="form-text"', 'class="searchText fl"  placeholder="搜索公共图书馆的资源"', $search["search_block_form"]);

/* Replace button input type with image  */
$search["submit"]=str_replace('input class="form-submit"', 'class="submitBtn fl"', $search["actions"]);
?>
<select name="">
  <option value="">图书馆之城1</option>
  <option value="">图书馆之城2</option>
  <option value="">图书馆之城3</option>
  <option value="">图书馆之城4</option>
  <option value="">图书馆之城5</option>
</select>
<?php print $search["search_block_form"]; ?>
<div class="searchBtn fl">搜索</div>
<?php print $search["submit"]; ?>
<?php print $search["hidden"]; ?>


