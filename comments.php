<?php

/**
 * The template for displaying all comments
 *
 * @link @link https://anjani.co.id/wordpress/themes/24h-news
 *
 * @package 24h_news
 */
?>


<!--  Begin .comment-section -->
<div class="comment-section">
	<?php if ($comments) : ?>
		<!-- Begin .title-style01 -->
		<div class="comment-title title-style01">
			<h4><?php echo count($comments) ?> Comments</h4>
		</div>
	<?php endif; ?>
	<!-- End .title-style01 -->
	<ul class="comments-list">
		<?php
		wp_list_comments(
			array(
				'walker'      => new DuaEmpatH_Walker_Comment(),
				'avatar_size' => 70,
				'style'       => 'div',
			)
		);
		?>

	</ul>
</div>
<div class="form-reply-section">
	<?php
	if (comments_open() || pings_open()) {

		// if ($comments) {
		// 	echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
		// }

		comment_form(
			array(
				'class_form'         => 'form-reply ui-form',
				'title_reply_before' => '<div class="comment-title title-style01"><h4>',
				'title_reply_after'  => '</h4></div>',
				'comment_field' => sprintf(
					'<div class="row no-gutter"><div class="col-md-12"><textarea class="form-control" id="comment" name="comment" rows="5" maxlength="65525" required="required" placeholder="%s"></textarea></div></div>',
					_x('Comment', 'noun')
				),
				'class_submit' => 'btn btn-primary btn-black',
				'submit_field' => '<div class="row no-gutter"><div class="col-md-12">%1$s %2$s</div></div>',
			)
		);
	} elseif (is_single()) {

		if ($comments) {
			echo '<hr class="styled-separator is-style-wide" aria-hidden="true" />';
		}

	?>

		<div class="comment-respond" id="respond">

			<p class="comments-closed"><?php _e('Comments are closed.', 'twentytwenty'); ?></p>

		</div><!-- #respond -->

	<?php
	}
	?>
</div>