
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
                                    src="<?php the_post_thumbnail_url();?>"
                                    class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"/></a>
                        </div>
                        <div class="magcat-detail">
                            <div class="mag-header"><h3 class="magcat-titlte"><a
                                        href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>

                                <div class="grid-post-box-meta mag-meta">
                                <span class="author-italic">by <a
                                        href="<?php the_author_link();?>"><?php the_author();?></a></span>
                                    <span><i class="fa fa-calendar fa-fw"></i> <?php the_time('Y年m月d日');?></span>
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
                        <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y/m/d");?></span>
                        <span><i class="fa fa-comments"></i><?php get_comments_number();?> 评论</span>
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
        <h3 class="inner-arrow"><a href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/sport/">Sport</a></h3>
    </div>
    <div class="home-featured-cat-content style-5">
        <div class="penci-carousel penci-magcat-carousel" data-auto="true" data-dots="false" data-arrows="true">

            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/" class="mag-post-thumb">
                        <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="rafting-883523" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1024x682.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />					</a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/">Canadian Rockies Rafting near Banff National Park</a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span>by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                            <span>September 7, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/" class="mag-post-thumb">
                        <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="mountains" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />					</a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/">5 Places to visit in your Lifetime</a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span>by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                            <span>September 7, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/baseball-ja-happ-marcus-stroman-jayson-werth-matt-harvey/" class="mag-post-thumb">
                        <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/baseball-player-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="baseball-player" />					</a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/baseball-ja-happ-marcus-stroman-jayson-werth-matt-harvey/">Matt Harvey owners can look to J.A. Happ, Marcus Stroman</a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span>by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                            <span>September 7, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/mcns-adam-child-to-line-up-on-norton-machinery-at-gold-cup/" class="mag-post-thumb">
                        <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/biker-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="biker" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/biker-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/biker-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/biker.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/biker-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />					</a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/mcns-adam-child-to-line-up-on-norton-machinery-at-gold-cup/">MCN’s Adam Child to line up on Norton machinery at Gold Cup</a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span>by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                            <span>September 7, 2015</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="magcat-carousel">
                <div class="magcat-thumb">
                    <a href="http://pencidesign.com/soledad/soledad-magazine/surfboards-mega-swell-light-latest-nz-surfing-magazine/" class="mag-post-thumb">
                        <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/water-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="water" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/water-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/water-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/water.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/water-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />					</a>
                    <div class="magcat-detail">
                        <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/surfboards-mega-swell-light-latest-nz-surfing-magazine/">Surfboards &amp; Mega Swell light up latest NZ Surfing Magazine</a></h3>
                        <div class="grid-post-box-meta mag-meta">
                            <span>by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                            <span>September 7, 2015</span>
                        </div>
                    </div>
                </div>
            </div>									</div>
    </div>


</section>
<section class="home-featured-cat mag-cat-style-4">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <h3 class="inner-arrow"><a href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/">Editor's Pick</a></h3>
    </div>
    <div class="home-featured-cat-content style-4">
        <div class="penci-slider penci-single-mag-slider" data-smooth="true" data-control="false" data-dir="true" data-auto="true" data-autotime="5000" data-speed="600">
            <ul class="slides">

                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="save-time" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/">10 Efficient Ways to Save Time in Daily Life</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="This is an image caption" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/">Apple Watch vs Moto 360: Which one should you buy?</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/car2-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="car2" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/">Box Office: &#8216;Transporter Refueled&#8217; Crashes Theater</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/time-cruise-mediterranean/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/time-cruise-mediterranean/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cruise-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="cruise" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/time-cruise-mediterranean/">The Best Time to Cruise the Mediterranean</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/iphone-6s-launch-and-expectations/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/iphone-6s-launch-and-expectations/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/iphone-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="iphone" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/iphone-6s-launch-and-expectations/">iPhone 6S Launch: What To Expect?</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="mag-single-slider">
                    <div class="magcat-thumb">
                        <a href="http://pencidesign.com/soledad/soledad-magazine/the-street-child-who-became-a-top-photographer/" class="mag-single-slider-overlay"></a>
                        <a href="http://pencidesign.com/soledad/soledad-magazine/the-street-child-who-became-a-top-photographer/"><img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/photographer-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="photographer" /></a>
                        <div class="magcat-detail">
                            <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/the-street-child-who-became-a-top-photographer/">The street child who became a top photographer</a></h3>
                            <div class="grid-post-box-meta mag-meta">
                                <span><a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                                <span>September 7, 2015</span>
                            </div>
                        </div>
                    </div>
                </li>														</ul>
        </div>
    </div>


</section>
<div class="home-featured-cat mag-cat-style-2">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <h3 class="inner-arrow"><a href="http://pencidesign.com/soledad/soledad-magazine/category/technology/">Technology</a></h3>
    </div>
    <div class="home-featured-cat-content style-2">

        <div class="mag-post-box first-post">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mac-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="mac" /></a>
            </div>
            <div class="magcat-detail">
                <div class="mag-header">			<h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/">Apple’s Haptic Tech Is a peak at the UI of the Future</a></h3>
                    <div class="grid-post-box-meta mag-meta">
                        <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span>September 7, 2015</span>
                    </div>
                </div>					<div class="mag-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="cab" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1024x681.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-1170x778.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x389.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/">Furniture Makes This Office Look Like a Toy Box</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
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
        </div>												</div>


</div>
<div class="home-featured-cat mag-cat-style-2">
    <div class="penci-border-arrow penci-homepage-title penci-magazine-title">
        <h3 class="inner-arrow"><a href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/">Entertainment</a></h3>
    </div>
    <div class="home-featured-cat-content style-2">

        <div class="mag-post-box first-post">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="new-york" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <div class="mag-header">			<h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/">Kermit’s New Girlfriend Enrages the Internet</a></h3>
                    <div class="grid-post-box-meta mag-meta">
                        <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span>September 7, 2015</span>
                    </div>
                </div>					<div class="mag-excerpt">
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="rafting-883523" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1024x682.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/">Canadian Rockies Rafting near Banff National Park</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="save-time" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/">10 Efficient Ways to Save Time in Daily Life</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>
        <div class="mag-post-box">
            <div class="magcat-thumb">
                <a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/"><img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="mountains" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" /></a>
            </div>
            <div class="magcat-detail">
                <h3 class="magcat-titlte"><a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/">5 Places to visit in your Lifetime</a></h3>
                <div class="grid-post-box-meta mag-meta">
                    <span>September 7, 2015</span>
                </div>
            </div>
        </div>												</div>


</div>


<div class="penci-border-arrow penci-homepage-title">
    <h3 class="inner-arrow">Latest Posts</h3>
</div>

<ul class="penci-grid">
<li class="list-post magazine-layout magazine-1">
    <article id="post-256" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mac-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="mac" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-haptic-tech-is-a-peak-at-the-ui-of-the-future/">Apple’s Haptic Tech Is a peak at the UI of the Future</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-254" class="item">

        <div class="thumbnail">
            <div class="penci-slick-slider" data-auto-height="true">

                <figure>
                    <img src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cab-585x390.jpg" alt="Furniture Makes This Office Look Like a Toy Box"  />
                </figure>


                <figure>
                    <img src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-2-585x390.jpg" alt="Furniture Makes This Office Look Like a Toy Box"  />
                </figure>

            </div>
        </div>


        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/life-style/" title="View all posts in Life Style" >Life Style</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/furniture-makes-this-office-look-like-a-toy-box/">Furniture Makes This Office Look Like a Toy Box</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-252" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="new-york" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/new-york-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/movies/" title="View all posts in Movies" >Movies</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/music/" title="View all posts in Music" >Music</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/kermits-new-girlfriend-enrages-the-internet/">Kermit’s New Girlfriend Enrages the Internet</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-250" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/lagoon-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="lagoon" />				</a>
            <a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/" class="icon-post-format"><i class="fa fa-play"></i></a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/travel/" title="View all posts in Travel" >Travel</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/what-its-like-to-travel-to-greece-right-now/">What It’s Like to Travel to Greece Right Now</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-248" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="rafting-883523" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1024x682.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/rafting-883523-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/sport/" title="View all posts in Sport" >Sport</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/canadian-rockies-rafting-near-banff-national-park/">Canadian Rockies Rafting near Banff National Park</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-246" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="save-time" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/" title="View all posts in Entertainment" >Entertainment</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/">10 Efficient Ways to Save Time in Daily Life</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-244" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="This is an image caption" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1170x780.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/">Apple Watch vs Moto 360: Which one should you buy?</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-242" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="mountains" srcset="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-300x200.jpg 300w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-1024x683.jpg 1024w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains.jpg 1170w, http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/mountains-585x390.jpg 585w" sizes="(max-width: 585px) 100vw, 585px" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/sport/" title="View all posts in Sport" >Sport</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/travel/" title="View all posts in Travel" >Travel</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/5-places-to-visit-in-your-lifetime/">5 Places to visit in your Lifetime</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-240" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/car2-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="car2" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/movies/" title="View all posts in Movies" >Movies</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/">Box Office: &#8216;Transporter Refueled&#8217; Crashes Theater</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li><li class="list-post magazine-layout magazine-1">
    <article id="post-238" class="item">

        <div class="thumbnail">
            <a href="http://pencidesign.com/soledad/soledad-magazine/android-is-finally-getting-a-standalone-street-view-app/">
                <img width="585" height="390" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/phone-585x390.jpg" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="phone" />				</a>
        </div>

        <div class="content-list-right">
            <div class="header-list-style">
                <span class="cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></span>

                <h2 class="grid-title"><a href="http://pencidesign.com/soledad/soledad-magazine/android-is-finally-getting-a-standalone-street-view-app/">Android is Finally Getting a Standalone Street View App</a></h2>

                <div class="grid-post-box-meta">
                    <span class="author-italic">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                    <span>September 7, 2015</span>
                </div>
            </div>

            <div class="item-content">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cumt sociis natoque penatibus et magnis dis&hellip;</p>
            </div>
        </div>

    </article>
</li>
</ul>
<div class="penci-pagination align-left"><ul class='page-numbers'>
        <li><span class='page-numbers current'>1</span></li>
        <li><a class='page-numbers' href='http://pencidesign.com/soledad/soledad-magazine/page/2/?slider=style-1'>2</a></li>
        <li><a class='page-numbers' href='http://pencidesign.com/soledad/soledad-magazine/page/3/?slider=style-1'>3</a></li>
        <li><a class="next page-numbers" href="http://pencidesign.com/soledad/soledad-magazine/page/2/?slider=style-1"><i class="fa fa-angle-right"></i></a></li>
    </ul>
</div>

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