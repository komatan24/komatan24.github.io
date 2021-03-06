<!-- ヘッダー -->
<?php get_header(); ?>

    <!-- メインコンテンツ -->
<main>

    <!-- メニュー -->
    <?php get_template_part('content','menu'); ?>


    <main>
        <section id="blog_list" class="site-width">
			<h1 class="title">BLOG</h1>
			<div id="content" class="article">
              
              <!-- 記事のループ -->
                <?php get_template_part('loop'); ?>
                
                <?php if (function_exists("pagination"))pagination($additional_loop->max_num_pages); ?>
            </div> 

            <!-- サイドバー -->
            <?php get_sidebar(); ?>
    
        </section>

    </main>

<!-- フッター -->
<?php get_footer(); ?>