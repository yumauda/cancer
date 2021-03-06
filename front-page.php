<?php get_header(); ?>
<div class="l-mv p-mv">
    <picture class="p-mv__img">
        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/mv_pc.jpg" media="(min-width: 768px)" />
        <img src="<?php echo get_template_directory_uri(); ?>/images/common/mv_sp.jpg" alt="山口県さそってがん検診キャンペーン">
    </picture>
</div>
<div class="p-dotted">
    <section class="l-goods p-goods">
        <div class="l-inner">
            <div class="p-goods__content">
                <h1 class="p-goods__title">ペアでがん検診を受けると<br class="u-mobile">山口県グッズが当たる！</h1>
                <div class="p-goods__img">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/goods-img_pc.png" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/goods-img_sp.png" alt="県知事賞と健康福祉部長賞">
                    </picture>
                </div>
                <div class="p-goods__img">
                    <picture class="p-goods__only">
                        <source srcset="<?php echo get_template_directory_uri(); ?>/images/common/goods-only_pc.png" media="(min-width: 768px)" />
                        <img src="<?php echo get_template_directory_uri(); ?>/images/common/goods-only_sp.png" alt="わかば・ピンクリボン賞">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <section class="l-how p-how">
        <div class="l-inner">
            <div class="p-how__content">
                <div class="p-how__title-wrapper">
                    <h2 class="p-how__title">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/how-title.png" alt="応募方法">
                    </h2>
                </div>
                <div class="p-how__detail">
                    <div class="p-how__description">
                        <p class="c-how-description">がん検診（胃がん、肺がん、大腸がん、乳がん、子宮頸がん）を受診した、<br class="u-desktop">20歳以上の山口県内に居住する2名1組で応募できます。<br class="u-desktop">
                            （受診日時、機関は別々でもかまいません）</p>
                    </div>
                    <div class="p-how__annotation">
                        <p class="c-how-annotation">※受診の際は、「人と人との距離の確保」「マスクの着用」「手洗い」をはじめとした<br class="u-desktop">
                            基本的な感染予防対策の徹底をお願いします。</p>
                    </div>
                </div>
                <div class="p-how__btn">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-how__link">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/how-btn.png" alt="応募はこちらから">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="l-consultation p-consultation">
        <div class="l-inner">
            <div class="p-consultation__content">
                <div class="p-consultation__sns">
                    <div class="p-consultation__description">
                        <p class="p-consultation__text">
                            TwitterやLINE、Instagramで、<br>
                            <span>「誘ってがん検診キャンペーン」</span>を<br class="u-desktop">
                            お知らせして、検診に行きましょう！
                        </p>
                    </div>
                    <div class="p-consultation__button">
                        <a href="<?php echo esc_url('https://twitter.com/sasotte_kenshin'); ?>" class="p-consultation__link" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/twitter.svg" alt="ツイッター">
                        </a>
                        <a href="<?php echo esc_url('https://lin.ee/o23fJhF'); ?>" class="p-consultation__link" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/line.svg" alt="ライン">
                        </a>
                        <a href="<?php echo esc_url('https://www.instagram.com/sasotte_gan_kenshin/'); ?>" class="p-consultation__link" target="_blank" rel="noopener noreferrer">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/instagram.svg" alt="インスタグラム">
                        </a>
                    </div>
                </div>
                <div class="p-consultation__contact">
                    <h3 class="p-consultation__title">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/consultation-title.png" alt="山口県がん総合相談窓口">
                    </h3>
                    <div class="p-consultation__tel">
                        <p class="p-consultation__number">0835-28-7090</p>
                    </div>
                    <div class="p-consultation__message">
                        <p class="p-consultation__message-text">
                            がんに関する不安や悩みについて、医療のことだけでなく、
                            仕事から生活に関することまで、安心して療養できるように支援する窓口です。
                        </p>
                    </div>
                    <div class="p-consultation__time">
                        <p class="p-consultation__time-text">相談時間 ： 平日9時〜12時・13時〜16時</p>
                        <p class="p-consultation__time-text">相談方法 ： 主に電話による相談</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="l-news p-news">
    <div class="l-inner">
        <div class="p-news__content">
            <div class="p-news__information p-information">
                <h3 class="p-news__title p-information__top-title">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/news-title.png" alt="新着情報">
                </h3>
                <div class="p-information__wrapper">
                    <?php
                    // パラメータの設定
                    $args = array(
                        'posts_per_page' => 4,
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'orderby' => 'date',
                    );
                    // WP_Queryインスタンスの生成
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) :
                        while ($my_query->have_posts()) : $my_query->the_post();
                    ?>
                            <div class="p-information__row">
                                <div class="p-information__time-wrapper">
                                    <p class="p-information__time"><?php echo get_the_time('Y.n.j') ?></p>
                                </div>
                                <div class="p-information__description-wrapper">
                                    <p class="p-information__description">
                                        <?php echo wp_trim_words(get_the_title(), 38, '...'); ?>
                                    </p>
                                </div>
                                <a href="<?php echo esc_url(get_permalink()); ?>" class="p-information__link"></a>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    wp_reset_postdata();
                    ?>
                </div>
                <div class="p-news__btn-wrapper">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="p-news__btn">お知らせ一覧&nbsp;▶︎</a>
                </div>
            </div>
            <div class="p-news__tweet">
                <div class="p-news__iframe">
                    <a class="twitter-timeline" data-lang="ja" data-height="233" href="https://twitter.com/sasotte_kenshin?ref_src=twsrc%5Etfw">Tweets by sasotte_kenshin</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
                <figure class="p-news__img">
                    <!-- <img src="<?php echo get_template_directory_uri() ?>/images/common/news-img.png" alt="twitterニュース画像"> -->
                    <?php echo do_shortcode('[instagram-feed feed=2]'); ?>
                </figure>
            </div>
        </div>
    </div>
</section>
<div class="p-dotted">
  <section class="l-subject p-subject" id="subject">
        <div class="l-inner">
            <div class="p-subject__content">
                <div class="p-subject__description">
                    <h3 class="p-subject__main-title">
                        <img src="<?php echo get_template_directory_uri() ?>/images/common/subject-title.png" alt="応募対象">
                    </h3>
                    <div class="p-subject__text-wrapper">
                        <p class="p-subject__text">がん検診（胃がん、肺がん、大腸がん、乳がん、子宮頸がん）を受診した、20歳以上の山口県内に居住する2名1組で応募できます。（受診日時、機関は別々でもかまいません）<br>
                            当キャンペーンでは、がんの早期発見を目的とした、右記の5つの検診を対象とします。<br>
                            市町が実施する集団検診や個別検診、または職場の健康診断などで受診できます。</p>
                    </div>
                </div>
                <figure class="p-subject__img">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/subject-img.png" alt="対象検査の図">
                </figure>
            </div>
            <dl class="p-subject__detail">
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">対象受診期間</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text"><span class="c-subject-text--red">令和4年1月1日（金）～令和4年12月31日（土）</span></p>
                    </dd>
                </div>
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">応募受付期間</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text"><span class="c-subject-text--red">令和4年6月17日（金）〜令和5年1月31日（火）</span></p>
                    </dd>
                </div>
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">抽選日</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text"><span class="c-subject-text--smallRed">1回目（上半期）：</span>令和4年10月中旬（9月受付分まで）</p>
                        <p class="c-subject-text"><span class="c-subject-text--smallRed">2回目（下半期）：</span>令和5年2月中旬</p>
                        <p class="c-subject-text--small">※いずれも予定であり、変更になることがあります。</p>
                    </dd>
                </div>
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">応募方法</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-title c-subject-title--small">当サイトの応募フォームに必要事項を入力のうえお申し込みください。<br>
                            もしくは、専用応募用紙に必要事項を記入のうえ郵送してください。</p>
                    </dd>
                </div>
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">その他</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text--other">・当選の発表は、賞品の発送をもってかえさせていただきます。</p>
                        <p class="c-subject-text--other">・<span>当選された賞品は、応募者の住所に送付します</span>ので、ペア応募者と一緒にご利用ください。</p>
                        <p class="c-subject-text--other">・当落に関するお問い合わせには、お答えいたしかねます。</p>
                        <p class="c-subject-text--other">・応募はお一人様１回限りとさせていただきます。（ペアを入れ替えての重複応募は無効となります）</p>
                        <p class="c-subject-text--other">・応募条件に沿わない場合や、虚偽の記載など何らかの不正があった場合は、応募は無効とさせていただきます。</p>
                        <p class="c-subject-text--other">・応募時に登録された住所に不備などの理由により賞品がお届けできない場合は、<br>当選の権利を無効とさせていただきます。</p>
                        <p class="c-subject-text--other">・当選の権利は応募者ご本人のもので、第三者に譲渡・換金はできません。</p>
                        <p class="c-subject-text--other">・提供いただいた個人情報は、抽選・賞品の発送及び個人を特定しない統計資料作成のみに使用し、<br>同意なしに業務委託先以外の第三者に開示・提供することはありません。（法令等による開示要請を除く）</p>
                        <p class="c-subject-text--other">・ご応募いただいた応募用紙は返却できませんのでご了承ください。</p>
                        <p class="c-subject-text--other">・賞品の内容は変更になることがあります。</p>
                    </dd>
                </div>
                <div class="p-subject__row">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">キャンペーンの<br class="u-desktop">お問い合わせ</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text--smallRed">誘ってがん検診キャンペーン事務局</p>
                        <p class="p-subject__explain--top c-subject-text--other">＜（株）ケイ・アール・ワイ・サービスステーション内＞<br>
                            〒745-0872 山口県周南市一番町4177&nbsp;&nbsp;TEL：0834-21-3344&nbsp;&nbsp;FAX：0834-22-2809<br>
                            （9：00～18：00&nbsp;&nbsp;土・日・祝日・年末年始を除く）</p>
                        <p class="p-subject__explain--bottom c-subject-text--smallRed">【よくある質問について】</p>
                        <p class="c-subject-text--other">キャンペーンや検診についてよくいただく質問をまとめています。</p>
                        <a href="https://yamaguchi-gankenshin.jp/wp-content/uploads/2022/06/faq.pdf" class="p-subject__pdf" target="_blank" rel="noopener noreferrer">Q＆A&nbsp;ダウンロード（PDF）</a>
                    </dd>
                </div>
                <div class="p-subject__row p-subject__row--last">
                    <dt class="p-subject__title">
                        <p class="c-subject-title">その他の<br class="u-desktop">お問い合わせ</p>
                    </dt>
                    <dd class="p-subject__explain">
                        <p class="c-subject-text--smallRed">山口県健康福祉部医療政策課&nbsp;&nbsp;医療対策班</p>
                        <p class="c-subject-text--other">〒753-8501&nbsp;&nbsp;山口県山口市滝町1番1号&nbsp;&nbsp;TEL：083-933-2961&nbsp;&nbsp;FAX：083-933-2829<br>
                            （8：30～17：15&nbsp;&nbsp;土・日・祝日・年末年始を除く）</p>
                    </dd>
                </div>
            </dl>
            <div class="p-subject__btn">
                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="p-subject__btn-link">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/how-btn.png" alt="応募はこちらから">
                </a>
            </div>
        </div>
    </section>
    <section class="l-prize p-prize" id="prize">
        <div class="l-inner">
            <div class="p-prize__title-wrapper">
                <h3 class="p-prize__title">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-title.png" alt="景品一覧">
                </h3>
            </div>
            <div class="p-prize__content">
                <ul class="p-prize__tops">
                    <li class="p-prize__top">
                        <figure class="p-prize__img1">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img1.jpg" alt="県知事賞">
                        </figure>
                        <div class="p-prize__detail">
                            <div class="p-prize__detail-title">
                                <p class="c-prize-title">県知事賞</p>
                            </div>
                            <div class="p-prize__description">
                                <p class="c-prize-description">山口県産 海の幸・山の幸の詰め合わせ<br>・ペア2組（1・2回目各抽選）</p>
                            </div>
                        </div>
                    </li>
                    <li class="p-prize__top">
                        <figure class="p-prize__img2">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img2.jpg" alt="健康福祉部長賞">
                        </figure>
                        <div class="p-prize__detail p-prize__detail--second">
                            <div class="p-prize__detail-title">
                                <p class="c-prize-title">健康福祉部長賞</p>
                            </div>
                            <div class="p-prize__description">
                                <p class="c-prize-description">山口県特産品<br>・ペア10組（1・2回目各抽選）</p>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="p-prize__sponsor p-sponsor">
                    <div class="p-sponsor__title-wrapper">
                        <h4 class="p-sponsor__title">協賛企業賞</h4>
                    </div>
                    <div class="p-sponsor__content">
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img3.jpg" alt="電子体温計けんおんくん">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">株式会社山口銀行</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">電子体温計けんおんくん<br>
                                        ・2個セットをペア1組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">20秒での検温が可能であり、誰でも見やすい大型表示機能の備わった電子体温計です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-aflac.jpg" alt="アフラック">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">アフラック</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">携帯用除菌ハンドジェル<br>
                                    ・2個セットをペア1組（1回目抽選）</p>
                                    <p class="p-sponsor__small">場所を問わずに手を清潔に！日本製の携帯用ハンドジェルです。外出時に便利な、1回分使い切り量の個包装です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img5.jpg" alt="タニタヘルスメーター">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">東京海上日動火災保険株式会社</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">タニタ&nbsp;ヘルスメーター<br>
                                        ・2個セットをペア1組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">体重だけでなく、体脂肪量、内臓脂肪量、BMI、筋肉量、基礎代謝量、体内年齢を図れる優れもの。更に乗った瞬間、乗った人を自動で識別する乗るピタ機能付き。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img6.jpg" alt="丸久商品券">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">株式会社丸久</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">丸久商品券<br>
                                        ・3,000円分×5組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">アルク・丸久・サンマート・中央フード等の丸久グループ店舗で使える商品券です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img2">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-seimei.jpg" alt="シャワーヘッド">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">第一生命保険株式会社</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">マッサージクッション<br>
                                    ・2個セットをペア1組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">背中、腰、お尻&nbsp;&nbsp;ストレッチ１分間で4000回の振動のマッサージクッションです。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img3">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img08.jpg" alt="ゆめタウン・ゆめマート商品券">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">株式会社イズミ</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">ゆめタウン・ゆめマート商品券<br>
                                        ・3,000円分×5組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">ゆめタウン・ゆめマートで使える商品券です。（一部のテナントを除きます）</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img4">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img9.jpg" alt="ボディメンテドリンク">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">大塚製薬株式会社</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">ボディメンテドリンク&nbsp;&nbsp;１ケース<br>
                                        ・2個セットをペア1組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">カラダを守り、うるおす製品として、「乳酸菌B240」を手軽に摂ることができるコンディショニング飲料です。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img5">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img11.jpg" alt="フジ商品券">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">フジグラン山口</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">フジ商品券<br>・1,000円分×2組（1・2回目各抽選）</p>
                                    <p class="p-sponsor__small">フジ全店舗の他、フジカンパニーズ各社でご利用いただけます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img6">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-mizuno.jpg" alt="骨盤ベルト">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">ミズノ株式会社</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">マウスカバー<br>
                                    ・2個セットをペア3組（1回目1組、2回目2組）</p>
                                    <p class="p-sponsor__small">飛沫の拡散抑制を目的に競技ウエアで使われる2way素材で作ったマウスカバー。乾きやすいので毎日気持ちよくお使いいただけます。</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-sponsor__row">
                            <figure class="p-sponsor__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/prize-img12.jpg" alt="レノファ山口観戦チケット">
                            </figure>
                            <div class="p-sponsor__detail">
                                <div class="p-sponsor__detail-title">
                                    <p class="c-prize-title">株式会社レノファ山口</p>
                                </div>
                                <div class="p-sponsor__description">
                                    <p class="c-prize-description">試合観戦チケット<br>
                                    ・2枚セットをペア1組（2回目抽選）</p>
                                    <p class="p-sponsor__small">2022シーズン&nbsp;レノファ山口ホームゲームの観戦チケットです。</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="l-heart p-heart">
    <div class="l-inner">
        <div class="p-heart__content">
            <figure class="p-heart__img">
                <img src="<?php echo get_template_directory_uri() ?>/images/common/heart-logo.png" alt="健康なうちに定期的に検診を受けることが大切です">
            </figure>
            <p class="p-heart__text">早期のがんは自覚症状がほとんどありません。<br>
                がんは早く見つけ、早く治療を受ければ、<br>治る可能性は高くなります。<br>早期発見するためには、症状のない</p>
            <p class="p-heart__text--red">健康なうちに定期的に<br class="u-mobile">検診を受けることが大切です！</p>
        </div>
    </div>
</div>
<div class="p-dotted">
    <section class="l-company p-company">
        <div class="l-inner">
            <div class="p-company__title-wrapper">
                <h3 class="p-company__title">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/company-title.png" alt="景品一覧">
                </h3>
            </div>
            <div class="p-company__content">
                <div class="p-company__block">
                    <div class="p-company__subtitle-wrapper">
                        <p class="p-company__subtitle">がん啓発・がん検診受診率向上に係る<br class="u-mobile">包括連携協定企業等</p>
                    </div>
                    <ul class="p-company__cards">
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img1.jpg" alt="株式会社山口銀行">
                            </figure>
                            <p class="p-company__name">株式会社山口銀行</p>
                            <a href="<?php echo esc_url('https://www.yamaguchibank.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img2.jpg" alt="アフラック">
                            </figure>
                            <p class="p-company__name">アフラック生命保険株式会社</p>
                            <a href="<?php echo esc_url('https://www.aflac.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img3.jpg" alt="東京海上日動火災保険株式会社">
                            </figure>
                            <p class="p-company__name">東京海上日動火災保険株式会社</p>
                            <a href="<?php echo esc_url('https://www.tokiomarine-nichido.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img4.jpg" alt="株式会社丸久">
                            </figure>
                            <p class="p-company__name">株式会社丸久</p>
                            <a href="<?php echo esc_url('http://www.mrk09.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card p-company__card--last">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img5.jpg" alt="第一生命保険株式会社">
                            </figure>
                            <p class="p-company__name">第一生命保険株式会社</p>
                            <a href="<?php echo esc_url('https://www.dai-ichi-life.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                    </ul>
                </div>
                <div class="p-company__block">
                    <div class="p-company__subtitle-wrapper">
                        <p class="p-company__subtitle">健康分野に関する<br class="u-mobile">地域活性化包括連携協定企業等</p>
                    </div>
                    <ul class="p-company__cards">
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img6.jpg" alt="株式会社イズミ">
                            </figure>
                            <p class="p-company__name">株式会社イズミ</p>
                            <a href="<?php echo esc_url('https://www.izumi.co.jp/'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img7.jpg" alt="大塚製薬株式会社">
                            </figure>
                            <p class="p-company__name">大塚製薬株式会社</p>
                            <a href="<?php echo esc_url('https://www.otsuka.co.jp'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img8.jpg" alt="ミズノ株式会社">
                            </figure>
                            <p class="p-company__name">ミズノ株式会社</p>
                            <a href="<?php echo esc_url('https://corp.mizuno.com'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card p-company__card--last">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img9.jpg" alt="レノファ株式会社">
                            </figure>
                            <p class="p-company__name">株式会社レノファ山口</p>
                            <a href="<?php echo esc_url('https://www.renofa.com'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                        <li class="p-company__card p-company__card--last">
                            <figure class="p-company__img">
                                <img src="<?php echo get_template_directory_uri() ?>/images/common/company-img10.jpg" alt="フジクラン山口">
                            </figure>
                            <p class="p-company__name">株式会社フジ・リテイリング<br>フジグラン山口</p>
                            <a href="<?php echo esc_url('https://www.the-fuji.com'); ?>" class="p-company__link" target="_blank" rel="noopener noreferrer"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="l-link p-link" id="link">
        <div class="l-inner">
            <div class="p-link__title-wrapper">
                <h3 class="p-link__title">
                    <img src="<?php echo get_template_directory_uri() ?>/images/common/link-title.png" alt="リンク集">
                </h3>
            </div>
            <div class="p-link__content">
                <ul class="p-link__cards">
                    <li class="p-link__card">
                        <figure class="p-link__img">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/link-img01.png" alt="休日・平日夜間がん検診">
                        </figure>
                        <div class="p-link__detail">
                            <a href="<?php echo esc_url('https://www.pref.yamaguchi.lg.jp/soshiki/45/14401.html'); ?>" class="p-link__link" target="_blank" rel="noopener noreferrer">休日・平日夜間がん検診</a>
                            <p class="p-link__text">お仕事の都合などでがん検診が受診できない方のため、休日や平日夜間にもがん検診（乳がん、子宮頸がん、大腸がん）が受診できるよう、9月から12月の間、「休日・平日夜間がん検診」を実施します。（今年度の医療機関のリストは、9月頃に公表します。）</p>
                        </div>
                    </li>
                    <li class="p-link__card">
                        <figure class="p-link__img">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/link-img02.png" alt="「がん」は自分に関係ないと思っていませんか…">
                        </figure>
                        <div class="p-link__detail">
                            <a href="<?php echo esc_url('https://www.pref.yamaguchi.lg.jp/soshiki/45/14402.html'); ?>" class="p-link__link" target="_blank" rel="noopener noreferrer">「がん」は自分に関係ないと思っていませんか…</a>
                            <p class="p-link__text">国民の2人に1人は一生のうちに1回はがんになるといわれていますが、がんは早期に発見し早期に治療すれば、治る可能性が高くなる病気です。県では、がん検診の必要性をまとめたリーフレットを作成しています。</p>
                        </div>
                    </li>
                    <li class="p-link__card">
                        <figure class="p-link__img">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/link-img03.png" alt="がん検診早期発見事例集">
                        </figure>
                        <div class="p-link__detail">
                            <a href="<?php echo esc_url('https://www.pref.yamaguchi.lg.jp/uploaded/attachment/25736.pdf'); ?>" class="p-link__link" target="_blank" rel="noopener noreferrer">がん検診早期発見事例集</a>
                            <p class="p-link__text">がんにかかられた方、がん検診によりがんを早期発見した方の体験談をご紹介しています。</p>
                        </div>
                    </li>
                    <li class="p-link__card">
                        <figure class="p-link__img">
                            <img src="<?php echo get_template_directory_uri() ?>/images/common/link-img04.png" alt="がん検診に関するお問い合わせ窓口">
                        </figure>
                        <div class="p-link__detail">
                            <a href="<?php echo esc_url('https://www.pref.yamaguchi.lg.jp/soshiki/45/14369.html'); ?>" class="p-link__link" target="_blank" rel="noopener noreferrer">がん検診に関するお問い合わせ窓口</a>
                            <p class="p-link__text">がんによって悩んでいる患者の方や、その家族の方のため、がん相談全般にお答えする「山口県がん総合相談窓口」を設置しています。</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>