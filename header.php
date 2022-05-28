<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>がん検診特設サイト</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="./favicon.ico" />
  <!-- css -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles.css">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer src="./js/script.js"></script>
  <?php wp_head();?>
</head>
<body>
  <header class="l-header p-header">
    <div class="l-inner">
      <button class="p-header__drawer p-drawer-icon">
        <span class="p-drawer-icon__bars">
          <span class="p-drawer-icon__bar1"></span>
          <span class="p-drawer-icon__bar2"></span>
          <span class="p-drawer-icon__bar3"></span>
        </span>
      </button>
      <div class="p-header__drawer-content p-drawer-content">
        <div class="p-drawer-content__items" id="menu">
          <div class="p-drawer-content__item"><a href="#">TOP</a></div>
          <div class="p-drawer-content__item"><a href="#subject">概要</a></div>
          <div class="p-drawer-content__item"><a href="#">新着情報</a></div>
          <div class="p-drawer-content__item"><a href="#prize">景品一覧</a></div>
          <div class="p-drawer-content__item"><a href="#link">リンク集</a></div>
          <div class="p-drawer-content__item"><a href="#">サイトポリシー</a></div>
        </div>
      </div>
      <div class="p-header__drawer-background p-drawer-background"></div>
      <nav class="p-header__nav">
        <ul class="p-header__lists">
          <li class="p-header__list">
            <a href="#" class="p-header__link">top</a>
          </li>
          <li class="p-header__list">
            <a href="#subject" class="p-header__link">概要</a>
          </li>
          <li class="p-header__list">
            <a href="#" class="p-header__link">新着情報</a>
          </li>
          <li class="p-header__list">
            <a href="#prize" class="p-header__link">景品一覧</a>
          </li>
          <li class="p-header__list">
            <a href="#link" class="p-header__link">リンク集</a>
          </li>
          <li class="p-header__list">
            <a href="#" class="p-header__link">サイトポリシー</a>
          </li>
        </ul>
      </nav>
    </div>
    <a href="#" class="p-header__btn">
      <img src="./images/common/btn-header.png" alt="応募する">
    </a>
  </header>