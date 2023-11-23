<?php
    /*
        Plugin Name: Music Academy - Post Types
        Plugin URI: https://portfolio-fdr-react.vercel.app/
        Description: Añade Post Types al sitio Music Academy
        Version: 1.0.0
        Author: Federico del Rincon
        Author URI: https://portfolio-fdr-react.vercel.app/
        Text Domain: musicAcademy
    */


if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function musicacademy_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'musicacademy' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'musicacademy' ),
		'menu_name'             => __( 'Clases', 'musicacademy' ),
		'name_admin_bar'        => __( 'Clase', 'musicacademy' ),
		'archives'              => __( 'Archivo', 'musicacademy' ),
		'attributes'            => __( 'Atributos', 'musicacademy' ),
		'parent_item_colon'     => __( 'Clase Padre', 'musicacademy' ),
		'all_items'             => __( 'Todas Las Clases', 'musicacademy' ),
		'add_new_item'          => __( 'Agregar Clase', 'musicacademy' ),
		'add_new'               => __( 'Agregar Clase', 'musicacademy' ),
		'new_item'              => __( 'Nueva Clase', 'musicacademy' ),
		'edit_item'             => __( 'Editar Clase', 'musicacademy' ),
		'update_item'           => __( 'Actualizar Clase', 'musicacademy' ),
		'view_item'             => __( 'Ver Clase', 'musicacademy' ),
		'view_items'            => __( 'Ver Clases', 'musicacademy' ),
		'search_items'          => __( 'Buscar Clase', 'musicacademy' ),
		'not_found'             => __( 'No Encontrado', 'musicacademy' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'musicacademy' ),
		'featured_image'        => __( 'Imagen Destacada', 'musicacademy' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'musicacademy' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'musicacademy' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'musicacademy' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'musicacademy' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'musicacademy' ),
		'items_list'            => __( 'Lista de Clases', 'musicacademy' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'musicacademy' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'musicacademy' ),
	);
	$args = array(
		'label'                 => __( 'Clase', 'musicacademy' ),
		'description'           => __( 'Clases para el Sitio Web', 'musicacademy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'musicacademy_clases', $args );

}
add_action( 'init', 'musicacademy_clases_post_type', 0 );



// profesores post types
function musicacademy_profesores_post_type() {

	$labels = array(
		'name'                  => _x( 'profesores', 'Post Type General Name', 'musicacademy' ),
		'singular_name'         => _x( 'Profesor', 'Post Type Singular Name', 'musicacademy' ),
		'menu_name'             => __( 'Profesores', 'musicacademy' ),
		'name_admin_bar'        => __( 'Profesor', 'musicacademy' ),
		'archives'              => __( 'Archivo', 'musicacademy' ),
		'attributes'            => __( 'Atributos', 'musicacademy' ),
		'parent_item_colon'     => __( 'Profesor Padre', 'musicacademy' ),
		'all_items'             => __( 'Todas Las Profesores', 'musicacademy' ),
		'add_new_item'          => __( 'Agregar Profesor', 'musicacademy' ),
		'add_new'               => __( 'Agregar Profesor', 'musicacademy' ),
		'new_item'              => __( 'Nueva Profesor', 'musicacademy' ),
		'edit_item'             => __( 'Editar Profesor', 'musicacademy' ),
		'update_item'           => __( 'Actualizar Profesor', 'musicacademy' ),
		'view_item'             => __( 'Ver Profesor', 'musicacademy' ),
		'view_items'            => __( 'Ver Profesores', 'musicacademy' ),
		'search_items'          => __( 'Buscar Profesor', 'musicacademy' ),
		'not_found'             => __( 'No Encontrado', 'musicacademy' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'musicacademy' ),
		'featured_image'        => __( 'Imagen Destacada', 'musicacademy' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'musicacademy' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'musicacademy' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'musicacademy' ),
		'insert_into_item'      => __( 'Insertar en Profesor', 'musicacademy' ),
		'uploaded_to_this_item' => __( 'Agregado en Profesor', 'musicacademy' ),
		'items_list'            => __( 'Lista de Profesores', 'musicacademy' ),
		'items_list_navigation' => __( 'Navegación de Profesores', 'musicacademy' ),
		'filter_items_list'     => __( 'Filtrar Profesores', 'musicacademy' ),
	);
	$args = array(
		'label'                 => __( 'Profesores', 'musicacademy' ),
		'description'           => __( 'Profesores para el Sitio Web', 'musicacademy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-admin-users',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Profesores', $args );

}
add_action( 'init', 'musicacademy_profesores_post_type', 0 );


// Testimoniales

function musicacademy_testimoniales_post_type() {
	$labels = array(
		'name'                  => _x( 'Testimoniales', 'Post Type General Name', 'musicacademy' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'musicacademy' ),
		'menu_name'             => __( 'Testimoniales', 'musicacademy' ),
		'name_admin_bar'        => __( 'Testimonial', 'musicacademy' ),
		'archives'              => __( 'Archivo', 'musicacademy' ),
		'attributes'            => __( 'Atributos', 'musicacademy' ),
		'parent_item_colon'     => __( 'Testimonial Padre', 'musicacademy' ),
		'all_items'             => __( 'Todas Las Testimoniales', 'musicacademy' ),
		'add_new_item'          => __( 'Agregar Testimonial', 'musicacademy' ),
		'add_new'               => __( 'Agregar Testimonial', 'musicacademy' ),
		'new_item'              => __( 'Nueva Testimonial', 'musicacademy' ),
		'edit_item'             => __( 'Editar Testimonial', 'musicacademy' ),
		'update_item'           => __( 'Actualizar Testimonial', 'musicacademy' ),
		'view_item'             => __( 'Ver Testimonial', 'musicacademy' ),
		'view_items'            => __( 'Ver Testimoniales', 'musicacademy' ),
		'search_items'          => __( 'Buscar Testimonial', 'musicacademy' ),
		'not_found'             => __( 'No Encontrado', 'musicacademy' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'musicacademy' ),
		'featured_image'        => __( 'Imagen Destacada', 'musicacademy' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'musicacademy' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'musicacademy' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'musicacademy' ),
		'insert_into_item'      => __( 'Insertar en Testimonial', 'musicacademy' ),
		'uploaded_to_this_item' => __( 'Agregado en Testimonial', 'musicacademy' ),
		'items_list'            => __( 'Lista de Testimoniales', 'musicacademy' ),
		'items_list_navigation' => __( 'Navegación de Testimoniales', 'musicacademy' ),
		'filter_items_list'     => __( 'Filtrar Testimoniales', 'musicacademy' ),
	);
	$args = array(
		'label'                 => __( 'Testimoniales', 'musicacademy' ),
		'description'           => __( 'Testimoniales para el Sitio Web', 'musicacademy' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 8,
		'menu_icon'             => 'dashicons-editor-quote',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'testimoniales', $args );
}
add_action( 'init', 'musicacademy_testimoniales_post_type', 0 );