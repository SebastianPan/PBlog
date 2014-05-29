<?php get_header(); ?>
		<section class="content">
				<div class="container">
					<?php while(have_posts()):the_post(); ?>
					<article class="single">
						<div class="single-article-title"><?php the_title(); ?></div>
						<div class="single-article-info">
							<span><i class="fa fa-calendar"></i> <?php the_date(); ?></span>
							<span><i class="fa fa-comments"></i> <?php comments_number('0 Yorum','1 Yorum','% Yorum'); ?></span>
							<span><i class="fa fa-bullseye"></i> <?php if(function_exists('the_views')) { the_views(); } ?></span>
							<span><i class="fa fa-folder"></i> <?php the_category('title_li=&'); ?></span>
						</div>
						<div class="single-article-content">
							<?php the_content(); ?>
						</div>

						<div class="social-button">
							<div class="facebook"><div class="fb-share-button" data-href="<?php the_permalink(); ?>" data-type="button_count"></div></div>
							<div class="twitter"><a style="margin-left : 5px;" href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script></div>
							<div class="googleplus"><!-- Bu etiketi, paylaş düğmesi adlı widget'ın oluşturulmasını istediğiniz yere ekleyin. -->
							<div class="g-plus" data-action="share" data-annotation="bubble"></div>

							<!-- Bu etiketi son paylaş etiketinin arkasına ekleyin. -->
							<script type="text/javascript">
							  (function() {
							    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
							    po.src = 'https://apis.google.com/js/platform.js';
							    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
							  })();
							</script></div>
							<div class="clear-fix"></div>
						</div>
						<?php comments_template(); ?>
					</article>
				<?php endwhile; ?>
				</div>
			</section>

		</div>
		<!-- PAGECONTENT /end -->

		<?php get_sidebar(); ?>

<?php get_footer(); ?>