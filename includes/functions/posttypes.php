<?php



add_action( 'init', 'athelas_register_iniciativa' );
function athelas_register_iniciativa() {
	$labels = array(
		"name" => "Iniciativas",
		"singular_name" => "Iniciativa",
		"menu_name" => "Iniciativas",
		"all_items" => "All Iniciativas",
		"add_new" => "Add new Iniciativa",
		"add_new_item" => "Add new Iniciativa",
		"edit" => "Edit",
		"edit_item" => "Edit Iniciativa",
		"new_item" => "new Iniciativa",
		"view" => "view",
		"view_item" => "view Iniciativa",
		"search_items" => "Search Iniciativas",
		"not_found" => "Iniciativas not found",
		"not_found_in_trash" => "Iniciativas not found in trash",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Post type Iniciativas",
		'taxonomies' => array(),
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus"=>true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "iniciativas", "with_front" => true ),
		"query_var" => true,
		"show_in_rest" => true,
		"supports" => array(
					'title',
					'thumbnail',
		),	
	);
	register_post_type( "iniciativa", $args );

}// End of athelas_register_iniciativa()

add_action( 'init', 'athelas_register_institucion' );
function athelas_register_institucion() {
	$labels = array(
		"name" => "Instituciones",
		"singular_name" => "Institucion",
		"menu_name" => "Instituciones",
		"all_items" => "All Instituciones",
		"add_new" => "Add new Institucion",
		"add_new_item" => "Add new Institucion",
		"edit" => "Edit",
		"edit_item" => "Edit Institucion",
		"new_item" => "new Institucion",
		"view" => "view",
		"view_item" => "view Institucion",
		"search_items" => "Search Instituciones",
		"not_found" => "Instituciones not found",
		"not_found_in_trash" => "Instituciones not found in trash",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Post type Instituciones",
		'taxonomies' => array(),
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus"=>true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "instituciones", "with_front" => true ),
		"query_var" => true,
		"show_in_rest" => true,
		"supports" => array(
					'title',
					'thumbnail',
		),	
	);
	register_post_type( "institucion", $args );

}// End of athelas_register_institucion()

add_action( 'init', 'athelas_register_evento' );
function athelas_register_evento() {
	$labels = array(
		"name" => "Eventos",
		"singular_name" => "Evento",
		"menu_name" => "Eventos",
		"all_items" => "All Eventos",
		"add_new" => "Add new Evento",
		"add_new_item" => "Add new Evento",
		"edit" => "Edit",
		"edit_item" => "Edit Evento",
		"new_item" => "new Evento",
		"view" => "view",
		"view_item" => "view Evento",
		"search_items" => "Search Eventos",
		"not_found" => "Eventos not found",
		"not_found_in_trash" => "Eventos not found in trash",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Post type Eventos",
		'taxonomies' => array(),
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus"=>true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "eventos", "with_front" => true ),
		"query_var" => true,
		"show_in_rest" => true,
		"supports" => array(
					'title',
		),	
	);
	register_post_type( "evento", $args );

}// End of athelas_register_evento()
