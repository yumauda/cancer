<?php get_header(); ?>
<section class="l-page-mv p-page-mv">
    <div class="l-page-inner">
        <div class="p-page-mv__content">
            <h1 class="p-page-mv__title">新着情報</h1>
        </div>
    </div>
</section>
<section class="l-single p-single">
    <div class="l-inner">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <div class="p-single__date-wrapper">
                    <div class="p-single__date"><?php echo get_the_time('Y.n.j') ?></div>
                </div>
                <h2><?php echo get_the_title(); ?></h2>
                <?php the_content(); ?>
                <!-- <p>詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。</p>
                <img src="./images/common/single-img.jpg" alt="">
                <p>詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。詳細文が入ります。</p> -->
            <?php endwhile; ?>
        <?php endif; ?>
        <div class="p-single__btn-wrapper">
            <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-single__btn">一覧へ戻る&nbsp;▶︎</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>