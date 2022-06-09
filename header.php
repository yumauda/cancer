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
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
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
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></div>
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/#subject')); ?>">概要</a></div>
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/news/')); ?>">新着情報</a></div>
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/#prize')); ?>">景品一覧</a></div>
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/#link')); ?>">リンク集</a></div>
          <div class="p-drawer-content__item"><a href="<?php echo esc_url(home_url('/policy/')); ?>">サイトポリシー</a></div>
          <div class="p-drawer-content__item p-drawer-content__item--btn"><a class="p-drawer-content__btn" href="<?php echo esc_url(home_url('/contact/')); ?>">応募する</a></div>
        </div>
      </div>
      <div class="p-header__drawer-background p-drawer-background"></div>
      <nav class="p-header__nav">
        <ul class="p-header__lists">
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="p-header__link">top</a>
          </li>
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/#subject')); ?>" class="p-header__link">概要</a>
          </li>
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-header__link">新着情報</a>
          </li>
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/#prize')); ?>" class="p-header__link">景品一覧</a>
          </li>
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/#link')); ?>" class="p-header__link">リンク集</a>
          </li>
          <li class="p-header__list">
            <a href="<?php echo esc_url(home_url('/policy/')); ?>" class="p-header__link">サイトポリシー</a>
          </li>
        </ul>
      </nav>
    </div>
    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="p-header__btn">
      <img src="<?php echo get_template_directory_uri() ?>/images/common/btn-header.png" alt="応募する">
    </a>
  </header>