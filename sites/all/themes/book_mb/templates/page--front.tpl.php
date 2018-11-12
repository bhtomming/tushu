<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\12 0012
 * Time: 10:59
 * QQ: 233238526
 */
$slider_img = get_slider();
$notice = get_notice();
$notifies = get_notices();
$boutiques = get_boutique('展览');
$activities = get_boutique('活动');
$trains = get_boutique('培训');
$lectures = get_boutique('讲座');
?>
<header class="head">
  <div class="top wrap clear">
    <div class="logo fl"><a href="/"><img src="img/logo.png"/></a></div>
    <div class="ask fr"><a href=""></a></div>
  </div>
</header>
<section class="searchBg">
  <div class="searchWrap">
    <form action="" method="post">
      <select name="">
        <option value="">图书馆</option>
        <option value="">图书馆2</option>
        <option value="">图书馆3</option>
        <option value="">图书馆4</option>
        <option value="">图书馆5</option>
      </select>
      <input type="text" class="searchText fl" name="" placeholder="搜索公共图书馆的资源" />
      <input type="submit" value="" class="submitBtn fl" />
    </form>
  </div>
</section>
<section class="slide" id="slide">
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
</section>
<section class="news">
  <div class="wrap clear">
    <div class="text fl">通知公告</div>
    <div class="newsList fl">
      <ul>
        <?php foreach($notifies as $notify): ?>
          <li><a href="node/<?php print $notify->nid; ?>"><?php print substr_replace($notify->title,'...',90); ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</section>
<section class="special">
  <div class="wrap">
    <div class="itemBox">
      <div class="item one"><a href="">特色服务</a></div>
      <div class="item two"><a href="">关于图书馆</a></div>
      <div class="item three"><a href="">数字资源</a></div>
    </div>
  </div>
</section>
<section class="listBox">
  <div class="navList">
    <ul class="clear">
      <li class="on">展览</li>
      <li>讲座</li>
      <li>培训</li>
      <li>活动</li>
    </ul>
  </div>
  <div class="cont wrap">
    <div class="tabContent">
      <?php foreach ($boutiques as $boutique): ?>
        <div class="item clear">
          <a href="node/<?php print $boutique->nid; ?>">
            <div class="pic fl"><img src="<?php print file_create_url($boutique->uri); ?>"/></div>
            <div class="info fl">
              <h3><?php print $boutique->title; ?></h3>
              <p><?php print substr_replace($boutique->body_value,'...',124); ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>

      <div class="more"><a href="">查看更多</a></div>
    </div>
    <div class="tabContent">
      <?php foreach ($lectures as $lecture): ?>
        <div class="item clear">
          <a href="node/<?php print $lecture->nid; ?>">
            <div class="pic fl"><img src="<?php print file_create_url($lecture->uri); ?>"/></div>
            <div class="info fl">
              <h3><?php print $lecture->title; ?></h3>
              <p><?php print substr_replace($lecture->body_value,'...',124); ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <div class="more"><a href="">查看更多</a></div>
    </div>
    <div class="tabContent">
      <?php foreach ($trains as $train): ?>
        <div class="item clear">
          <a href="node/<?php print $train->nid; ?>">
            <div class="pic fl"><img src="<?php print file_create_url($train->uri); ?>"/></div>
            <div class="info fl">
              <h3><?php print $train->title; ?></h3>
              <p><?php print substr_replace($train->body_value,'...',124); ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <div class="more"><a href="">查看更多</a></div>
    </div>
    <div class="tabContent">
      <?php foreach ($activities as $activitie): ?>
        <div class="item clear">
          <a href="node/<?php print $activitie->nid; ?>">
            <div class="pic fl"><img src="<?php print file_create_url($activitie->uri); ?>"/></div>
            <div class="info fl">
              <h3><?php print $activitie->title; ?></h3>
              <p><?php print substr_replace($activitie->body_value,'...',124); ?></p>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
      <div class="more"><a href="">查看更多</a></div>
    </div>
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

