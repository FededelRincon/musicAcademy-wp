<?php

// Includes
require get_template_directory() . '/includes/widgets.php';
require get_template_directory() . '/includes/queries.php';

function musicacademy_setup(){
    // imagenes destacadas
    add_theme_support('post-thumbnails');

    // Titulos para SEO
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'musicacademy_setup');


// en la pestaña de apariencia, nos habilita "menus"
function musicacademy_menus(){
    register_nav_menus(array(
        'menu-principal'    =>  __('Menu Principal', 'musicacademy'),
        //             'redes-sociales'    =>  __('Redes', 'algo'),
        //             '3er-opcion'    =>  __('3er', 'algo'),
    ));
}

add_action('init', 'musicacademy_menus');


// le agrego 1ero normalize y despues mis styles personalizados
function musicacademy_scripts_styles(){

    // Archivos CSS
    wp_enqueue_style( 'normalize', 'https://necolas.github.io/normalize.css/8.0.1/normalize.css', array(), '8.0.1' );
    if (is_page('galeria')) {
        wp_enqueue_style( 'lightboxcss', get_template_directory_uri() . '/css/lightbox.min.css', array(), '2.11.4');
    }
    if (is_front_page()) {
        wp_enqueue_style( 'swipper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array('normalize'), '11.0.4');
    }
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), '1.0.0' );

    // Archivos JS
    if (is_page('galeria')) {
        wp_enqueue_script('lightboxjs', get_template_directory_uri() . '/js/lightbox.min.js', array('jquery'), '2.11.4', true); //para mostrar la transicion de fotos
    }
    if (is_front_page()) {
        wp_enqueue_script('swipper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '11.0.4', true);    // para animar el slider de comentarios
        wp_enqueue_script('anime', 'https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js', array(), '2.0.2', true);
    }
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'musicacademy_scripts_styles');


// Definir zona de widgets
function musicacademy_widgets(){
    register_sidebar( array(
        'name' => 'Sidebar 1',              //es para wordpress
        'id' => 'sidebar_1',                //este es para nosotros
        'before' => '<div class="widget">', //elemento html antes de
        'after' => '</div>',                //elemento de cierre
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'            //lo mismo para el titulo
    ) );
    register_sidebar( array(
        'name' => 'Sidebar 2',              //es para wordpress
        'id' => 'sidebar_2',                //este es para nosotros
        'before' => '<div class="widget">', //elemento html antes de
        'after' => '</div>',                //elemento de cierre
        'before_title' => '<h3 class="text-center text-primary">',
        'after_title' => '</h3>'            //lo mismo para el titulo
    ) );
}
add_action('widgets_init', 'musicacademy_widgets');


// crear Shortcode
function musicacademy_ubicacion_shortcode(){
    ?>
    <div class="mapa">
        <?php
            if (is_page('contacto')) {
                the_field('ubicacion');
            }
        ?>
    </div>

    <h2 class="text-center text-primary">Formulario de contacto</h2>
    <?php
    echo do_shortcode('[contact-form-7 id="5e6c1ef" title="Contact form 1"]');
}
add_shortcode('musicacademy_ubicacion', 'musicacademy_ubicacion_shortcode');

// imagenes dinamicas para BackGround
function musicacademy_hero_imagen(){
    // obtener el id de la pagina de inicio
    $front_id = get_option('page_on_front');

    // obtener la imagen
    $id_imagen = get_field('hero_imagen', $front_id);

    // obtener la ruta de la imagen
    $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];

    // crear css
    wp_register_style('custom', false); //la registra
    wp_enqueue_style('custom'); // y la cargamos igual

    $imagen_destacada_css = "
        body.home .header{
            background-image: linear-gradient(rgb( 0 0 0 / .50),rgb( 0 0 0 / .75) ), url($imagen);
        }
    ";

    // inyectar css
    wp_add_inline_style('custom', $imagen_destacada_css);

}
add_action('init', 'musicacademy_hero_imagen');

