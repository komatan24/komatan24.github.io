<?php
// 
// Template Name: Home ～トップページ～
//
?> 

<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メインコンテンツ -->
    <main>
        <!-- メニュー -->
        <?php get_template_part('content','menu'); ?>

        <!-- メイン画像 -->
        <div class="mainImage">
            <img src="<?php echo get_template_directory_uri(); ?>/img/hospital_out01_day.jpg" alt="">
        </div>

        <!-- サブメニュー(ナビ) -->
        <div class="sub-nav">
            <ul>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/hospital_icon.png" alt=""><span>外来受診</span></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/doctorcar_icon.png" alt=""><span>救急受診</span></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/bed_icon.png" alt=""><span>入院面会</span></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/karte_icon.png" alt=""><span>診療案内</span></a></li>
              <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/doctor_icon.png" alt=""><span>採用情報</span></a></li>
            </ul>
        </div>

        <!-- ニュース -->
        <section id="info" class="site-width">
            <h1>お知らせ</h1>
            <!-- <div class="table"> -->
            <?php dynamic_sidebar('インフォエリア'); ?>
                <!-- <p>
                </p> -->
                <!-- <dl>
                    <dt>2019/12/10</dt>
                    <dd><a href="#">求人・募集案内を更新しました。</a></dd>
                </dl>
                <dl>
                    <dt>2019/12/10</dt>
                    <dd><a href="#">求人・募集案内を更新しました。</a></dd>
                </dl> -->
            <!-- </div> -->
        </section>

        <!-- 病院設備 -->
        <div class="medicalFacility">

            <div class="facilityTitle">
                <p>medical facility</p>
                <h2>病院設備</h2>
            </div>

            <div class="box-wrap">
                <ul class="title-area">
                    <li class="box js-box">
                        <p>
                            受付待ち合いホール
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            手術室
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            検査室
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            内視鏡室
                        <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            ナースステーション
                        <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            血管連続撮影装置
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            二方向X線テレビ
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            MRI
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            CT
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                    <li class="box js-box">
                        <p>
                            救急処置室
                          <span><img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt=""></span>
                        </p>
                    </li>
                </ul>

                <div class="imageBox js-imageBox">
                </div>

            </div>
        </div>
    </main>

<!-- フッター -->
<?php get_footer(); ?>