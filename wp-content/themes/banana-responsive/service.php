<?php
/*
Template Name:service
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>株式会社バナナデザイン</title>
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/dlmenu.css">
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/about.css">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/service.css">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body>
  <nav class="top-nav">
    <ul>
      <li class="logo">
        <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>" class="nav-link">ホーム</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/about" class="nav-link">組織概要</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/service" class="active nav-link">事業内容</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/blog" class="nav-link">ブログ</a>
      </li>
      <li class="list-border"></li>
      <li>
        <div id="dl-menu" class="dl-menuwrapper">
          <button class="dl-trigger">Open Menu</button>
          <ul class="dl-menu">
            <li>
              <a href="<?php bloginfo('url'); ?>" class="dl-link">ホーム</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/about" class="dl-link">組織概要</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/service" class="dl-link active">事業内容</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/blog" class="dl-link">ブログ</a>
            </li>
          </ul>
        </div><!-- /dl-menuwrapper -->
      </li>
      <div class="clear"></div>
    </ul>
  </nav>
  <div class="sub-header">
    <div class="content">
      <h1>事業内容</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="left-content">
        <div class="side">
          <ul>
            <li>
              <a href="#service" class="side-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png" width="20">
                事業内容
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="right-content main">
        <div class="box box-large service" id="service">
          <div class="title-back">
            <h2 class="title">事業内容</h2>
          </div>
          <div class="box-content">
            <h3>おもなサービス</h3>
            <div class="media">
              <div class="image"><img src="<?php bloginfo('template_url'); ?>/img/service.png"></div>
              <div class="media-content">
                <div class="service-name">
                  BANANA
                </div>
                <p>
                  BANANAは我社が展開するファッションブランド。
                  <br>
                  バナナのグッズも多数販売してります。
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
  <div class="footer">
    <div class="content">
      <div class="footer-info">
        <strong>会社情報</strong>
        <div class="info">株式会社バナナデザイン</div>
        <div class="clear"></div>
      </div>
      <div class="footer-info">
        <strong>所在地</strong>
        <div class="info">東京都渋谷区神泉町8-16 渋谷ファーストプレイス</div>
        <div class="clear"></div>
      </div>
      <div class="footer-info">
        <strong>E-Mail</strong>
        <div class="info">banana@banana.co.jp</div>
        <div class="clear"></div>
      </div>
      <div class="copyright">
        ©2014 Banana Inc. ALL Rights Reserved.
      </div>
    </div>
  </div>
<script type="text/javascript">
  $(function() {
    $( '#dl-menu' ).dlmenu();
  });
</script>
</body>
</html>
