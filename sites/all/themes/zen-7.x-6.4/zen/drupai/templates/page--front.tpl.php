<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<!---- start-smoth-scrolling---->

 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
<!---End-smoth-scrolling---->

				<!--Animation-->

<script>
	new WOW().init();
</script>
<!---/End-Animation---->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?c893bf4d42cf3f5f2db099913bd70cde";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();

</script>

<div id="page">

  <header  class="<?php if($hclass){print $hclass;}  ?>" id="header" role="banner"> 
   <div class="container">
    <?php print render($page['header']); ?>

	
		
	<div class="header-top row">
		<div class="top-menu">
		
	   <?php if($page['navigation']): ?>
	   <div id="main-menu" role="navigation" tabindex="-1">
		  <?php print render($page['navigation']); ?>
		  </div>
        <?php endif; ?>	
	
    
     </div>
	                <div class="search">
					<?php if($page['search']): ?>
					                  <?php print render($page['search']); ?>
                    <?php endif; ?>										  
					</div>

		<div class="clearfix"></div>
	</div>
	
	
	<!-- //网站基本信息显示 -->
	
	 
<?php if ($site_name || $site_slogan): ?>
	<div class="logo wow bounceIn animated header__name-and-slogan" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	 <?php if ($site_name): ?>
		 <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="header__site-link" rel="home"><span><?php print $site_name; ?></span></a>
		</div>          
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <div class="header__site-slogan" id="site-slogan">
		  <?php print $site_slogan; ?>
		  </div>
        <?php endif; ?>

    <?php endif; ?>
	<!-- //网站基本信息显示 -->
	<div class="header-bottom">
	<div class="header-grids wow fadeInDownBig animated animated" style="visibility: visible; -webkit-animation-delay: 0.4s;">	
	 <?php print render($page['sidebar_second']); ?>
	</div>
	</div>
	</div>
  </header>
  		

  <div id="main">

    <div id="content" class="column content" role="main">
	<?php 
	$about = render($page['about']);
	$service = render($page['service']);
	$webjian = render($page['webjian']);
	$webknowledge = render($page['webknowledge']);
	$content = render($page['content']);
	?>
	<?php if($about): ?>
     <div class="about-section">
	 <?php print $about; ?>
	 </div>
	 <?php endif; ?>
	 
	  
	  <?php if($content): ?>
	  <div class="container">
	  <?php print $breadcrumb; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="page__title title" id="page-title"><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>     
	  <?php print $content; ?>
	  <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>    
      <?php print $feed_icons; ?>
	  </div>
	  <?php endif; ?>
	  
	 <?php if($service): ?>
	  <div class="service-section">
	  <?php print $service; ?>
	  </div>
	  <?php endif; ?>
	  <?php if($webjian): ?>
	  <div class="work-section wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
	  <?php print $webjian; ?>
	  </div>
	  <?php endif; ?>
	  <?php if($webknowledge): ?>
	   <div class="news-section">
	    
	   <?php print $webknowledge; ?>
	   </div>
	  <?php endif; ?>
	  

	 

    </div>

   

   

  </div>
 <div class="categories-section">
  <?php print render($page['footer']); ?>
</div>
</div>

<?php print render($page['bottom']); ?>
