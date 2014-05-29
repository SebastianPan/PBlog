<?php get_header(); ?>
		<?php while(have_posts()):the_post(); ?>
			<section class="content">
				<div class="container">
					<div class="pages-head"><?php the_title(); ?></div>
					<div class="pages-content">
						<?php the_content(); ?>
					</div>
				</div>
			</section>
		<?php endwhile; ?>

		</div>
		<!-- PAGECONTENT /end -->

		<?php get_sidebar(); ?>

<?php get_footer(); ?>