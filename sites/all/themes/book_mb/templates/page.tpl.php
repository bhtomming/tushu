<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\12 0012
 * Time: 10:59
 * QQ: 233238526
 */

?>
<header class="head">
  <div class="top wrap clear">
    <div class="logo fl"><a href="/"><img src="<?php print path_to_theme(); ?>/img/logo.png"/></a></div>
    <div class="ask fr"><a href=""></a></div>
  </div>
</header>
<section class="subNavi">
  <div class="wrap">
    <?php if($breadcrumb): ?>
      <?php
      $breadcrumb = str_replace('<h2 class="element-invisible">当前位置</h2><div class="breadcrumb">','<div class="wrap">当前位置：',$breadcrumb);
      print $breadcrumb; endif;
    ?>
    <?php print $messages; ?>
  </div>
</section>
<section class="listBox">
  <div class="navNews">
    <?php if($tabs){ print render($tabs); } ?>
  </div>
  <div class="cont wrap">
    <?php print render($page['content']); ?>
  </div>
</section>
<section class="footer">
  <ul class="clear">
    <li class="active"><a href=""><i class="iconfont">&#xe64d;</i><span>首页</span></a></li>
    <li class=""><a href=""><i class="iconfont">&#xe506;</i><span>栏目</span></a></li>
    <li class=""><a href=""><i class="iconfont">&#xe610;</i><span>咨询</span></a></li>
    <li class=""><a href=""><i class="iconfont">&#xe72d;</i><span>我的</span></a></li>
  </ul>
</section>

