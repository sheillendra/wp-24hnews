<?php
$headlines = get_posts(array('category_name' => 'headline'));
$classCounter = array(0 => 'first', 1 => 'second', 2 => 'third', 3 => 'fourth');
$sizeCounter = array(0 => '1', 1 => '2', 2 => '3', 3 => '3');
$fullCounter = array(0 => 'width', 1 => 'height', 2 => 'width', 3 => 'width');
?>
<!--========== BEGIN #NEWS-SLIDER ==========-->
<div id="news-slider" class="owl-carousel">

    <?php
    $counter = 0;
    foreach ($headlines as $k => $headline) :
        if ($counter === 0) {
            echo '<div class="news-slide">';
        }
    ?>
        <div class="news-slider-layer <?php echo $classCounter[$counter] ?>">
            <a href="news.html" target="_blank">
                <div class="content">
                    <span class="category-tag bg-1">Around the World</span>
                    <p>New global rules on firms' tax disclosure urged by economists</p>
                </div>
                <?php echo get_the_post_thumbnail($headline->ID, 'duaempath-featured-image-news_slider_' . $sizeCounter[$counter], array('style' => $fullCounter[$counter] . ': 100%')) ?>
            </a>
        </div>
    <?php
        if ($counter === 3) {
            echo '</div>';
            $counter = 0;
        } else {
            $counter++;
        }
    endforeach;
    if ($counter > 0) {
        echo '</div>';
    }
    ?>
    <!-- 
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
    </div> -->
</div>
<!--========== END .NEWS-SLIDER ==========-->