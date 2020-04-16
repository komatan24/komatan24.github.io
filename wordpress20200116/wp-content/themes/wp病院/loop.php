<!-- ブログ記事のループ -->
<?php if(have_posts()):?>
                <?php while(have_posts()):the_post();?>
                <article class="article-item">
                    <h2 class="article-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h3 style="font-size:80%;"><?php the_author_nickname(); ?>　<?php the_time("Y年m月j日"); ?>　<?php single_cut_title('カテゴリー'); ?></h3>
					<p class="article-body">
                        <?php the_content(); ?>
                    </p>
                </article>
                <?php endwhile; //end while have_post?>
                
                <?php endif; //end have_post?>
