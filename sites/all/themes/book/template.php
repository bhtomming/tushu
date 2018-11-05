<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\1 0001
 * Time: 11:53
 * QQ: 233238526
 */



function book_menu_link__main_menu($variables)
{
  $element = $variables['element'];
  $sub_menu = '';
  $element['#attributes']['class'] = [];

  if ($element['#below']) {
    // Prevent dropdown functions from being added to management menu so it
    // does not affect the navbar module.

    if (($element['#original_link']['menu_name'] == 'management') && (module_exists('navbar'))) {
      $sub_menu = drupal_render($element['#below']);
    } elseif ((!empty($element['#original_link']['depth'])) && $element['#original_link']['depth'] > 1) {
      // Add our own wrapper.
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="sub">' . drupal_render($element['#below']) . '</ul>';
      $element['#attributes']['class'] = [];
      $element['#localized_options']['html'] = TRUE;
      $element['#attributes']['class'] = [];
      $element['#localized_options']['attributes']['class'] = [];
      //$element['#localized_options']['attributes']['class'][] = 'aLi';
      //$element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    } else {
      unset($element['#below']['#theme_wrappers']);
      $sub_menu = '<ul class="sub">' . drupal_render($element['#below']) . '</ul>';
      //$element['#title'] .= ' <span class="caret"></span>';
      //$element['#attributes']['class'][] = 'dropdown';
      $element['#localized_options']['html'] = TRUE;

      //$element['#localized_options']['attributes']['data-toggle'] = 'dropdown';
    }
  }
  if((!empty($element['#original_link']['depth'])) && $element['#original_link']['depth'] == 1){
    $element['#attributes']['class'] = ['first'];
    $element['#localized_options']['attributes']['class'] = ['aLi'];
    //echo "我的depth等于是:".$element['#original_link']['depth'].'我是'.$element['#title'].'<br/>';
  }

  if (($element['#href'] == $_GET['q'] || ($element['#href'] == '<front>' && drupal_is_front_page())) && (empty($element['#localized_options']['language']))) {
    $element['#attributes']['class'][] = 'active';
  }

  $output = l($element['#title'], $element['#href'], $element['#localized_options']);
  return '<li' . drupal_attributes($element['#attributes']) . '>' . $output . $sub_menu . "</li>\n";
}

function book_menu_tree__main_menu($variables) {
  return '<ul class="clear">' . $variables['tree'] . '</ul>';
}

function get_notice(){
  $query = db_select('node','n');
  $query->join('field_data_body','b','b.entity_id = n.nid');
  $query->condition('n.type', 'notice','=');
  $query->fields('n',['title']);
  $query->fields('b',['body_value']);
  $query->orderBy('n.nid','DESC');
  $query->range(0,1);
  return $query->execute()->fetchObject();
}

function get_slider(){
  $query = db_select('file_managed','f');
  $query ->join('field_revision_field_slider_img', 'i','f.fid = i.field_slider_img_fid');
  $query ->condition('i.deleted',0,'=');
  $query->fields('f',['uri']);
  $query->orderBy('f.fid','DESC');
  $query->range(0,3);

  return $query->execute();
}

function get_feature_server(){
  $query = db_select('node','n');
  $query->join('field_data_body','b','b.entity_id = n.nid');
  $query->condition('n.type', 'feature_server','=');
  $query->fields('n',['title']);
  $query->fields('b',['body_value']);
  $query->orderBy('n.changed','DESC');
  $query->range(0,6);
  return $query->execute();
}

function get_boutique(){
  $query = db_select('node','n');
  $query->join('field_data_title_img','t','t.entity_id = n.nid');
  $query->join('file_managed','f','f.fid = t.title_img_fid');
  $query->condition('n.type', 'activity','=');
  $query->fields('n',['nid','title']);
  $query->fields('f',['uri']);
  $query->orderBy('n.created','DESC');
  $query->range(0,5);
  return $query->execute();
}



