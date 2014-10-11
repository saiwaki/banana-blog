<?php
/*
Template Name:about
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
<script src="<?php bloginfo('template_url'); ?>/js/jquery-1.7.2.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/jquery.dlmenu.js"></script>
</head>
<body id="about">
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
        <a href="<?php bloginfo('url'); ?>/about" class="active nav-link">組織概要</a>
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
              <a href="<?php bloginfo('url'); ?>" class="dl-link">ホーム</a>
            </li>
            <li>
              <a href="<?php bloginfo('url'); ?>/about" class="dl-link active">組織概要</a>
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
  <div class="sub-header">
    <div class="content">
      <h1>組織概要</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="left-content">
        <div class="side">
          <ul>
            <li>
              <a href="#ideal" class="side-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png" width="20">
                経営理念
              </a>
            </li>
            <li>
              <a href="#aboutus" class="side-link">
                <img src="<?php bloginfo('template_url'); ?>/img/banana.png" width="20">
                会社情報
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="right-content main">
        <div class="box box-large ideal" id="ideal">
          <div class="title-back">
            <h2 class="title">経営理念</h2>
          </div>
          <div class="box-content" align="center">
            <div class="motto">バナナを食べるくらいならバナナになれ。</div>
            <p>
              私達は普段良くバナナを口にしています。
              <br>
              食べていることすら忘れるくらいに、バナナは私達の生活にとけ込んでいるのです。
              <br>
              偉大な大工は、誰も見ないからといって、床裏にひどい木材を使ったりはしません。
              <br>
              我々もそれと同じように、誰も知ろうとしないからといって、バナナを育てる土や環境をないがしろにはしません。
              <br>
              バナナデザイン株式会社は今までも、そしてこれからもその身に日の光を一杯にうけ育ち続けるでしょう。
              <br>
              温室でそだったバナナが、世界に凹みをいれるその日まで。
            </p>
          </div>
        </div>
        <div class="box box-large aboutus" id="aboutus">
          <div class="title-back">
            <h2 class="title">会社情報</h2>
          </div>
          <div class="box-content">
            <table>
              <tr>
                <th>設立</th>
                <td>平成26年10月1日</td>
              </tr>
              <tr>
                <th>資本金</th>
                <td>10,000,000円</td>
              </tr>
              <tr>
                <th>役員</th>
                <td>代表取締役：猿野昇　取締役：犬飼吠</td>
              </tr>
              <tr>
                <th>従業員</th>
                <td>10名(キジ含む)</td>
              </tr>
              <tr>
                <th>取引銀行</th>
                <td>鬼が島銀行</td>
              </tr>
              <tr>
                <th>事業内容</th>
                <td>クリエイティブ事業</td>
              </tr>
              <tr>
                <th>パートナー</th>
                <td>株式会社パインシステムズ</td>
              </tr>
            </table>
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
