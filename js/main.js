!function(e){"use strict";var a=a||{};a.general=function(){e("#top-search a.search-click").on("click",function(){e(".show-search").fadeToggle(),e(".show-search input.search-input").focus()}),e(".go-to-top").on("click",function(){return e("html, body").animate({scrollTop:0},700),!1}),e().doubleTouchToGo&&e("#navigation .menu li.menu-item-has-children, #navigation .menu li.penci-mega-menu").doubleTouchToGo()},a.main_sticky=function(){if(e().sticky){var a=0;e("body").hasClass("admin-bar")&&(a=32),e("nav#navigation").each(function(){e(this).sticky({topSpacing:a})})}},a.count_down=function(){if(e(".penci-countdown").length>0){var a=e(".penci-countdown"),i=a.data("time");e(".penci-countdown").countdown(i).on("update.countdown",function(a){e(this).html(a.strftime('<div class="countdown-row"><span class="countdown-section"><span class="countdown-amount">%-m</span><span class="countdown-period">Months</span></span><span class="countdown-section"><span class="countdown-amount">%-d</span><span class="countdown-period">Days</span></span><span class="countdown-section"><span class="countdown-amount">%H</span><span class="countdown-period">Hours</span></span><span class="countdown-section"><span class="countdown-amount">%M</span><span class="countdown-period">Minutes</span></span><span class="countdown-section"><span class="countdown-amount">%S</span><span class="countdown-period">Seconds</span></span></div>'))})}},a.carousel_homepage=function(){e().slick&&e(".featured-carousel").each(function(){var i=e(this),t=i.data("auto"),n=i.data("autotime"),o=i.data("speed");i.hasClass("style-2")?i.slick({dots:!1,infinite:!0,speed:o,slidesToShow:1,slidesToScroll:1,autoplay:t,autoplaySpeed:n,centerMode:!0,variableWidth:!0,nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'}):i.hasClass("style-7")?i.slick({dots:!1,infinite:!1,speed:o,slidesToShow:2,slidesToScroll:1,autoplay:t,autoplaySpeed:n,centerMode:!1,variableWidth:!1,nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',responsive:[{breakpoint:960,settings:{slidesToShow:1,slidesToScroll:1}}]}):i.slick({dots:!1,infinite:!0,speed:o,slidesToShow:1,slidesToScroll:1,autoplay:t,autoplaySpeed:n,centerMode:!1,variableWidth:!1,adaptiveHeight:!0,nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'}),i.on("setPosition",function(t,n,o){i.parent().addClass("loaded"),a.carousel_fixtop(),a.arrows_carousel(),e(window).load(function(){i.parent().addClass("loaded-wait")})})})},a.arrows_carousel=function(){e(".featured-area.style-2 button.slick-prev").each(function(){var a=e(this),i=a.parent().find(".slick-center").width(),t=a.closest(".featured-area").width(),n=(t-i)/2-22;a.css("left",n+"px"),a.next().css("right",n+"px")})},a.carousel_fixtop=function(){e(".featured-carousel .featured-content").each(function(){var a=e(this),i=a.height(),t=a.parent().height(),n=(t-i)/2;a.css("top",n+"px")})},a.flexslider=function(){e(window).load(function(){e(".penci-slider, .penci-magazine-slider").each(function(){var i=e(this),t=!1,n=!1,o=!0;i.attr("data-smooth")&&(t=!0),i.attr("data-control")&&(n=!0),i.attr("data-dir")&&(o=!1),i.flexslider({namespace:"penci-",animation:"slide",slideshow:i.data("auto"),slideshowSpeed:i.data("autotime"),animationSpeed:i.data("speed"),smoothHeight:t,controlNav:n,directionNav:o,pauseOnHover:!0,prevText:'<i class="fa fa-angle-left"></i>',nextText:'<i class="fa fa-angle-right"></i>',start:function(e){i.parent().addClass("loaded"),a.fixtop(),i.parent().addClass("loaded-wait")}})})})},a.headline=function(){e().slick&&e(".penci-headline-posts").each(function(){var i=e(this);i.slick({dots:!1,infinite:!0,speed:i.data("speed"),slidesToShow:1,slidesToScroll:1,vertical:!0,autoplay:i.data("auto"),autoplaySpeed:i.data("autotime"),nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>'}),i.on("setPosition",function(t,n,o){e(window).load(function(){a.fixheadline(),i.parent().addClass("loaded")})})})},a.fixheadline=function(){var a=e(".penci-headline .headline-title");if(a.length){var i=a.outerWidth()+70;e(".penci-headline-posts").css("margin-left",i+"px")}},a.fixtop=function(){e(".penci-slider .pencislider-container").each(function(){var a=e(this),i=a.closest(".penci-slider"),t=a.height(),n=a.parent().height();i.hasClass("fixed-height")&&(n=i.height());var o=(n-t)/2;a.css("top",o+"px")})},a.fitvids=function(){e(".container").fitVids()},a.slider=function(){e().slick&&e(".penci-slick-slider").each(function(){var a=e(this),i=a.data("auto-height");"undefined"==typeof i&&(i=!0),a.slick({dots:!1,infinite:!0,speed:500,slidesToShow:1,nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',adaptiveHeight:i}),a.on("setPosition",function(e,i,t){a.addClass("loaded")})})},a.carousel=function(){e().slick&&e(".penci-carousel").each(function(){var a=e(this),i=4,t=a.data("auto"),n=a.data("dots"),o=a.data("arrows"),s=!1,l=2;e(".container-single").hasClass("penci_sidebar")&&(i=3),a.hasClass("penci-magcat-carousel")&&(i=2,s=!0,l=1),a.slick({infinite:s,slidesToShow:i,slidesToScroll:i,dots:n,autoplay:t,autoplaySpeed:5e3,speed:700,arrows:o,nextArrow:'<button type="button" class="slick-next slick-nav"><i class="fa fa-angle-right"></i></button>',prevArrow:'<button type="button" class="slick-prev slick-nav"><i class="fa fa-angle-left"></i></button>',responsive:[{breakpoint:1169,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:960,settings:{slidesToShow:2,slidesToScroll:2}},{breakpoint:768,settings:{slidesToShow:l,slidesToScroll:l}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}]}),a.on("setPosition",function(e,i,t){a.addClass("loaded")})})},a.sticky_sidebar=function(){if(e().theiaStickySidebar){var a=90;e("body").hasClass("admin-bar")&&(a=122),e("#main.penci-main-sticky-sidebar, #sidebar.penci-sticky-sidebar").theiaStickySidebar({additionalMarginTop:a})}},a.mega_menu=function(){e("#navigation .penci-mega-child-categories a").mouseenter(function(){if(!e(this).hasClass("cat-active")){var a=e(this),i=a.data("id"),t=a.parent().children("a"),n=a.closest(".penci-megamenu"),o=a.closest(".penci-megamenu").find(".penci-mega-latest-posts").children(".penci-mega-row");t.removeClass("cat-active"),a.addClass("cat-active"),o.hide(),n.find("."+i).fadeIn("normal").css("display","inline-block")}})},a.mobile_menu=function(){e("#sidebar-nav .menu li.menu-item-has-children > a").append('<u class="indicator"><i class="fa fa-angle-down"></i></u>'),e("#navigation .button-menu-mobile").on("click",function(){e("body").addClass("open-sidebar-nav")}),e("#sidebar-nav .menu li a .indicator").on("click",function(a){var i=e(this);a.preventDefault(),i.children().toggleClass("fa-angle-up"),i.parent().next().slideToggle("fast")}),e("#close-sidebar-nav").on("click",function(){e("body").removeClass("open-sidebar-nav")})},a.pinterest_widget=function(){e().isotope&&e(".penci-pinterest-widget-container .penci-images-pin-widget").each(function(){var a=e(this);e(window).load(function(){a.isotope({itemSelector:"a",transitionDuration:".55s",layoutMode:"masonry"}),a.parent().removeClass("penci-loading")})})},a.lightbox=function(){e().magnificPopup&&e('a[data-rel^="penci-gallery-image-content"], .penci-enable-lightbox .gallery-item a').magnificPopup({type:"image",closeOnContentClick:!0,closeBtnInside:!1,fixedContentPos:!0,image:{verticalFit:!0},gallery:{enabled:!0},zoom:{enabled:!0,duration:300}})},a.masonry=function(){e(window).load(function(){var a=e(".penci-masonry");a.length&&a.each(function(){var a=e(this);a.isotope({itemSelector:".item-masonry",transitionDuration:".55s",layoutMode:"masonry"})})})},a.video_background=function(){var a=e("#penci-featured-video-bg");e().mb_YTPlayer&&a.length&&e(window).load(function(){e("#penci-featured-video-bg").mb_YTPlayer(),setTimeout(function(){e(".featured-area").addClass("loaded-wait").append('<div class="overlay-video-click"></div>'),e(".overlay-video-click").on("click",function(){var a=e(this);a.hasClass("pause-video")?(a.removeClass("pause-video"),jQuery("#penci-featured-video-bg").playYTP()):(a.addClass("pause-video"),jQuery("#penci-featured-video-bg").pauseYTP())})},4e3)})},a.portfolio=function(){var a=e(".penci-portfolio");e().isotope&&a.length&&e(".penci-portfolio").each(function(){var a=e(this);e(window).load(function(){a.isotope({itemSelector:".portfolio-item",animationEngine:"best-available",animationOptions:{duration:250,queue:!1}}),a.addClass("loaded"),e(".portfolio-item .inner-item-portfolio").each(function(){var a=e(this);a.one("inview",function(e,i,t,n){a.addClass("animated")})})}),a.parent().find(".penci-portfolio-filter").find("li").on("click",function(){a.parent().find(".penci-portfolio-filter").find("li").removeClass("active"),e(this).addClass("active");var i=e(this).find("a").attr("data-filter");return a.isotope({filter:i}),!1})})},a.gallery=function(){var a=e(".penci-post-gallery-container");e().justifiedGallery&&a.length&&e(".penci-post-gallery-container").each(function(){var a=e(this);a.justifiedGallery({rowHeight:a.data("height"),lastRow:"nojustify",margins:a.data("margin")})})},a.magazine_slider2=function(){function a(){e(window).width()<=778&&e(".penci-mag2-carousel .mag2-thumbnail img").each(function(a,i){var t=e(this);if(t.outerWidth()>e(window).width()){var n=(e(this).outerWidth()-e(window).width())/2,o=e(window).width(),s=o-20;t.attr("style","transform:translate3d(-"+n+"px,0,0); -webkit-transform:translate3d(-"+n+"px,0,0)"),t.parent().parent().find(".mag2-header").attr("style","width: "+s+"px;")}})}var i=e(".penci-mag2-carousel"),t=e(".penci-mag2-carousel .penci-mag2-carousel-content");if(e().carouFredSel&&i.length){var n=t.data("auto"),o=t.data("autotime"),s=t.data("speed");n!==!1&&(n=o),t.carouFredSel({width:"100%",scroll:{items:1,duration:s,pauseOnHover:!0},align:"left",auto:n,padding:1,swipe:!0,prev:".penci-magazine2-prev",next:".penci-magazine2-next",onCreate:function(){i.parent().addClass("loaded-wait")}})}a(),e(window).resize(function(){a()})},e(document).ready(function(){a.general(),a.main_sticky(),a.count_down(),a.carousel_homepage(),a.flexslider(),a.headline(),a.fitvids(),a.slider(),a.carousel(),a.sticky_sidebar(),a.mega_menu(),a.mobile_menu(),a.pinterest_widget(),a.lightbox(),a.masonry(),a.video_background(),a.portfolio(),a.gallery(),a.magazine_slider2(),e(window).resize(function(){a.sticky_sidebar(),a.fixtop(),a.carousel_fixtop()})})}(jQuery);