<?php
if ( post_password_required() )
	return;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<div class="single-article-title">
			Yorumlar (<?php comments_number('0','bir','%'); ?>)
		</div>

		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'personal_blog', 'style' => 'ol' ) ); ?>
		</ol>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below" class="navigation" role="navigation">
			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'personal' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'personal' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'personal' ) ); ?></div>
		</nav>
		<?php endif; ?>

		<?php
		
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Bu içerik yoruma kapalı.' , 'personal' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>
	<div class="single-article-title"><?php comment_form_title('Yorum Yap'); ?></div>
	<?php comment_form(array('title_reply' => '')); ?>

</div>