<?php

/**
 * Custom comment walker for this theme.
 *
 * @package 24h_news
 * @since 1.0
 */

if (!class_exists('DuaEmpatH_Walker_Comment')) {
	/**
	 * CUSTOM COMMENT WALKER
	 * A custom walker for comments, based on the walker in Twenty Nineteen.
	 */
	class DuaEmpatH_Walker_Comment extends Walker_Comment
	{

		/**
		 * {@inheritdoc}
		 * 
		 * @param WP_Comment $comment       Global comment object.
		 */
		protected function html5_comment($comment, $depth, $args)
		{
			$tag = ('div' === $args['style']) ? 'div' : 'li';

			$commenter          = wp_get_current_commenter();
			$show_pending_links = !empty($commenter['comment_author']);

			if ($commenter['comment_author_email']) {
				$moderation_note = __('Your comment is awaiting moderation.');
			} else {
				$moderation_note = __('Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.');
			}
?>
			<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($this->has_children ? 'parent' : '', $comment); ?>>
				<article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
					<footer class="comment-meta">
						<div class="avatar comment-author vcard">
							<?php
							if (0 != $args['avatar_size']) {
								echo get_avatar($comment, $args['avatar_size'], '', '', array(
									'class' => 'img-responsive'
								));
							}
							?>
						</div><!-- .comment-author -->

						
						<?php
							$comment_author = get_comment_author_link($comment);

							if ('0' == $comment->comment_approved && !$show_pending_links) {
								$comment_author = get_comment_author($comment);
							}

							printf(
								/* translators: %s: Comment author link. */
								__('%s'),
								sprintf('<b class="fn">%s</b>', $comment_author)
							);
							?>

						<div class="comment-metadata">
							<a href="<?php echo esc_url(get_comment_link($comment, $args)); ?>">
								<time datetime="<?php comment_time('c'); ?>">
									<?php
									/* translators: 1: Comment date, 2: Comment time. */
									printf(__('%1$s at %2$s'), get_comment_date('', $comment), get_comment_time());
									?>
								</time>
							</a>
							<?php edit_comment_link(__('Edit'), '<span class="edit-link">', '</span>'); ?>
						</div><!-- .comment-metadata -->

						<?php if ('0' == $comment->comment_approved) : ?>
							<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
						<?php endif; ?>
					</footer><!-- .comment-meta -->

					<div class="comment-content">
						<?php comment_text(); ?>
					</div><!-- .comment-content -->

					<?php
					if ('1' == $comment->comment_approved || $show_pending_links) {
						comment_reply_link(
							array_merge(
								$args,
								array(
									'reply_text' => 'Balas',
									'add_below' => 'div-comment',
									'depth'     => $depth,
									'max_depth' => $args['max_depth'],
									'before'    => '<div class="reply">',
									'after'     => '</div>',
								)
							)
						);
					}
					?>
				</article><!-- .comment-body -->
			<?php
		}

		protected function _html5_comment($comment, $depth, $args)
		{
			global $post;
			$commenter          = wp_get_current_commenter();
			$show_pending_links = !empty($commenter['comment_author']);

			if ($commenter['comment_author_email']) {
				$moderation_note = __('Your comment is awaiting moderation.');
			} else {
				$moderation_note = __('Your comment is awaiting moderation. This is a preview, your comment will be visible after it has been approved.');
			}

			$comment_author = get_comment_author_link($comment);

			if ('0' == $comment->comment_approved && !$show_pending_links) {
				$comment_author = get_comment_author($comment);
			}

			if ($this->has_children) {
				echo '<ul class="children">';
				//	echo sprintf('<ul class="children"><li><div id="comment-%s" %s>', $comment->comment_ID, comment_class('clearfix', $comment, null, false));
			}
			// else {
			echo sprintf('<li><div id="comment-%s" %s>', $comment->comment_ID, comment_class('clearfix', $comment, null, false));
			//} 
			?>

				<div class="avatar">
					<?php
					echo get_avatar($comment, 70, '', '', array(
						'class' => 'img-responsive'
					));
					?>
				</div>
				<div class="comment-content">
					<div class="comment-title">
						<h5 class="comment-author"><?php echo $comment_author ?></h5>
						<div class="comment-date"><i class="fa fa-calendar"></i><span class="day"> <?php comment_time('Y-m-d H:I:s'); ?></span></div>
					</div>
					<?php if ('0' == $comment->comment_approved) : ?>
						<em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
						<br />
					<?php endif; ?>
					<p><?php comment_text(); ?></p>
					<!-- <button type="button" class="comment-btn btn btn-default">reply</button> -->
					<!-- <button type="button" class="comment-btn btn btn-primary">edit</button> -->
					<?php
					if ('1' == $comment->comment_approved || $show_pending_links) {
						echo sprintf('<a href="%s" class="comment-btn btn btn-default" style="margin-bottom:5px;">balas</a>', esc_url(
							add_query_arg(
								array(
									'replytocom'      => $comment->comment_ID,
									'unapproved'      => false,
									'moderation-hash' => false,
								),
								get_permalink($post->ID)
							)  . '#' . (isset($args['respond_id']) ? $args['respond_id'] : 'respond')
						));
					}
					?>
				</div>
	<?php
		}

		/**
		 * {@inheritdoc}
		 */
		public function end_el(&$output, $comment, $depth = 0, $args = array())
		{
			$output .= '</div></li>';
		}

		/**
		 * Traverse elements to create list from elements.
		 *
		 * Display one element if the element doesn't have any children otherwise,
		 * display the element and its children. Will only traverse up to the max
		 * depth and no ignore elements under that depth. It is possible to set the
		 * max depth to include all depths, see walk() method.
		 *
		 * This method should not be called directly, use the walk() method instead.
		 *
		 * @since 2.5.0
		 *
		 * @param object $element           Data object.
		 * @param array  $children_elements List of elements to continue traversing (passed by reference).
		 * @param int    $max_depth         Max depth to traverse.
		 * @param int    $depth             Depth of current element.
		 * @param array  $args              An array of arguments.
		 * @param string $output            Used to append additional content (passed by reference).
		 */
		// public function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output)
		// {
		// 	if (!$element) {
		// 		return;
		// 	}

		// 	$this->start_el($output, $element, $depth, ...array_values($args));
		// 	// End this element.
		// 	$this->end_el($output, $element, $depth, ...array_values($args));
		// }
	}
}
