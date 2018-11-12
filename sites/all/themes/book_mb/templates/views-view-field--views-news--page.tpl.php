<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\12 0012
 * Time: 17:33
 * QQ: 233238526
 */


$nodes = $field->view->result;
foreach ($nodes as $node){

  print $node->field_title.'<br/>';
  print $node->field_body[0]["raw"]["safe_value"].'<br/>' ;
}

