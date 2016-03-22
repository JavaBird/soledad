<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/3/22
 * Time: 16:24
 */


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