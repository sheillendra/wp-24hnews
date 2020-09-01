<?php 

?>
<?php if (has_nav_menu('menu-1')) : ?>
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'menu-1',
            'menu_class'     => 'sidenav-menu',
            'walker' => new Duaempath_Walker_Nav_Menu(),
            'submenu_class' => 'sidenav-dropdown',
            'submenu_data' => 'data-sidenav-dropdown',
            'submenu_toggle' => '<div class="icon-sub-menu" data-sidenav-dropdown-toggle><span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span><span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span></div>',
            'depth' => 2,
        )
    );
    ?>
<?php endif ?>
<!-- <ul class="sidenav-menu">
    <li>
        <a href="index-2.html" class="active">Home</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="watch-live.html">Watch Live 24/7</a>
            </li>
            <li>
                <a href="24-tv-radio.html">24 TV & Radio</a>
            </li>
            <li>
                <a href="web-shows.html">Web Shows</a>
            </li>
            <li>
                <a href="24-news-store.html">24 News Store</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="world.html">World</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="africa.html">Africa</a>
            </li>
            <li>
                <a href="antarctica.html">Antarctica</a>
            </li>
            <li>
                <a href="asia.html">Asia</a>
            </li>
            <li>
                <a href="australia.html">Australia</a>
            </li>
            <li>
                <a href="europe.html">Europe</a>
            </li>
            <li>
                <a href="middle-east.html">Middle East</a>
            </li>
            <li>
                <a href="north-america.html">North America</a>
            </li>
            <li>
                <a href="south-america.html">South America</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="news.html">News</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="politics.html">Politics</a>
            </li>
            <li>
                <a href="business.html">Business</a>
            </li>
            <li>
                <a href="tech-science.html">Tech-Science</a>
            </li>
            <li>
                <a href="lifestyle.html">Lifestyle</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="sport.html">Sport</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="americanfootball.html">American Football</a>
            </li>
            <li>
                <a href="soccer.html">Soccer</a>
            </li>
            <li>
                <a href="basketball.html">Basketball</a>
            </li>
            <li>
                <a href="formula-1.html">Formula 1</a>
            </li>
            <li>
                <a href="tennis.html">Tennis</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="health.html">Health</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="health-home.html">Health Home</a>
            </li>
            <li>
                <a href="men-health.html">Men's Health</a>
            </li>
            <li>
                <a href="women-health.html">Women's Health</a>
            </li>
            <li>
                <a href="children-health.html">Children's Health</a>
            </li>
            <li>
                <a href="alternative-medicine.html">Alternative Medicine</a>
            </li>
            <li>
                <a href="nutrition.html">Nutrition & Fitness</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="travel.html">Travel</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="destinations.html">Destinations</a>
            </li>
            <li>
                <a href="types-of-trip.html">Types Of Trip</a>
            </li>
            <li>
                <a href="national-parks.html">National Parks</a>
            </li>
            <li>
                <a href="hotels.html">Hotels</a>
            </li>
            <li>
                <a href="food-drinks.html">Food & drinks</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="art-entertainment.html">Art & Entertainment</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="music-opera.html">Music & Opera</a>
            </li>
            <li>
                <a href="art-design.html">Art & design</a>
            </li>
            <li>
                <a href="theatre-dance.html">Theatre & Dance</a>
            </li>
            <li>
                <a href="celebrity-film.html">Celebrity & Film</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="tv-schedule.html">TV Schedule</a>
    </li>
    <li>
        <a href="#">More</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="coming-soon.html">Coming Soon</a>
            </li>
            <li>
                <a href="autos.html">Autos</a>
            </li>
            <li>
                <a href="deals.html">Deals</a>
            </li>
            <li>
                <a href="environment.html">Environment</a>
            </li>
            <li>
                <a href="about-us.html">About Us</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">Pages</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="single-post.html">Single Post</a>
            </li>
            <li>
                <a href="404.html">Error 404</a>
            </li>
            <li>
                <a href="shortcodes.html">Shortcodes</a>
            </li>
            <li>
                <a href="video.html">Video</a>
            </li>
            <li>
                <a href="video-full.html">Video Full Width</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="#">Contact</a>
        <div class="icon-sub-menu" data-sidenav-dropdown-toggle>
            <span class="sidenav-dropdown-icon show" data-sidenav-dropdown-icon></span>
            <span class="sidenav-dropdown-icon up-icon" data-sidenav-dropdown-icon></span>
        </div>
        <ul class="sidenav-dropdown" data-sidenav-dropdown>
            <li>
                <a href="contact.html">Contact</a>
            </li>
            <li>
                <a href="contact-1.html">Contact 1</a>
            </li>
        </ul>
    </li>
</ul> -->