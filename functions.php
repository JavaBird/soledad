<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/22
 * Time: 16:24
 */

function colorlib_excerpt_length(){

    return 75;
}
function colorlib_excerpt_more(){

    return '&hellip;&hellip;';
}
/*格式化摘要*/
function my_wp_trim_excerpt( $text = '' ) {
    $raw_excerpt = $text;
    if ( '' == $text ) {
        $text = get_the_content('');

        $text = strip_shortcodes( $text );

        /** This filter is documented in wp-includes/post-template.php */
        $text = apply_filters( 'the_content', $text );
        $text = str_replace(']]>', ']]&gt;', $text);

        /**
         * Filter the number of words in an excerpt.
         *
         * @since 2.7.0
         *
         * @param int $number The number of words. Default 55.
         */
        $excerpt_length = apply_filters( 'excerpt_length', 55 );
        /**
         * Filter the string in the "more" link displayed after a trimmed excerpt.
         *
         * @since 2.9.0
         *
         * @param string $more_string The string shown within the more link.
         */
        $excerpt_more = apply_filters( 'excerpt_more', ' ' . '[&hellip;]' );
        $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
    }
    /**
     * Filter the trimmed excerpt string.
     *
     * @since 2.8.0
     *
     * @param string $text        The trimmed text.
     * @param string $raw_excerpt The text prior to trimming.
     */
    return apply_filters( 'wp_trim_excerpt', $text, $raw_excerpt );
}

add_filter("excerpt_length","colorlib_excerpt_length");


add_filter("excerpt_more","colorlib_excerpt_more");


add_filter( 'get_the_excerpt', 'my_wp_trim_excerpt'  );

if(! function_exists("colorlib_setup")):

    function colorlib_setup(){


        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
         */
        add_theme_support( 'post-thumbnails' );

        add_image_size("m",585,390,true);

        add_image_size('l',1170,663,true);


        /*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );


        /*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
            'gallery',
            'status',
            'audio',
            'chat',
        ) );


        add_theme_support('custom-header-uploads');


        add_theme_support('custom-header');

    }


endif;

add_action( 'after_setup_theme', 'colorlib_setup' );


/**
 * Enqueues scripts and styles.
 *
 * @since Twenty Sixteen 1.0
 */
function colorlib_head_scripts(){


    wp_enqueue_style('colorlib_style',get_template_directory_uri().'/style.css',array(),'1.0');
    wp_enqueue_style('colorlib_base',get_template_directory_uri().'/css/base.css',array(),'1.0');
    wp_enqueue_style('colorlib_page',get_template_directory_uri().'/css/pagenavi-css.css',array(),'1.0');


   /* wp_enqueue_script( 'colorlib-html5', get_template_directory_uri() . '/js/html5shiv.min.js', array(), '3.7.2' );
    wp_script_add_data( 'colorlib-html5', 'conditional', 'lt IE 9' );
    wp_enqueue_script( 'colorlib-respond', get_template_directory_uri() . '/js/respond.min.js', array(), '1.4.2' );
    wp_script_add_data( 'colorlib-respond', 'conditional', 'lt IE 9' );  */

}
add_action('wp_enqueue_scripts','colorlib_head_scripts',0);

function colorlib_foot_scripts(){


    wp_enqueue_script( 'colorlib-lib', get_template_directory_uri() . '/js/libs-script.min.js', array(), '1.0' );
    wp_enqueue_script( 'colorlib-smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', array(), '2.0.0' );
    wp_enqueue_script( 'colorlib-main', get_template_directory_uri() . '/js/main.js');


}

add_action('wp_footer','colorlib_foot_scripts',1);