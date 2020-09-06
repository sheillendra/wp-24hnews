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
			<!--========== BEGIN .BREAKING-NEWS ==========-->
			<!-- Begin .outer -->
			<div class="outer">
				<div class="breaking-ribbon">
					<h4>Breaking News</h4>
				</div>
				<!-- Begin .newsticker -->
				<div class="newsticker">
					<ul>
						<li>
							<h4><span class="category">News:</span><a href="#"> Extra! Extra! Rethinking the 24 h News Breaking News Experience.</a></h4>
						</li>
						<li>
							<h4><span class="category">Travel:</span><a href="#"> Man seriously hurt after jumping from upper level terminal while fleeing police.</a></h4>
						</li>
						<li>
							<h4><span class="category">Politics:</span><a href="#"> We see momentous or informative events that are relevant to a wide audience.</a></h4>
						</li>
						<li>
							<h4><span class="category">Health:</span><a href="#"> Evanston doctor gives up license after cancer drug probe.</a></h4>
						</li>
						<li>
							<h4><span class="category">World:</span><a href="#"> North Coast fest organizers plan to decrease noise, increase security.</a></h4>
						</li>
						<li>
							<h4><span class="category">Finance:</span><a href="#"> Credit rating hit, another big tax hike possible as clock ticks on pension overhaul.</a></h4>
						</li>
					</ul>
					<div class="navi">
						<button class="up">
							<i class="fa fa-caret-left"></i>
						</button>
						<button class="down">
							<i class="fa fa-caret-right"></i>
						</button>
					</div>
				</div>
				<!-- End .newsticker -->
			</div>
			<!-- End .outer -->
			<!--========== END .BREAKING-NEWS ==========-->
			<!--========== BEGIN #NEWS-SLIDER ==========-->
			<div id="news-slider" class="owl-carousel">
				<div class="news-slide">
					<div class="news-slider-layer first">
						<a href="news.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-1">Around the World</span>
								<p>New global rules on firms' tax disclosure urged by economists</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image01.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer second">
						<a href="politics.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-6">Politics</span>
								<p>How EU referendum has changed politics, whatever the result</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image02.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer third">
						<a href="sport.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-4">Sport News</span>
								<p>Tour de France Countdown: Race preview</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image03.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer fourth">
						<a href="travel.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-2">Travel</span>
								<p>Get the latest travel news and train times</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image04.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="news-slide">
					<div class="news-slider-layer first">
						<a href="tech-science.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-1">Technology</span>
								<p>J. Stone interview: a manifesto for involving citizens in science</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image05.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer second">
						<a href="lifestyle.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-6">Lifestyle</span>
								<p>Feelgood fashion: clothes that enhance your mood</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image06.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer third">
						<a href="news.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-4">Headlines</span>
								<p>A woman is in a process to adopt a Haitian girl</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image07.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer fourth">
						<a href="food-drinks.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-2">Environment</span>
								<p>Breakfast is an increasingly tasty strategy for restaurant industry</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image08.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="news-slide">
					<div class="news-slider-layer first">
						<a href="news.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-1">Breaking News</span>
								<p>The police responded to a protest in downtown</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image09.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer second">
						<a href="politics.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-6">Politics</span>
								<p>The EU refugee and migration policy is not working</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image10.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer third">
						<a href="soccer.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-4">Soccer News</span>
								<p>Live match reports and latest scores</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image11.jpg" alt="">
						</a>
					</div>
					<div class="news-slider-layer fourth">
						<a href="health.html" target="_blank">
							<div class="content">
								<span class="category-tag bg-2">Health</span>
								<p>Food & Nutrition | Healthy Dinner Recipes | Healthy Desserts</p>
							</div>
							<img src="http://localhost/templates/24hNews/img/index_slider-image12.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
			<!--========== END .NEWS-SLIDER ==========-->
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
