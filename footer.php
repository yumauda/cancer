<footer class="l-footer p-footer">
    <div class="l-inner">
        <div class="p-footer__content">
            <figure class="p-footer__img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/footer-img.png" alt="健康だからこそ受けよう">
            </figure>
            <ul class="p-footer__lists">
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="p-footer__link">top</a>
                </li>
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/#subject')); ?>" class="p-footer__link">概要</a>
                </li>
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/#prize')); ?>" class="p-footer__link">景品一覧</a>
                </li>
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-footer__link">新着情報</a>
                </li>
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/#link')); ?>" class="p-footer__link">リンク集</a>
                </li>
                <li class="p-footer__list">
                    <a href="<?php echo esc_url(home_url('/policy/')); ?>" class="p-footer__link">サイトポリシー</a>
                </li>
            </ul>
            <div class="p-footer__small-wrapper">
                <p class="p-footer__bottom">誘ってがん検診キャンペーン事務局</p>
                <small class="p-footer__small">Copyright&nbsp;(c)&nbsp;2022&nbsp;Yamaguchi&nbsp;Prefecture.&nbsp;<br class="u-mobile">All&nbsp;Rights&nbsp;Reserved.</small>
            </div>
        </div>
    </div>
</footer>
<div class="p-totop">
    <a href="#" class="c-totop">
        <img src="<?php echo get_template_directory_uri() ?>/images/common/to-top.png" alt="topへ戻る">
    </a>
</div>
</body>
<?php wp_footer(); ?>

</html>