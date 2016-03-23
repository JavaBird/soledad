<?php
/**
 * 焦点图
 */
?>
<div class="featured-area style-1">
    <div class="featured-carousel style-1" data-auto="true" data-autotime="6000" data-speed="800">

        <?php  $cat = get_category_by_slug("focus");
           $lists  =   get_posts( array(
                    'numberposts' => 6,
                    'category' => ($cat -> term_id),
                    'orderby' => 'date',
                    'order' => 'DESC', 'include' => array(),
                    'exclude' => array(), 'meta_key' => '',
                    'meta_value' =>'', 'post_type' => 'post',
                    'suppress_filters' => true
                ));

          foreach($lists as $list){


        ?>


        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/save-time-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="save-time" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time"><?php echo $list ->post_date;?></span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/" title="View all posts in Entertainment" >Entertainment</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/"><?php echo $list ->post_title;?></a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">作者：<a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/"><?php echo get_userdata($list->post_author) -> display_name; ?></a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/10-efficient-ways-to-save-time-in-daily-life/#comments "><?php echo  $list->comment_count; ?> 评论</a></span>
                    </div>
                </div>
            </div>
        </figure>

        <?php } ?>
      <!--  <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/smart-watch-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="This is an image caption" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time">Sep 7, 2015</span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/">Apple Watch vs Moto 360: Which one should you buy?</a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine1/">Isaac Taylor</a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/apple-watch-vs-moto-360-which-one-should-you-buy-video/#comments ">3 comments</a></span>
                    </div>
                </div>
            </div>
        </figure>
        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/car2-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="car2" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time">Sep 7, 2015</span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/movies/" title="View all posts in Movies" >Movies</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/">Box Office: &#8216;Transporter Refueled&#8217; Crashes Theater</a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/box-office-transporter-refueled-crashes-theater/#comments ">3 comments</a></span>
                    </div>
                </div>
            </div>
        </figure>
        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/cruise-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="cruise" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time">Sep 7, 2015</span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/travel/" title="View all posts in Travel" >Travel</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/time-cruise-mediterranean/">The Best Time to Cruise the Mediterranean</a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/time-cruise-mediterranean/#comments ">3 comments</a></span>
                    </div>
                </div>
            </div>
        </figure>
        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/iphone-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="iphone" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time">Sep 7, 2015</span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/technology/" title="View all posts in Technology" >Technology</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/iphone-6s-launch-and-expectations/">iPhone 6S Launch: What To Expect?</a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/iphone-6s-launch-and-expectations/#comments ">3 comments</a></span>
                    </div>
                </div>
            </div>
        </figure>
        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="http://pencidesign.com/soledad/soledad-magazine/wp-content/uploads/sites/7/2015/09/photographer-1170x663.jpg" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="photographer" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time">Sep 7, 2015</span>
                    <div class="featured-cat"><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/editors-pick/" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="http://pencidesign.com/soledad/soledad-magazine/category/entertainment/" title="View all posts in Entertainment" >Entertainment</a></div>
                    <h3><a href="http://pencidesign.com/soledad/soledad-magazine/the-street-child-who-became-a-top-photographer/">The street child who became a top photographer</a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author">by <a href="http://pencidesign.com/soledad/soledad-magazine/author/magazine/">Richard Roe</a></span>
                        <span class="feat-comments"><a href="http://pencidesign.com/soledad/soledad-magazine/the-street-child-who-became-a-top-photographer/#comments ">3 comments</a></span>
                    </div>
                </div>
            </div>
        </figure>-->
    </div>
</div>