<?php

/**
* Comments Function
* @param $comment,$args,$depth
*/
function personal_blog( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
		<p><?php _e( 'Pingback:', 'personal' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Düzenle)', 'personal' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
		global $post;
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<article id="comment-<?php comment_ID(); ?>" class="comment">
			<header class="comment-meta comment-author vcard">
				<?php
					echo get_avatar( $comment, 100 );
					echo '<div class="author-detail">';
					printf( '<span class="author-name">%1$s %2$s</span>',
						get_comment_author_link(),
						// Yorum yapan kişi yönetici ise
						( $comment->user_id === $post->post_author ) ? '<span>' . __( 'editör', 'personal' ) . '</span>' : ''
					); 
					printf( '<a class="comment_date" href="%1$s"><time datetime="%2$s">%3$s</time></a>',
						esc_url( get_comment_link( $comment->comment_ID ) ),
						get_comment_time( 'c' ),
						/* dönüştürme: 1: tarih, 2: zaman */
						sprintf( __( '%1$s', 'personal' ), get_comment_date(), get_comment_time() )
					);
					echo '</div>';
				?>
			</header>

			<?php if ( '0' == $comment->comment_approved ) : ?>
				<p class="comment-awaiting-moderation"><?php _e( '<i>Onay bekliyor.</i>', 'personal' ); ?></p>
			<?php endif; ?>

			<section class="comment-content comment">
				<?php comment_text(); ?>
				<?php edit_comment_link( __( 'Düzenle', 'personal' ), '<p class="edit-link">', '</p>' ); ?>
			</section>
			
			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( '{ cevapla }', 'personal' ), 'after' => '', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div>
			<div class="clear-fix"></div>
		</article><!-- #comment-## -->
	<?php
		break;
	endswitch;
}

/**
* Dynamic Sidebar Function 
*/
register_sidebars(1, array(
		'name' => "sidebar",
		'before_widget' => '<div class="sidebarBox">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="title">',
		'after_title'   => '</div>'
	) );
