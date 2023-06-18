<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style-S.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"
    />
    <!-- Jquery CDN -->
    <script
      src="//code.jquery.com/jquery-3.7.0.min.js"
      integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g="
      crossorigin="anonymous"
    ></script>

    <title>Samurai整体院-Top</title>
    <?php wp_head();?>
  </head>
  <body>
    <header>
      <div class="pc-head">
        <a id="top" href="<?php echo home_url(); ?>/"
          ><img src="<?php echo get_template_directory_uri(); ?>/image/SiteLogo-1.png" alt="" width="240px" />
          <i class="bi bi-x-lg" id="close"></i>
        </a>
        <a class="title">メニュー</a>
        <a href="<?php echo home_url(); ?>/">ホーム</a>
        <a href="<?php echo home_url(); ?>/about">当院について</a>
        <a href="<?php echo home_url(); ?>/course">コース・料金</a>
        <a href="<?php echo home_url(); ?>/category/news">お知らせ</a>
        <a href="<?php echo home_url(); ?>/customer">お客様の声</a>
        <a href="<?php echo home_url(); ?>/contact" class="box-1">ご予約・お問い合わせ</a>
      </div>
      <div class="sp-head">
        <img src="<?php echo get_template_directory_uri(); ?>/image/SiteLogo-1.png" alt="" width="240px" />
        <!-- <img href="#" src="image/Sp-Menu.png" alt="" width="32px" /> -->
        <a id="open" style="padding-right:24px;"><i
            class="bi bi-list icon"
            style="color: #488459; font-size: 32px"
          ></i
        ></a>
      </div>
    </header>
   