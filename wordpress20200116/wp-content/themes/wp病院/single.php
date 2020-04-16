<!-- ヘッダー -->
<?php get_header(); ?>

<!-- メインコンテンツ -->
<main>

    <!-- メニュー -->
    <?php get_template_part('content','menu'); ?>


    <section id="blog" class="site-width">
				<h1 class="title">BLOG</h1>
				<div id="content" class="article">
        </div>

        <?php if(have_posts()): ?>
        <?php while(have_posts()):the_post(); ?>

          <!-- <article class="article-item">
						<h2 class="article-title"><a href="<?php the_permalink(); ?><?php the_title(); ?>"></a></h2>
						<h3 style="font-size:80%;"><?php the_autor_nickname(); ?><?php the_time("Y年m月j日"); ?><?php the_single_cat_title('カテゴリー：'); ?></h3>
						<img src="img/photo2.jpeg" class="article-img">

						<p class="article-body">
                          <?php the_content(); ?>
						</p>
			</article>

        <?php endwhile; ?> -->

        <div class="pagenation">
          <ul>
            <li class="prev"><?php _previous_link('%link','PREV'); ?></li>
            <li class="next"><?php next_post_link('%link','NEXT'); ?></li>
          </ul>
        </div>


        <!-- comments -->
        <?php comments_template(); ?>
      <?php else: ?>

        <h2 class="title">記事が見つかりませんでした。</h2>
        <p>検索で見つかるかもしれません。</p></br>
        <?php get_search_form(); ?>

      <?php endif; ?>

<?php get_sidebar(); ?>

   </section>
 </div>

<?php get_footer(); ?>
