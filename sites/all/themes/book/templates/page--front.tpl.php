<?php
/**
 * Author: 烽行天下
 * Date: 2018\10\31 0031
 * Time: 11:51
 * QQ: 233238526
 */


  //$notice
$slider_img = get_slider();
  $servers = get_feature_server();
  $boutiques = get_boutique();
$notice = get_notice();
?>
<div class="header">
  <div class="bg">
    <div class="wrap">
      <div class="top clear">
        <div class="logo fl"><a href=""></a></div>
        <div class="topInfo fr">
          <ul class="clear">
            <li class="icon icon1"><a href="" target="_blank">问图书馆员</a></li>
            <li class="icon icon2"><a href="/user/login" target="_blank">登录</a></li>
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
<div class="bannerWrap main">
  <div class="wrap clear">
    <div class="banner fl">
      <div class="bd">
        <?php if(is_object($slider_img)): ?>
        <ul>
          <?php
          foreach ($slider_img as $slider){
            print("<li><a href=\"\"><img src=".file_create_url($slider->uri)." /></a></li>\n");
          }
          ?>
        </ul>
        <?php endif; ?>
      </div>
      <div class="hd">
        <ul><li></li><li></li><li></li></ul>
      </div>
    </div>
    <div class="recommand fr">
      <div class="recomWrap">
        <?php if($notice): ?>
        <h4><?php print $notice->title; ?></h4>
        <div class="line"></div>
        <p><?php print $notice->body_value; ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="special main">
  <div class="wrap bw clear">
    <div class="title clear">
      <div class="tit fl">特色服务</div>
      <!--<div class="more fr"><a href="">更多>></a></div>-->
    </div>
    <div class="specItems">
      <?php $i = 1; foreach ($servers as $server): ?>
      <div class="item">
        <a href="">
          <i class="icon icon<?php print $i++; ?>"></i>
          <p class="name"><?php print $server->title; ?></p>
          <p class="text"><?php print substr($server->body_value,0,20); ?></p>
        </a>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="activity main">
  <div class="wrap bw">
    <div class="title clear">
      <div class="tit fl">精品活动</div>
    </div>
    <div class="navList">
      <ul class="clear">
        <li class="on"><span>展览</span></li>
        <li><span>讲座</span></li>
        <li><span>培训</span></li>
        <li><span>活动</span></li>
      </ul>
    </div>
    <div class="cont">
      <div class="tabContent">
        <ul class="clear">
          <?php foreach ($boutiques as $boutique): ?>
            <li><a href="node/<?php print $boutique->nid; ?>"><img src="<?php print file_create_url($boutique->uri); ?>" alt=""><div class="bg"></div><div class="text"><?php print $boutique->title; ?></div></a></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="infomation main">
  <div class="wrap clear">
    <div class="left bw fl clear">
      <div class="title clear">
        <div class="tit fl">关于图书馆</div>
      </div>
      <div class="library clear">
        <div class="video fl">
          <a href=""><img src="<?php print path_to_theme(); ?>/img/videoBg.jpg" alt=""><div class="playBtn"></div></a>
        </div>
        <div class="libraryList fr">
          <ul class="clear">
            <li><a href=""><i class="icon1"></i><span>开放时间</span></a></li>
            <li><a href=""><i class="icon2"></i><span>平面布局</span></a></li>
            <li><a href=""><i class="icon3"></i><span>办证须知</span></a></li>
            <li><a href=""><i class="icon4"></i><span>交通路线</span></a></li>
            <li><a href=""><i class="icon5"></i><span>馆藏分布</span></a></li>
            <li><a href=""><i class="icon6"></i><span>服务公约</span></a></li>
            <li><a href=""><i class="icon7"></i><span>电话服务</span></a></li>
            <li><a href=""><i class="icon8"></i><span>配套服务</span></a></li>
            <li><a href=""><i class="icon9"></i><span>馆长接待日</span></a></li>
            <li><a href=""><i class="icon10"></i><span>少儿服务</span></a></li>
            <li><a href=""><i class="icon11"></i><span>微博微信</span></a></li>
            <li><a href=""><i class="icon12"></i><span>首问负责制</span></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right bw fr">
      <div class="title clear">
        <div class="tit fl">通知公告</div>
        <div class="more fr"><a href="">更多>></a></div>
      </div>
      <?php if($page['notice']): ?>
        <?php print render($page['notice']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="partner main">
  <div class="wrap bw">
    <div class="title clear">
      <div class="tit fl">数字资源</div>
      <div class="more fr"><a href="">更多>></a></div>
    </div>
    <div class="partnerList">
      <?php if($page['resource']): ?>
        <?php print render($page['resource']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<div class="footer main">
  <div class="wrap">
    <div class="top clear">
      <div class="links fl">
        <div class="tit">友情链接</div>
        <span class="line"></span>
        <?php if($page['footer_column_first']): ?>
          <?php print render($page['footer_column_first']); ?>
        <?php endif; ?>
      </div>
      <div class="links fl">
        <div class="tit">常用网站</div>
        <span class="line"></span>
        <?php if($page['footer_column_second']): ?>
          <?php print render($page['footer_column_second']); ?>
        <?php endif; ?>
      </div>
      <div class="links fl">
        <div class="tit">相关网站</div>
        <span class="line"></span>
        <?php if($page['footer_column_third']): ?>
          <?php print render($page['footer_column_third']); ?>
        <?php endif; ?>
      </div>
      <div class="links fl">
        <div class="tit">联系方式</div>
        <span class="line"></span>
        <?php if($page['footer_column_fourth']): ?>
          <?php print render($page['footer_column_fourth']); ?>
        <?php endif; ?>
      </div>
      <div class="wx fr">
        <?php if($page['footer_column_fifth']): ?>
          <?php print render($page['footer_column_fifth']); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="copyRight">
      <?php if($page['bottom']): ?>
        <?php print render($page['bottom']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>



