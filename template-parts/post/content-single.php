<!--========== BEGIN .MODULE ==========-->
<section class="module">
    <div class="container">
        <?php get_template_part('template-parts/section/breaking_news'); ?>
        <!--========== BEGIN .ROW ==========-->
        <div class="row no-gutter">
            <!--========== BEGIN .COL-MD-8 ==========-->
            <div class="col-md-8">
                <!--========== BEGIN .POST ==========-->
                <div class="post post-full clearfix">
                    <div class="entry-media">
                        <a href="#">
                            <?php the_post_thumbnail('duaempath-featured-image-detail', array('class' => 'img-responsive')); ?>
                        </a>
                    </div>
                    <div class="entry-main">
                        <div class="entry-title">
                            <h4 class="entry-title"><a href="#"><?php the_title() ?></a></h4>
                        </div>

                        <div class="post-meta-elements">
                            <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">By <?php the_author() ?></a> </div>
                            <div class="post-meta-date"> <i class="fa fa-calendar"></i><?php the_date() ?> </div>
                            <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">23 Comments</a> </div>
                        </div>
                        <div class="entry-content">
                            <?php the_content() ?>
                        </div>
                        <div class="news">
                            <!-- Begin .item -->
                            <div class="item">
                                <div class="item-image-3"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/single-post_800x400.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <div class="title-left title-style04 underline04">
                                        <h3><a href="#"><strong>Nostrud</strong> sed exercitation dolore</a></h3>
                                    </div>
                                    <p>Tempor incididunt ut labore et dolore magna aliqu ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                                    <p>Tempor incididunt ut labore et dolore magna aliqu ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua.</p>
                                    <div class="post-tags"><span class="post-tags_title">tags :</span><a href="#" class="post-tags_link"> Movies,</a><a href="#" class="post-tags_link"> Fashion,</a><a href="#" class="post-tags_link"> Health</a></div>
                                </div>
                            </div>
                            <!-- End .item -->
                        </div>
                    </div>
                </div>
                <!--  End .post -->
                <!-- Begin .author-post -->
                <div class="author-post clearfix">
                    <div class="author-post_img"><img src="img/author.jpg" alt="foto" class="img-responsive"></div>
                    <div class="author-post_content">
                        <h5 class="author-post_title">Authoor:<span class="author-post_name"> Hugh Jackson</span></h5>
                        <div class="post-meta-elements">
                            <div class="post-meta-author"> <i class="fa fa-user"></i><a href="#">Admin</a> </div>
                            <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a href="#">Politics</a> </div>
                            <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                            <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">Comments</a> </div>
                        </div>
                        <div class="author-post_info">Tempor incididunt labore et dolore magna aliqua enimad min veniam saquis nostru exercitation ullamco laboris onsequat lorem ipsum dolor tasit amet consect elit sed eiusmod incididunt labore et dolore magna aliquipsum.</div>
                        <ul class="social-links list-inline">
                            <li><a href="#" class="social-link facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="social-link youtube"><i class="fa fa-youtube-play"></i></a></li>
                            <li><a href="#" class="social-link twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="social-link instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="social-link linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="pager">
                        <a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
                        <a href="#">Next<i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
                <!--  End .author-post -->
                <?php comments_template() ?>
            </div>
            <!--========== END .COL-MD-8 ==========-->
            <!--========== BEGIN .COL-MD-4==========-->
            <div class="col-md-4">
                <!--========== BEGIN #SIDEBAR-NEWSFEED ==========-->
                <!-- Begin .block-title-2 -->
                <div class="block-title-2">
                    <h3>Recent Posts</h3>
                </div>
                <!-- End .block-title-2 -->
                <div class="sidebar-newsfeed">
                    <!-- Begin .newsfeed -->
                    <div class="newsfeed-1">
                        <ul>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image01.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">Migrant Crisis</a></h4>
                                        <p class="ellipsis"><a href="#">The proposal involves resettling one refugee in Europe for each one...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image02.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">Smith's Team</a></h4>
                                        <p class="ellipsis"><a href="#">US Democratic presidential candidate speaks with supporters...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image03.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">Total Eclipse</a></h4>
                                        <p class="ellipsis"><a href="#">Image caption in Indonesia was the best place to witness the total...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image04.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">Global Health</a></h4>
                                        <p class="ellipsis"><a href="#">Global health has been defined as an area of study and research...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image05.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">Woman in Mission Hills</a></h4>
                                        <p class="ellipsis"><a href="#">A woman were arrested after he allegedly fired off from a car...</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="item">
                                    <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image06.jpg" alt=""></a></div>
                                    <div class="item-content">
                                        <h4 class="ellipsis"><a href="#">3 Years After Man's Death</a></h4>
                                        <p class="ellipsis"><a href="#">Mother hopes renewed reward will help find her son’s killer...</a></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End .newsfeed -->
                </div>
                <!--========== END #SIDEBAR-NEWSFEED ==========-->
                <!--========== BEGIN .TV SCHEDULE ==========-->
                <div class="sidebar-schedule">
                    <!-- Begin .block-title-2 -->
                    <div class="block-title-2">
                        <h3><strong>TV</strong> Schedule</h3>
                    </div>
                    <!-- End .block-title-2 -->
                    <div id="sidebar-schedule-slider" class="owl-carousel">
                        <!-- Begin .schedule-slide -->
                        <div class="sidebar-schedule-slide">
                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                    <div class="content">
                                        <h3 class="hour-tag">18:00</h3>
                                        <h4 class="sidebar-show-title bg-1">Around the World</h4>
                                        <p>New global rules on firms' tax disclosure urged by economists</p>
                                    </div>
                                    <img src="img/sidebar-schedule_slider-image01.jpg" alt="">
                                </a> </div>
                        </div>
                        <!-- End .schedule-slide -->
                        <!-- Begin .schedule-slide -->
                        <div class="sidebar-schedule-slide">
                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                    <div class="content">
                                        <h3 class="hour-tag">18:45</h3>
                                        <h4 class="sidebar-show-title bg-1">Sport Headlines</h4>
                                        <p>All the latest sports news from around the world.</p>
                                    </div>
                                    <img src="img/sidebar-schedule_slider-image02.jpg" alt="">
                                </a> </div>
                        </div>
                        <!-- End .schedule-slide -->
                        <!-- Begin .schedule-slide -->
                        <div class="sidebar-schedule-slide">
                            <div class="sidebar-schedule-slider-layer full"> <a href="news.html">
                                    <div class="content">
                                        <h3 class="hour-tag">22:00</h3>
                                        <h4 class="sidebar-show-title bg-1">Happening Now</h4>
                                        <p>Kerry Thomas will take you to news when and where it happens.</p>
                                    </div>
                                    <img src="img/sidebar-schedule_slider-image03.jpg" alt="">
                                </a> </div>
                        </div>
                        <!-- End .schedule-slide -->
                    </div>
                </div>
                <!--========== END .TV SCHEDULE ==========-->
                <!--========== BEGIN .SIDEBAR-POST ==========-->
                <!-- Begin .title-style02 -->
                <div class="title-style02">
                    <h3><strong>Political</strong> News</h3>
                </div>
                <!-- End .title-style02 -->
                <div class="sidebar-post">
                    <ul>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image07.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>01</h3>
                                    <p><a href="#">How Do Non-Profits Affect The Larger Economy?</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image08.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>02</h3>
                                    <p><a href="#">A mixed business - features, merits and demerits...</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image09.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>03</h3>
                                    <p><a href="#">At least nine firefighters were injured when a massive explosion...</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image10.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>04</h3>
                                    <p><a href="#">Soccer news, scores, stats, and features...</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image11.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>05</h3>
                                    <p><a href="#">Divorce negotiations have intensified sources say...</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image12.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>06</h3>
                                    <p><a href="#">Browns Canyon, industrial town among monuments...</a></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="item">
                                <div class="item-image"><a class="img-link" href="#"><img class="img-responsive img-full" src="img/news_370x185-image13.jpg" alt=""></a></div>
                                <div class="item-content">
                                    <h3>07</h3>
                                    <p> <a href="#">Star power and an increasing number of web-to-TV success stories...</a></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--========== END .SIDEBAR-POST ==========-->
                <!-- Begin .sidebar-add-place -->
                <div class="sidebar-add-place">
                    <a href="#" target="_blank"><img src="img/banner_400x270.jpg" alt=""></a>
                </div>
                <!-- End .sidebar-add-place -->
                <!--========== BEGIN .SIDEBAR-CATEGORIES ==========-->
                <!-- Begin .block-title-1 -->
                <div class="block-title-1 center">
                    <h3>Categories</h3>
                </div>
                <!-- End .block-title-1 -->
                <div class="sidebar-categories">
                    <ul class="list list-mark-1">
                        <li><a href="#">News</a> <span>09</span> </li>
                        <li><a href="#">Business</a> <span>11</span> </li>
                        <li><a href="#">Politics</a> <span>15</span> </li>
                        <li><a href="#">Health</a> <span>10</span> </li>
                        <li><a href="#">Travel</a> <span>17</span> </li>
                        <li><a href="#">Other</a> <span>97</span> </li>
                    </ul>
                </div>
                <!--========== END .SIDEBAR-CATEGORIES ==========-->

                <!--========== BEGIN .SIDEBAR-REVIEWS==========-->
                <!-- Begin .block-title-3 -->
                <div class="block-title-3">
                    <h3>Latest Reviews</h3>
                </div>
                <!-- End .block-title-3 -->
                <ul class="sidebar-reviews">
                    <li>
                        <div class="reviews-content">
                            <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                            <div class="post-meta-elements">
                                <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a href="#">Politics</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">Comments</a> </div>
                            </div>
                        </div>
                        <ul class="ranking-star">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </li>

                    <li>
                        <div class="reviews-content">
                            <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                            <div class="post-meta-elements">
                                <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a href="#">Politics</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">Comments</a> </div>
                            </div>
                            <ul class="ranking-star">
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                                <li><i class="fa fa-star-o"></i></li>
                            </ul>
                        </div>
                    </li>

                    <li>
                        <div class="reviews-content">
                            <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                            <div class="post-meta-elements">
                                <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a href="#">Politics</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">Comments</a> </div>
                            </div>
                        </div>
                        <ul class="ranking-star">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                        </ul>
                    </li>

                    <li>
                        <div class="reviews-content">
                            <h3><a href="#">Lorem ipsum dolor amet consectetur</a></h3>
                            <div class="post-meta-elements">
                                <div class="post-meta-cat"> <i class="fa fa-tags"></i><a href="#">News</a>, <a href="#">Politics</a> </div>
                                <div class="post-meta-date"> <i class="fa fa-clock-o"></i>Dec 25, 2016 </div>
                                <div class="post-meta-comments"> <i class="fa fa-comment-o"></i><a href="#">Comments</a> </div>
                            </div>
                        </div>
                        <ul class="ranking-star">
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                            <li><i class="fa fa-star-o"></i></li>
                        </ul>
                    </li>
                </ul>
                <!--========== END .SIDEBAR-REVIEWS ==========-->

                <!--========== BEGIN .CALENDAR==========-->
                <div id='calendar'></div>
                <!--========== END .CALENDAR ==========-->
                <!--========== BEGIN #SIDEBAR-NEWSLETTER ==========-->
                <div id="sidebar-newsletter">
                    <!-- Begin .title-style01 -->
                    <div class="title-style01">
                        <h3><strong>Newsletter</strong></h3>
                    </div>
                    <!-- End .title-style01 -->
                    <!-- Begin .sidebar-newsletter-form -->
                    <div class="sidebar-newsletter-form">
                        <form class="form-horizontal" action="http://via-theme.com/24hNews/include/subscribe.php" id="subscribeForm" method="POST">
                            <div class="input-group">
                                <input title="Newsletter" class="form-control" name="email" type="email" id="address" placeholder="Enter Your Email Address" data-validate="validate(required, email)" required>
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-success">Subscribe</button>
                                </span> </div>
                        </form>
                        <span id="result" class="alertMsg"></span>
                    </div>
                    <!-- End .sidebar-newsletter-form -->
                </div>
                <!--========== END #SIDEBAR-NEWSLETTER ==========-->
                <!--========== BEGIN #SIDEBAR-SOCIAL-BUTTONS ==========-->
                <div id="sidebar-social-icons">
                    <ul class="sidebar-social-icons">
                        <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> </li>
                        <li> <a href="#" class="youtube"><i class="fa fa-youtube"></i></a> </li>
                        <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> </li>
                        <li> <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> </li>
                        <li> <a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a> </li>
                        <li> <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> </li>
                        <li> <a href="#" class="rss"><i class="fa fa-rss"></i></a> </li>
                        <li> <a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a> </li>
                    </ul>
                </div>
                <!--========== END #SIDEBAR-SOCIAL-BUTTONS ==========-->
            </div>
            <!--========== END .COL-MD-4 ==========-->
        </div>
        <!-- Begin .add-place -->
        <div class="add-place"> <a href="#" target="_blank"><img src="img/banner_1248x100.jpg" alt=""></a> </div>
        <!-- End .add-place -->
        <h2 class="title-style05 style-02">more headlines in our <span><a href="#">related posts</a></span></h2>
        <!-- Begin .title-style05-bg -->
        <div class="center-title"> <span class="title-line-left"></span>
            <h4 class="title-style05 style-01">latest # news</h4>
            <span class="title-line-right"></span>
        </div>
        <!-- End .title-style05-bg -->
    </div>
    <!--========== END .CONTAINER ==========-->
</section>
<!--========== END .MODULE ==========-->