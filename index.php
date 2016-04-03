
<?php  get_header();?>

<?php get_template_part("focus"); ?>

<div class="container penci_sidebar right-sidebar">
<div id="main" class="penci-layout-magazine-1 penci-main-sticky-sidebar">
<div class="theiaStickySidebar">

<section class="home-featured-cat mag-cat-style-1">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <?php
                    $blog_cat =  get_category_by_slug('blog');

        ?>
        <h3 class="inner-arrow"><a href="<?php echo get_category_link($blog_cat);?>"><?php echo $blog_cat -> name;?></a></h3>
    </div>
    <div class="home-featured-cat-content style-1">

        <?php

            query_posts("cat=".$blog_cat->term_id."&order=desc&showposts=1");

            while(have_posts()) {

                the_post();



                ?>

                <div class="cat-left">
                    <div class="mag-post-box first-post">
                        <div class="magcat-thumb">
                            <a href="<?php the_permalink(); ?>"><img
                                    width="585" height="390"
                                    src="<?php the_post_thumbnail_url('m');?>"
                                    class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"/></a>
                        </div>
                        <div class="magcat-detail">
                            <div class="mag-header"><h3 class="magcat-titlte"><a
                                        href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>

                                <div class="grid-post-box-meta mag-meta">
                                <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a
                                        href="<?php the_author_link();?>"><?php the_author();?></a></span>
                                    <span><i class="fa fa-calendar fa-fw"></i> <?php the_time('Y-m-d');?></span>
                                </div>
                            </div>
                            <div class="mag-excerpt">
                                <p><?php the_excerpt();?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php

            }

          wp_reset_query();

        ?>
        <div class="cat-right">

            <?php
            query_posts("cat=".$blog_cat->term_id."&order=desc&showposts=4&offset=1");

                while(have_posts()){
                    the_post();
            ?>

            <div class="mag-post-box">
                <div class="magcat-thumb">
                    <a href="<?php the_permalink();?>"><img
                            width="585" height="390"
                            src="<?php the_post_thumbnail_url();?>"
                            class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"
                           /></a>
                </div>
                <div class="magcat-detail">
                    <h3 class="magcat-titlte"><a
                            href="<?php the_permalink();?>"><?php the_title();?></a></h3>

                    <div class="grid-post-box-meta mag-meta">
                        <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                    </div>

                </div>
            </div>

            <?php

            }
            wp_reset_query();
            ?>
        </div>
    </div>


</section>
<section class="home-featured-cat mag-cat-style-5">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <?php

              $sj = get_category_by_slug('sj');


        ?>

        <h3 class="inner-arrow"><a href="<?php echo get_category_link($sj)?>"><?php echo $sj->name;?></a></h3>
    </div>
    <div class="home-featured-cat-content style-5">
        <div class="penci-carousel penci-magcat-carousel" data-auto="true" data-dots="false" data-arrows="true">

            <?php


                query_posts("cat=".$sj->term_id."&order=desc&showposts=6");

                while(have_posts()){

                    the_post();


            ?>



            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="<?php the_permalink();?>" class="mag-post-thumb">

                        <img  src="<?php the_post_thumbnail_url('m');?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>" />

                    </a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                            <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d")?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            wp_reset_query();
            ?>

            								</div>
    </div>


</section>
<section class="home-featured-cat mag-cat-style-4">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <?php
            $qy = get_category_by_slug("qy");


        ?>
        <h3 class="inner-arrow"><a href="<?php echo get_category_link($qy) ?>"><?php echo $qy->name;?></a></h3>
    </div>
    <div class="home-featured-cat-content style-4">
        <div class="penci-slider penci-single-mag-slider" data-smooth="true" data-control="false" data-dir="true" data-auto="true" data-autotime="5000" data-speed="600">
            <ul class="slides">

               <?php

                 query_posts("cat=".$qy->term_id.'&order=desc&showposts=6');

                 while(have_posts()){

                     the_post();



               ?>

                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="<?php the_permalink();?>" class="mag-single-slider-overlay"></a>
                        <a href="<?php the_permalink();?>"><img  src="<?php the_post_thumbnail_url('l');?>" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="This is an image caption" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title(); echo get_post_format(); ?></a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                                <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                            </div>
                        </div>
                    </div>
                </li>
                <?php

                 }
               wp_reset_query();

                ?>

               													</ul>
        </div>
    </div>


</section>
<div class="home-featured-cat mag-cat-style-2">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <?php
            $gw = get_category_by_slug("gw");

        ?>
        <h3 class="inner-arrow"><a href="<?php echo get_category_link($gw);?>"><?php echo $gw->name;?></a></h3>
    </div>
    <div class="home-featured-cat-content style-2">

         <?php

            query_posts("cat=".$gw->term_id.'&order=desc&showposts=1');

            while(have_posts()){

                the_post();






         ?>

        <div class="mag-post-box first-post">
            <div class="magcat-thumb">
                <a href="<?php the_permalink();?>"><img width="585" height="390" src="<?php the_post_thumbnail_url('m')?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>" /></a>
            </div>
            <div class="magcat-detail">
                <div class="mag-header">			<h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div class="grid-post-box-meta mag-meta">
                        <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                        <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                    </div>
                </div>					<div class="mag-excerpt">
                    <p><?php the_excerpt();?></p>
                </div>
            </div>
        </div>

        <?php

            }
         wp_reset_query();

         query_posts("cat=".$gw->term_id.'&order=desc&showposts=3&offset=1');
         while(have_posts()){
             the_post();


        ?>


        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="<?php the_permalink();?>"><img width="585" height="390" src="<?php the_post_thumbnail_url('m')?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                </div>
            </div>
        </div>
        <?php
        }
        wp_reset_query();
        ?>
        <!--<div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="This is an image caption" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/">Apple Watch vs Moto 360: Which one should you buy?</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/android-is-finally-getting-a-standalone-street-view-app/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/phone-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="phone" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/android-is-finally-getting-a-standalone-street-view-app/">Android is Finally Getting a Standalone Street View App</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>-->												</div>


</div>
<div class="home-featured-cat mag-cat-style-2">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <?php

        $gy = get_category_by_slug("gy");

        ?>
        <h3 class="inner-arrow"><a href="<?php echo get_category_link($gy);?>"><?php echo  $gy-> name;?></a></h3>
    </div>
    <div class="home-featured-cat-content style-2">



        <?php

        query_posts("cat=".$gy->term_id.'&order=desc&showposts=1');

        while(have_posts()){

        the_post();






        ?>


        <div class="mag-post-box first-post">
            <div class="magcat-thumb">
                <a href="<?php the_permalink();?>"><img width="585" height="390" src="<?php the_post_thumbnail_url('m')?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"/></a>
            </div>
            <div class="magcat-detail">
                <div class="mag-header">			<h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                    <div class="grid-post-box-meta mag-meta">
                        <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                        <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                    </div>
                </div>					<div class="mag-excerpt">
                    <p><?php the_excerpt();?></p>
                </div>
            </div>
        </div>

        <?php
        }
        wp_reset_query();

        query_posts("cat=".$gy->term_id.'&order=desc&showposts=3&offset=1');
        while(have_posts()){
        the_post();


        ?>

        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="<?php the_permalink();?>"><img width="585" height="390" src="<?php the_permalink();?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"  /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                </div>
            </div>
        </div>
        <?php

         }

        wp_reset_query();

        ?>
      <!--  <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="save-time" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/">10 Efficient Ways to Save Time in Daily Life</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>-->
      											</div>


</div>

<!--最近更新-->
<?php  get_template_part('recentpost') ?>



</div>
</div>


<div id="sidebar" class="penci-sticky-sidebar">
<div class="theiaStickySidebar">
<aside id="penci_social_widget-3" class="widget penci_social_widget"><h4 class="widget-title penci-border-arrow"><span class="inner-arrow">Keep in touch</span></h4>
    <div class="widget-social show-text">
        <a href="https://www.facebook.com/PenciDesign" target="_blank"><i class="fa fa-facebook"></i><span>Facebook</span></a>

        <a href="#" target="_blank"><i class="fa fa-twitter"></i><span>Twitter</span></a>

        <a href="#" target="_blank"><i class="fa fa-google-plus"></i><span>Google +</span></a>

        <a href="#" target="_blank"><i class="fa fa-instagram"></i><span>Instagram</span></a>


        <a href="#" target="_blank"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>








        <a href="#" target="_blank"><i class="fa fa-rss"></i><span>RSS</span></a>
    </div>


</aside><aside id="penci_popular_news_widget-2" class="widget penci_popular_news_widget"><h4 class="widget-title penci-border-arrow"><span class="inner-arrow">Popular Posts</span></h4>			<ul class="side-newsfeed">


        <li class="penci-feed featured-news">
            <div class="side-item">
                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/" rel="bookmark" title="Apple’s Haptic Tech Is a peak at the UI of the Future"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mac-585x390.jpg" class="side-item-thumb wp-post-image" alt="mac" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/" rel="bookmark" title="Apple’s Haptic Tech Is a peak at the UI of the Future">Apple’s Haptic Tech Is a peak at the UI of the Future</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">
                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/" rel="bookmark" title="Furniture Makes This Office Look Like a Toy Box"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x390.jpg" class="side-item-thumb wp-post-image" alt="cab" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1024x681.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1170x778.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x389.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/" rel="bookmark" title="Furniture Makes This Office Look Like a Toy Box">Furniture Makes This Office Look Like a Toy Box</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">
                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/" rel="bookmark" title="Kermit’s New Girlfriend Enrages the Internet"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg" class="side-item-thumb wp-post-image" alt="new-york" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/" rel="bookmark" title="Kermit’s New Girlfriend Enrages the Internet">Kermit’s New Girlfriend Enrages the Internet</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">
                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/" rel="bookmark" title="What It’s Like to Travel to Greece Right Now"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/lagoon-585x390.jpg" class="side-item-thumb wp-post-image" alt="lagoon" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/" rel="bookmark" title="What It’s Like to Travel to Greece Right Now">What It’s Like to Travel to Greece Right Now</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">
                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/" rel="bookmark" title="Canadian Rockies Rafting near Banff National Park"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg" class="side-item-thumb wp-post-image" alt="rafting-883523" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1024x682.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/" rel="bookmark" title="Canadian Rockies Rafting near Banff National Park">Canadian Rockies Rafting near Banff National Park</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


    </ul>

</aside><aside id="text-2" class="widget widget_text">			<div class="textwidget"><img src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/banner-widget.jpg" alt="banner"></div>
</aside><aside id="penci_latest_tweets_widget-2" class="widget penci_latest_tweets_widget"><h4 class="widget-title penci-border-arrow"><span class="inner-arrow">Tweets</span></h4>			<div class="penci-tweets-widget-content">
        <span class="icon-tweets"><i class="fa fa-twitter"></i></span>
        <div class="penci-slider penci-tweets-slider" data-smooth="true" data-direction="horizontal" data-auto="true" data-dir="true" data-control="false" data-autotime="5000" data-speed="500">
            <ul class="slides">
                <li class="penci-tweet">
                    <div class="tweet-text">
                        Soledad - the #Best #Blog &amp; #Magazine Theme version 2.2.4 is available for download at #Themeforest. Purchase now!
                        https://t.co/o5VQloFse2								</div>
                    <p class="tweet-date">18-Jan-2016</p>
                    <div class="tweet-intents">
                        <div class="tweet-intents-inner">
                            <span><a target="_blank" class="reply" href="https://twitter.com/intent/tweet?in_reply_to=689062784991023104">Reply</a></span>
                            <span><a target="_blank" class="retweet" href="https://twitter.com/intent/retweet?tweet_id=689062784991023104">Retweet</a></span>
                            <span><a target="_blank" class="favorite" href="https://twitter.com/intent/favorite?tweet_id=689062784991023104">Favorite</a></span>
                        </div>
                    </div>
                </li>
                <li class="penci-tweet">
                    <div class="tweet-text">
                        Soledad - Best #Blog &amp; #Magazine #WordPress Theme version 2.2.2 is available now on #Themeforest. Purchase it now!
                        https://t.co/nW4LYfAYGf								</div>
                    <p class="tweet-date">06-Jan-2016</p>
                    <div class="tweet-intents">
                        <div class="tweet-intents-inner">
                            <span><a target="_blank" class="reply" href="https://twitter.com/intent/tweet?in_reply_to=684582293881499655">Reply</a></span>
                            <span><a target="_blank" class="retweet" href="https://twitter.com/intent/retweet?tweet_id=684582293881499655">Retweet</a></span>
                            <span><a target="_blank" class="favorite" href="https://twitter.com/intent/favorite?tweet_id=684582293881499655">Favorite</a></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</aside><aside id="penci_latest_news_widget-3" class="widget penci_latest_news_widget"><h4 class="widget-title penci-border-arrow"><span class="inner-arrow">Recent Posts</span></h4>			<ul class="side-newsfeed">


        <li class="penci-feed">
            <div class="side-item">

                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/" rel="bookmark" title="Apple’s Haptic Tech Is a peak at the UI of the Future"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mac-585x390.jpg" class="side-item-thumb wp-post-image" alt="mac" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/" rel="bookmark" title="Apple’s Haptic Tech Is a peak at the UI of the Future">Apple’s Haptic Tech Is a peak at the UI of the Future</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">

                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/" rel="bookmark" title="Furniture Makes This Office Look Like a Toy Box"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x390.jpg" class="side-item-thumb wp-post-image" alt="cab" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1024x681.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1170x778.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x389.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/" rel="bookmark" title="Furniture Makes This Office Look Like a Toy Box">Furniture Makes This Office Look Like a Toy Box</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">

                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/" rel="bookmark" title="Kermit’s New Girlfriend Enrages the Internet"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg" class="side-item-thumb wp-post-image" alt="new-york" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/" rel="bookmark" title="Kermit’s New Girlfriend Enrages the Internet">Kermit’s New Girlfriend Enrages the Internet</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">

                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/" rel="bookmark" title="What It’s Like to Travel to Greece Right Now"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/lagoon-585x390.jpg" class="side-item-thumb wp-post-image" alt="lagoon" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/" rel="bookmark" title="What It’s Like to Travel to Greece Right Now">What It’s Like to Travel to Greece Right Now</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


        <li class="penci-feed">
            <div class="side-item">

                <div class="side-image">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/" rel="bookmark" title="Canadian Rockies Rafting near Banff National Park"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg" class="side-item-thumb wp-post-image" alt="rafting-883523" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1024x682.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
                </div>
                <div class="side-item-text">
                    <h4><a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/" rel="bookmark" title="Canadian Rockies Rafting near Banff National Park">Canadian Rockies Rafting near Banff National Park</a></h4>
                    <span class="side-item-meta">September 7, 2015</span>
                </div>
            </div>
        </li>


    </ul>

</aside>
<aside id="categories-2" class="widget widget_categories"><h4 class="widget-title penci-border-arrow"><span class="inner-arrow">主题分类</span></h4>
    <ul>
        <?php
        $cat = get_category_by_slug('wpfree');
        wp_list_categories(array(
            'title_li'=>0,
            'hide_empty' => 0,
            'child_of' => $cat ->term_id,
        ));?>
        <?php get_terms('wpfree');?>
    </ul>

</aside>	</div>
</div>
<!-- END CONTAINER -->
</div>
<div class="clear-footer"></div>

<div id="penci-end-sidebar-sticky"></div>
<?php get_footer();?>