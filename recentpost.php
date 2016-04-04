<div class="penci-border-arrow penci-homepage-title">
    <h3 class="inner-arrow">最近更新</h3>
</div>

<ul class="penci-grid">
<?php

if(have_posts()){


  while(have_posts()) {

      the_post();



       if(has_post_format('standard')) {
       }elseif(has_post_format('gallery')){


 ?>
           <li class="list-post magazine-layout magazine-1">
               <article id="post-254" class="item">

                   <div class="thumbnail">
                       <div class="penci-slick-slider" data-auto-height="true">

                           <figure>
                               <img src="" alt="Furniture Makes This Office Look Like a Toy Box"  />
                           </figure>


                           <figure>
                               <img src="" alt="Furniture Makes This Office Look Like a Toy Box"  />
                           </figure>

                       </div>
                   </div>


                   <div class="content-list-right">
                       <div class="header-list-style">
                           <span class="cat"><?php the_category(" ");?></span>

                           <h2 class="grid-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                           <div class="grid-post-box-meta">
                               <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                               <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                           </div>
                       </div>

                       <div class="item-content">
                           <p><?php the_excerpt();?></p>
                       </div>
                   </div>

               </article>
           </li>




<?php

       }elseif(has_post_format('video')){

?>
           <li class="list-post magazine-layout magazine-1">
               <article id="post-<?php echo $post -> ID;?>" class="item">

                   <div class="thumbnail">
                       <a href="<?php the_permalink();?>">
                           <img width="585" height="390" src="<?php the_post_thumbnail_url('m');?>" class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>" />				</a>
                       <a href="<?php the_permalink();?>" class="icon-post-format"><i class="fa fa-play"></i></a>
                   </div>

                   <div class="content-list-right">
                       <div class="header-list-style">
                           <span class="cat"><?php the_category(" ");?></span>

                           <h2 class="grid-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                           <div class="grid-post-box-meta">
                               <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                               <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                           </div>
                       </div>

                       <div class="item-content">
                           <p><?php the_excerpt();?></p>
                       </div>
                   </div>

               </article>
           </li>


     <?php

       }else{
      ?>


      <li class="list-post magazine-layout magazine-1">
          <article id="post-<?php echo $post -> ID;?>" class="item">

              <div class="thumbnail">
                  <a href="<?php the_permalink();?>">
                      <img width="585" height="390"
                           src="<?php the_post_thumbnail_url('m')?>"
                           class="attachment-penci-thumb size-penci-thumb wp-post-image" alt="<?php the_title();?>"/> </a>
              </div>

              <div class="content-list-right">
                  <div class="header-list-style">
                      <span class="cat"><?php the_category(" ");?></span>

                      <h2 class="grid-title"><a
                              href="<?php the_permalink();?>"><?php the_title();?></a></h2>

                      <div class="grid-post-box-meta">
                          <span class="author-italic"><i class="fa fa-pencil fa-fw"></i> <a
                                  href="<?php the_author_link();?>"><?php the_author();?></a></span>
                          <span><i class="fa fa-calendar fa-fw"></i> <?php the_time("Y-m-d");?></span>
                      </div>
                  </div>

                  <div class="item-content">
                      <p><?php the_excerpt();?></p>
                  </div>
              </div>

          </article>
      </li>

  <?php

       }

       }

  }



?>

</ul>
<?php wp_pagenavi(); ?>
