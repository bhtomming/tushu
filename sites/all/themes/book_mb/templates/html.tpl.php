<?php
/**
 * Author: 烽行天下
 * Date: 2018\11\12 0012
 * Time: 10:17
 * QQ: 233238526
 */
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript">
    var pixelRatio = 1 / window.devicePixelRatio;
    document.write('<meta name="viewport" content="width=device-width, initial-scale=' + pixelRatio + ', minimum-scale=' + pixelRatio + ', maximum-scale=' + pixelRatio + '" />');
    var html = document.getElementsByTagName('html')[0];
    var pageWidth = html.getBoundingClientRect().width;
    html.style.fontSize = pageWidth / 10 + "px";
  </script>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>
<body>
<?php print $page_top; ?>
<?php print $page; ?>
<?php print $page_bottom; ?>
</body>
</html>
