<?php get_header(); ?>
<section class="l-page-mv p-page-mv">
    <div class="l-page-inner">
        <div class="p-page-mv__content">
            <h1 class="p-page-mv__title">新着情報</h1>
        </div>
    </div>
</section>
<div class="l-page-news p-page-news">
    <div class="l-inner">
        <div class="p-page-news__content p-home">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <div class="p-home__row">
                        <div class="p-home__title">
                            <p class="p-home__date"><?php echo get_the_time('Y/n/j')?></p>
                        </div>
                        <div class="p-home__description">
                            <p class="p-home__text"><?php echo wp_trim_words(get_the_title(), 20, '...'); ?></p>
                        </div>
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="p-home__link"></a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- <div class="p-home__row">
                <div class="p-home__title">
                    <p class="p-home__date">2023.02.01</p>
                </div>
                <div class="p-home__description">
                    <p class="p-home__text">令和4年度 【山口県】「休日・平日夜間がん検診」を実施しています！</p>
                </div>
                <a href="#" class="p-home__link"></a>
            </div>
            <div class="p-home__row">
                <div class="p-home__title">
                    <p class="p-home__date">2023.02.01</p>
                </div>
                <div class="p-home__description">
                    <p class="p-home__text">令和4年度誘ってがん検診キャンペーンの応募を開始いたしました。</p>
                </div>
                <a href="#" class="p-home__link"></a>
            </div>
            <div class="p-home__row">
                <div class="p-home__title">
                    <p class="p-home__date">2023.02.01</p>
                </div>
                <div class="p-home__description">
                    <p class="p-home__text">キャンペーンサイトを公開しました。</p>
                </div>
                <a href="#" class="p-home__link"></a>
            </div> -->
        </div>
    </div>
</div>
<?php get_footer(); ?>