<?php

// Register Custom Post Type
function project_post_type() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Project', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Proyectos', 'text_domain' ),
		'name_admin_bar'        => __( 'Proyectos', 'text_domain' ),
		'archives'              => __( 'Archivo de proyecto', 'text_domain' ),
		'attributes'            => __( 'Atributos de proyecto', 'text_domain' ),
		'parent_item_colon'     => __( 'Proyecto principal', 'text_domain' ),
		'all_items'             => __( 'Todos los proyectos', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo proyecto', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo proyecto', 'text_domain' ),
		'edit_item'             => __( 'Editar proyecto', 'text_domain' ),
		'update_item'           => __( 'Actualizar proyecto', 'text_domain' ),
		'view_item'             => __( 'Ver proyecto', 'text_domain' ),
		'view_items'            => __( 'Ver proyectos', 'text_domain' ),
		'search_items'          => __( 'Buscar proyecto', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Remover imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el proyecto', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Subido a este proyecto', 'text_domain' ),
		'items_list'            => __( 'Lista de proyectos', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de proyectos', 'text_domain' ),
		'filter_items_list'     => __( 'Filtrar lista de proyectos', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Project', 'text_domain' ),
		'description'           => __( 'Proyectos desplegados en la página de inicio', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-pressthis',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'project', $args );

}
add_action( 'init', 'project_post_type', 0 );

 ?>
