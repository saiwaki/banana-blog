<?php
/*
Template Name:top
*/
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>株式会社バナナデザイン</title>
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/dlmenu.css">
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="top">
  <div class="top-head">
    <div class="content">
      <h1>Banana Design</h1>
    </div>
  </div>
  <nav class="top-nav">
    <ul>
      <li class="logo">
        <a href="<?php bloginfo('url'); ?>" class="nav-logo"><img src="<?php bloginfo('template_url'); ?>/img/logo.png"></a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>" class="active nav-link">ホーム</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/about" class="nav-link">組織概要</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/service" class="nav-link">事業内容</a>
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
              <a href="<?php bloginfo('url'); ?>" class="active">ホーム</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/about" class="dl-link">組織概要</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/service" class="dl-link">事業内容</a>
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
  <div class="main-content">
    <div class="content">
      <div class="left-content">
        <div class="box box-large newsfeed">
          <div class="title-back">
            <h2 class="title">ニュースフィード</h2>
          </div>
          <div class="box-content">
            <ul>
              <?php
              global $post;
              $args = array( 'posts_per_page' => 20 );
              $myposts = get_posts( $args );
              foreach( $myposts as $post ) {
                  setup_postdata($post);
                  ?>
                  <li>
                    <span class="date"><?php echo get_the_date(); ?></span>
                    <span class="tag"><?php the_category('｜') ?></span>
                    <a href="<?php the_permalink(); ?>" class="text">
                      <?php the_title(); ?>
                    </a>
                  </li>
                  <?php
              }
              wp_reset_postdata();
              ?>
            </ul>
          </div>
        </div>
        <div class="box box-small about">
          <div class="title-back">
            <h3 class="title">バナナとは？</h2>
          </div>
          <div class="box-content">
            <img src="<?php bloginfo('template_url'); ?>/img/top1.png">
            <p>バナナとは"バナナを食べるくらいならバナナになれ。"をモットーにバナナで世界に凹みをいれるその日まで戦い続ける組織である。</p>
          </div>
        </div>
        <div class="box box-small service">
          <div class="title-back">
            <h3 class="title">サービス</h2>
          </div>
          <div class="box-content">
            <img src="<?php bloginfo('template_url'); ?>/img/top2.png">
            <p>バナナではあらゆるクリエイティブ事業に挑戦しています。</p>
          </div>
        </div>
        <div class="clear"></div>
      </div>
      <div class="right-content">
        <div class="ad">
          <img src="<?php bloginfo('template_url'); ?>/img/right1.jpg">
        </div>
        <div class="ad">
          <img src="<?php bloginfo('template_url'); ?>/img/right2.jpg">
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
