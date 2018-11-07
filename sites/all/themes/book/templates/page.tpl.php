<?php
/**
 * Author: 烽行天下
 * Date: 2018\10\31 0031
 * Time: 11:11
 * QQ: 233238526
 */
?>
<div class="header">
  <div class="bg">
    <div class="wrap">
      <div class="top clear">
        <div class="logo fl"><a href=""></a></div>
        <div class="topInfo fr">
          <ul class="clear">
            <li class="icon icon1"><a href="" target="_blank">问图书馆员</a></li>
            <li class="icon icon2"><a href="" target="_blank">登录</a></li>
          </ul>
        </div>
      </div>
      <div class="searchBg">
        <div class="searchWrap">
          <div class="clear">
            <?php if($page['search']): ?>
              <?php print render($page['search']); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="nav">
        <?php if($page['main_menu']): ?>
          <?php print render($page['main_menu']); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="subNavig main">
  <div class="wrap"><?php if($breadcrumb): ?>
      <?php
      $breadcrumb = str_replace('<h2 class="element-invisible">当前位置</h2><div class="breadcrumb">','<div class="wrap">当前位置：',$breadcrumb);
      print $breadcrumb; endif;
      ?>
  </div>
  <?php print $messages; ?>
</div>
<div class="main">
  <div class="wrap clear">
    <div class="leftList fl">
      <?php print render($page['content']); ?>
    </div>
    <div class="rightRec fr">
      <?php print render($page['right_column']); ?>
    </div>
  </div>
</div>
<div class="footer main">
  <div class="wrap">
    <div class="top clear">
      <div class="links fl">
        <?php print render($page['footer_column_first']); ?>
      </div>
      <div class="links fl">
        <?php print render($page['footer_column_second']); ?>
      </div>
      <div class="links fl">
        <?php print render($page['footer_column_third']); ?>
      </div>
      <div class="links fl">
        <?php print render($page['footer_column_fourth']); ?>
      </div>
      <div class="wx fr">
        <?php print render($page['footer_column_fifth']); ?>
      </div>
    </div>
    <div class="copyRight">
      <?php print render($page['bottom']); ?>
    </div>
  </div>
</div>

