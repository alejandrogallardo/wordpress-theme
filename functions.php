<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/template-parts/navbar.php';

    function blog_theme_scripts() {
        wp_enqueue_style( 'style', get_stylesheet_uri() );
    
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    
        wp_enqueue_script( 'popper', get_template_directory_uri() . '/js/popper.min.js', array ( 'jquery' ), true);
    
        wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array ( 'popper' ), true);

        wp_enqueue_script( 'app-js', get_template_directory_uri() . '/js/app.js', array ( 'bootstrap-js' ), '1.0.0', true);
    
        if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
            wp_enqueue_script( 'comment-reply' );
        }
    }
    add_action( 'wp_enqueue_scripts', 'blog_theme_scripts' );

     function blog_theme(){
        // Soporte para imagenes
        if ( function_exists( 'add_theme_support' ) ) {
            add_theme_support( 'post-thumbnails' );
        }
        add_theme_support('title-tag');
     }
     add_action('after_setup_theme', 'blog_theme');

     // Widgets
     function blog_widgets(){
        register_sidebar( array(
            'id'          => 'blog_sidebar',
            'name'          => __( 'Blog Sidebar' ),
            'description'   => __( 'A short description of the sidebar.' ),
            'before_widget' => '<div class="card mt-3 alex" style="padding: 20px;">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="text-muted">',
            'after_title'   => '</h4><hr>',
        ) );
     }
     add_action('widgets_init', 'blog_widgets');

     // Registro de Menu
     function blog_register_my_menus() {
        register_nav_menus(
          array(
            'header-menu' => __( 'Header Menu' )
           )
         );
       }
       add_action( 'init', 'blog_register_my_menus' );