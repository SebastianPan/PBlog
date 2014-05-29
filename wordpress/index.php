<?php get_header(); ?>


			<!-- JUMBOTRON -->
			<section class="jumbotron">
				<div class="container">
					<!-- AVATAR -->
					<div class="avatar">
						<?php $email = get_the_author_meta('user_email',1); ?>
						<img src="http://www.gravatar.com/avatar/<?php echo md5($email); ?>?s=256" alt="">
					</div>
					<!-- AVATAR /end -->
					
					<!-- USER INFO -->
					<div class="user-info">
						<div class="braces left">{</div>
						<div class="braces right">}</div>
						<span class="user-name"><?php bloginfo('name'); ?></span>
						<span class="user-position"><?php bloginfo('description'); ?></span>

						<!-- USER SOCİAL -->
						<div class="social">
							<ul>
								<li><a target="_blank" href="http://facebook.com/smtaydemir"><i class="fa fa-facebook-square"></i> facebook</a></li>
								<li><a target="_blank" href="http://twitter.com/samet_aydemir"><i class="fa fa-twitter-square"></i> twitter</a></li>
								<li><a target="_blank" href="http://youtube.com/uzmanincom"><i class="fa fa-youtube-square"></i> youtube</a></li>
								<li><a target="_blank" href="http://github.com/smtaydemir"><i class="fa fa-github-square"></i> github</a></li>
							</ul>
						</div>
						<!-- USER SOCİAL /end -->

					</div>
					<!-- USER INFO /end -->

				</div>
			</section>
			<!-- JUMBOTRON /end -->


			<!-- CONTENT -->
			<section class="content">
				<div class="container">
					<!-- BLOG -->
					<div class="blogs">
					<?php while(have_posts()):the_post(); ?>
						<!-- ARTICLE -->
						<article class="blog">
							<div class="article-title">
								<span class="left art-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
								<span class="right art-date"><i class="fa fa-calendar"></i> <?php the_date(); ?></span></span>
								<div class="clear-fix"></div>
							</div>
							<div class="article-content">
								<?php the_excerpt(); ?>
							</div>
						</article>
						<!-- ARTICLE /end -->
					<?php endwhile; ?>
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