<div class="penci-border-arrow penci-homepage-title">
    <h3 class="inner-arrow">最近更新</h3>
</div>

<ul class="penci-grid">
<?php

if(have_posts()){


  while(have_posts()) {

      the_post();



       if(has_post_format('standard')) {
       }else{
      ?>


      <li class="list-post magazine-layout magazine-1">
          <article id="post-256" class="item">

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
                          <span class="author-italic">by <a
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
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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
</li>
<li class="list-post magazine-layout magazine-1">
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