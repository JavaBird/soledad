<?php
/**
 * 焦点图
 */
?>
<div class="featured-area style-1">
    <div class="featured-carousel style-1" data-auto="true" data-autotime="6000" data-speed="800">

        <?php  $cat = get_category_by_slug("focus");

           query_posts("cat=".$cat->term_id."&order=desc");

          while(have_posts()){

                the_post();

        ?>


        <figure class="item">
            <div class="featured-overlay featured-overlay-color"></div>
            <div class="featured-overlay featured-overlay-partent"></div>
            <img width="1170" height="663" src="<?php the_post_thumbnail_url('l');?>" class="attachment-penci-slider-thumb size-penci-slider-thumb wp-post-image" alt="<?php  the_title();?>" />									<div class="featured-content">
                <div class="feat-text">
                    <div class="featured-slider-overlay"></div>
                    <span class="feat-time"><?php the_time('Y-m-d');?></span>
                    <div class="featured-cat">
                        <?php the_category(' ');?>
                        <!--<a class="penci-cat-name" href="" title="View all posts in Editor&#039;s Pick" >Editor's Pick</a><a class="penci-cat-name" href="" title="View all posts in Entertainment" >Entertainment</a>-->
                    </div>
                    <h3><a href="<?php the_permalink();?>"><?php  the_title();?></a></h3>
                    <div class="carousel-meta">
                        <span class="feat-author"><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author(); ?></a></span>
                        <span class="feat-comments"><a href="<?php comments_link();?>"><?php echo  get_comments_number(); ?> 评论</a></span>
                    </div>
                </div>
            </div>
        </figure>

        <?php

          }
         wp_reset_query();
        ?>

    </div>
</div>