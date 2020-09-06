<div class="item">
    <div class="item-image-1">
        <a class="img-link" href="#">
            <!-- <img class="img-responsive img-full" src="http://localhost/templates/24hNews/img/index_800x400-image19.jpg" alt=""> -->
            <?php the_post_thumbnail('duaempath-featured-image-thumbnail', array('class' => 'img-responsive img-full')); ?>
        </a>
    </div>
    <div class="item-content">
        <div class="title-left title-style04 underline04">
            <?php the_title('<h3><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>'); ?>
            <!-- <h3><a href="#"><strong>Global</strong> Health Priorities</a></h3> -->
        </div>
        <br>
        <div class="post-meta-elements">
            <div class="post-meta-author">
                <i class="fa fa-user"></i>
                <a href="#">By Hugh Jackson</a>
            </div>
            <div class="post-meta-date">
                <i class="fa fa-calendar"></i>December 25, 2016
            </div>
        </div>
        <p><a href="#" target="_blank" class="external-link">Health has gained importance on the global agenda.</a></p>
        <!-- <p><a href="#" target="_blank" class="external-link">In this article three issues are considered: global health policy actors, global health priorities...</a></p> -->
        <!-- <p><a href="#" target="_blank" class="external-link">Robot performs surgery on soft tissue better than human hands.</a></p> -->
        <div>
            <a href="#"><span class="read-more">Continue reading</span></a>
        </div>
    </div>
</div>