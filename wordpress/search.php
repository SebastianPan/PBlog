<?php get_header(); ?>
			<!-- CONTENT -->
			<section class="content">
				<div class="container">
					<div class="alert">
						<?php printf( __( '"<b>%s</b>" için Arama Sonuçları', 'personal-blog' ), '<span>' . get_search_query() . '</span>' ); ?>
					</div>
					<!-- BLOG -->
					<div class="blogs">
					<?php if(have_posts()){ ?>
					<?php while(have_posts()):the_post(); ?>
						<!-- ARTICLE -->
						<article class="blog">
							<div class="article-title">
								<span class="left art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
								<span class="right art-date"><?php the_date(); ?></span>
								<div class="clear-fix"></div>
							</div>
							<div class="article-content">
								<?php the_excerpt(); ?>
							</div>
						</article>
						<!-- ARTICLE /end -->
					<?php endwhile; ?>
					<?php }else{ ?>

						<div class="searchMessage">Aradığın kelimeye ait içeriği bulamadık :(</div>

					<?php } ?>
					</div>
					<!-- BLOG /end -->

					<div class="pagination">
						<span class="left"><?php previous_posts_link('&larr; Önceki Sayfa') ?></span>
						<span class="right"><?php next_posts_link('Sonraki Sayfa &rarr;') ?></span>
						<div class="clear-fix"></div>
					</div>
				</div>
			</section>
			<!-- CONTENT /end -->


		</div>
		<!-- PAGECONTENT /end -->

		<?php get_sidebar(); ?>

<?php get_footer(); ?>