<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>株式会社バナナデザイン</title>
<link rel="stylesheet"  href="<?php bloginfo('stylesheet_url'); ?>">
<link rel="stylesheet"  href="<?php bloginfo('template_url'); ?>/css/blog.css">
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
        <a href="<?php bloginfo('url'); ?>/service" class="nav-link">事業内容</a>
      </li>
      <li class="list-border"></li>
      <li>
        <a href="<?php bloginfo('url'); ?>/blog" class="active nav-link">ブログ</a>
      </li>
      <li class="list-border"></li>
      <div class="clear"></div>
    </ul>
  </nav>
    <div class="sub-header">
    <div class="content">
      <h1>ブログ</h1>
    </div>
  </div>
  <div class="main-content">
    <div class="content">
      <div class="top-word" align="center">
        <img src="<?php bloginfo('template_url'); ?>/img/quo1.png" width="30">
        バナナを食べるくらいならバナナになれ！
        <img src="<?php bloginfo('template_url'); ?>/img/quo2.png" width="30">
      </div>
      <div class="blog-content">
        <div class="left-content">
          <div class="category-name">
            カテゴリー：<span class="name"><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?></span>
          </div>
          <div class="category-content">
            <?php if(have_posts()): while(have_posts()):the_post(); ?>
              <div class="box box-small">
                <a href="<?php the_permalink(); ?>" class="blog-link">
                  <img src="<?php bloginfo('template_url'); ?>/img/blog-banana.png" class="clip">
                  <div class="blog-image" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id() ); ?>)">
                    <div class="date-back">
                      <div class="date"><?php echo get_the_date(); ?></div>
                    </div>
                  </div>
                  <div class="blog-inner">
                    <div class="title">
                      <?php if(mb_strlen($post->post_title)>30) { $title= mb_substr($post->post_title,0,30) ; echo $title. ･･･ ;
                      } else {echo $post->post_title;}?>
                    </div>
                    <p class="text">
                      <?php if(mb_strlen($post->post_content)>80) { $content= mb_substr($post->post_content,0,80) ; echo $content. ･･･ ;
                      } else {echo $post->post_content;}?>
                    </p>
                  </div>
                </a>
              </div>
            <?php endwhile; endif; ?>
          </div>
        </div>
        <div class="right-content">
          <?php dynamic_sidebar(); ?>
        </div>
        <div class="clear"></div>
      </div>
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
</body>
</html>
