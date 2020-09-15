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

	<?php get_template_part('template-parts/section/paralax'); ?>

	<section class="module">
		<!--========== BEGIN .CONTAINER ==========-->
		<div class="container">
			<?php get_template_part('template-parts/section/breaking_news'); ?>
			<?php get_template_part('template-parts/section/news_slider'); ?>
		</div>
	</section>

	<section class="module">
		<div class="container">
			<div class="row no-gutter">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="news">
						<div class="module-title">
							<h3 class="title"><span class="bg-2">Berita Terkini</span></h3>
							<!-- <h3 class="subtitle">Berita Terkini</h3> -->
						</div>

						<?php
						if (have_posts()) :

							while (have_posts()) :
								the_post();
								get_template_part('template-parts/post/content', get_post_format());

							endwhile;

							the_posts_pagination();

						else :

							get_template_part('template-parts/post/content', 'none');

						endif;
						?>
					</div>
				</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</section>
</section>
<!--========== END #MAIN-SECTION ==========-->
<?php get_footer();
