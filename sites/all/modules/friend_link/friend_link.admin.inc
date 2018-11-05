<?php
function friend_link_form($form, &$form_state){
  $form['site_name'] = array(
    '#type' => 'textfield',
    '#title' => t('网站名称'),
    '#required' => TRUE,
  );
  $form['link'] = array(
    '#type' => 'textfield',
    '#title' => t('完整的链接地址'),
    '#required' =>TRUE,
  );
  $form['site_type'] = array(
    '#type' => 'select',
    '#title' => t('网站类型'),
    '#required' => TRUE,
    '#defaulte_value' => 1,
    '#options' => array(
      '1' => t('普通友情链接'),
      '2' => t('常用网站'),
      '3' => t('相关网站'),
    ),
  );

  $form['buttons'] = array(
    '#weight' => 100,
    'submit' => array(
      '#type' => 'submit',
      '#value' => t('添加'),
      '#weight' => 5,
      '#submit' => array('friend_link_submit'),//表单处理函数
      '#prefix' => '<div class="friend_link_form" >',
      '#suffix' => '</div>'
    )
  );
  $form['#validate'][] = 'friend_link_validate';
  return $form;
}

function friend_link_submit($form, &$form_state){
  db_insert('friend_link')
    ->fields(
      array(
        'site_name' => $form_state['values']['site_name'],
        'link' => $form_state['values']['link'],
        'site_type' => $form_state['values']['site_type'],
      )
    )
    ->execute()
  ;
  drupal_set_message(t('添加友情链接成功'));
}

function friend_link_validate($form, &$form_state){
  if(!$form_state['values']['site_name']){
    form_set_error(t('请输入网站名称'));
  }
  if(!$form_state['values']['link']){
    form_set_error(t('请输入网站链接地址'));
  }
}

function friend_link_view(){
  $output = '';
  $query = db_select('friend_link','l')->extend('PagerDefault');
  $query->fields('l');
  $query->limit(20);
  $links = $query->execute()->fetchAll();
  $rows = array();
  foreach ($links as $link){
    $row = array();
    $row['site_name'] = $link->site_name;
    $row['link'] = $link->link;
    $row['site_type'] = $link->site_type;
    $rows[] = $row;
  }

  $output .= theme('pager');
  $output .= theme('table',array('rows'=>$rows));
  $output .= theme('pager');

  return $output;
}


