<?php get_header() ?>
<section class="l-page-mv p-page-mv">
    <div class="l-page-inner">
        <div class="p-page-mv__content">
            <h1 class="p-page-mv__title">応募フォーム</h1>
        </div>
    </div>
</section>
<section class="l-contact p-contact">
    <div class="l-inner">
        <div class="p-contact__content">
            <div class="p-contact__text-wrapper">
                <p class="p-contact__text">2名1組でご応募ください。<br>
                    2名のうち一方が応募フォームより内容を入力し送信ください。<br>
                    ※2名それぞれで応募フォームを送信する必要はございません。</p>
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>