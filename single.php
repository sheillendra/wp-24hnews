<?php

/**
 * The template for displaying all posts
 *
 * @link @link https://anjani.co.id/wordpress/themes/24h-news
 *
 * @package 24h_news
 */
?>
<?php get_header(); ?>

<!--========== BEGIN #MAIN-SECTION ==========-->
<section id="main-section">

	<?php
	if (have_posts()) :

		while (have_posts()) :
			the_post();
			get_template_part('template-parts/post/content', 'single');

		endwhile;

		the_posts_pagination();

	else :

		get_template_part('template-parts/post/content', 'none');

	endif;
	?>
</section>
<!--========== END #MAIN-SECTION ==========-->
<?php get_footer();
