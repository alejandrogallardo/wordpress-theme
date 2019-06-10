# Notas para la creación de temas en wordpress

Documentación:
https://developer.wordpress.org/themes/

Paso 1:
Creación del tema con html y css

Paso 2:
Crear archivo style.css en la raiz del proyecto y agregar el siguiente codigo.

```
/*
Theme Name: Twenty Seventeen
Theme URI: https://wordpress.org/themes/twentyseventeen/
Author: the WordPress team
Author URI: https://wordpress.org/
Description: Twenty Seventeen brings your site to life with immersive featured images and subtle animations. With a focus on business sites, it features multiple sections on the front page as well as widgets, navigation and social menus, a logo, and more. Personalize its asymmetrical grid with a custom color scheme and showcase your multimedia content with post formats. Our default theme for 2017 works great in many languages, for any abilities, and on any device.
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: twentyseventeen
Tags: one-column, two-columns, right-sidebar, flexible-header, accessibility-ready, custom-colors, custom-header, custom-menu, custom-logo, editor-style, featured-images, footer-widgets, post-formats, rtl-language-support, sticky-post, theme-options, threaded-comments, translation-ready
This theme, like WordPress, is licensed under the GPL.
Use it to make something cool, have fun, and share what you've learned with others.
*/
```

Paso 3:
Crear screenshot.jpg de 600x400 y agregarlo a la raiz del proyecto, adicional el index.html cambiar a .php

Paso 4:
Crear archivo functions.php para agregar los diferentes soportes 

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
 
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
 
  wp_enqueue_script( 'popper', 'direccion CDN', array ( 'jquery' ), 1.1 (version de popper), true(true para que se vaya al footeer));

  wp_enqueue_script( 'bootstrap-js', 'direccion CDN', array ( 'popper' ), '4.3' (version de bootstrp), true(true para que se vaya al footeer));
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

<?php wp_head(); ?> en el index abajo de title
<?php wp_footer(); ?> antes del cierre del body

Paso 5:
Crear archivos footer.php y header.php con su correspondiente contenido

y agregar las funciones

<?php get_header(); ?>
<?php get_footer(); ?> 

Paso 6:
agregar el loop de wordpress
Documentación
https://developer.wordpress.org/themes/basics/the-loop/

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    ... Display post content
<?php endwhile; endif; ?>

<?php the_time(F j, Y); ?>

Paso 6:
Crear archivo single.php con su respectivo contenido

Paso 7:
Agregar soporte para las imagenes en functions.php
if ( function_exists( 'add_theme_support' ) ) {
        add_theme_support( 'post-thumbnails' );
     }

documentación
https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/

uso:
<?php
if ( has_post_thumbnail() ) {
the_post_thumbnail('post-thumbnails', array(
'class' => 'img-fluid'
));
}
?>

Paso 8:
Agregar paginación
- 1 Crear directorio template-parts
- 2 Crear archivo content-paginacion.php y agregar el contenido del recurso
Recursos
https://gist.github.com/mtx-z/f95af6cc6fb562eb1a1540ca715ed928

uso:
<?php get_template_part('template-parts/content', 'paginacion'); ?>

Paso 9:
Agregar titulo dinamico

<?php 
            if ( is_home () ){
                echo get_bloginfo('name');
            } else if ( is_single() ){
                echo the_title();
            } else {
                echo get_bloginfo('name');
            }
        ?>

agregar en funciones add_theme_support('title-tag');

Paso 10:
Agregar widgets

Agregar soporte en functions.php
Documentacion
https://developer.wordpress.org/themes/functionality/sidebars/

Crear archivo sidebar.php en root

Paso 11: 
Modificaciones del sidebar
Agregar app.js en directorio js y registrarlo en functions.js
con la funcion querySelector agregar nuevas clases

Paso 12:
Agregar navbar dinamico
Recurso utilizado
https://github.com/wp-bootstrap/wp-bootstrap-navwalker
https://developer.wordpress.org/themes/functionality/navigation-menus/
Agregar al header

Paso 13:
Agreagar page.php con casi el mismo contenido de single.php 
