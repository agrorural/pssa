<?php //Documentos

add_action( 'init', 'create_my_post_types' );
function create_my_post_types() {
	$labels_documento = array(
		'name'               => _x( 'Documentos', 'post type general name', 'aiaf' ),
		'singular_name'      => _x( 'Documento', 'post type singular name', 'aiaf' ),
		'menu_name'          => _x( 'Documentos', 'admin menu', 'aiaf' ),
		'name_admin_bar'     => _x( 'Documento', 'Agregar Nuevo on admin bar', 'aiaf' ),
		'add_new'            => _x( 'Agregar Nuevo', 'Documento', 'aiaf' ),
		'add_new_item'       => __( 'Agregar Nuevo Documento', 'aiaf' ),
		'new_item'           => __( 'Nuevo Documento', 'aiaf' ),
		'edit_item'          => __( 'Editar Documento', 'aiaf' ),
		'view_item'          => __( 'Ver Documento', 'aiaf' ),
		'all_items'          => __( 'Todos', 'aiaf' ),
		'search_items'       => __( 'Buscar Documentos', 'aiaf' ),
		'parent_item_colon'  => __( 'Documento Padre:', 'aiaf' ),
		'not_found'          => __( 'Ningún Documento encontrado.', 'aiaf' ),
		'not_found_in_trash' => __( 'Ningún Documento encontrado en la Papelera.', 'aiaf' )
	);
 
	$args_documento = array(
		'labels'             => $labels_documento,
        'description'        => __( 'Documentos de AF.', 'aiaf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type' => 'documento',
			'capabilities' => array(
				'publish_posts' => 'publish_documentos',
				'edit_posts' => 'edit_documentos',
				'edit_others_posts' => 'edit_others_documentos',
				'delete_posts' => 'delete_documentos',
				'delete_others_posts' => 'delete_others_documentos',
				'read_private_posts' => 'read_private_documentos',
				'edit_post' => 'edit_documento',
				'delete_post' => 'delete_documento',
				'read_post' => 'read_documento',
			),
		'has_archive'        => true,
		'hierarchical'       => true,
		'rewrite'            => array( 'slug' => 'documentos' ),
		'menu_position'      => 10,
		'menu_icon'			 => 'dashicons-archive',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	$labels_convocatoria = array(
		'name'               => _x( 'Convocatorias', 'post type general name', 'aiaf' ),
		'singular_name'      => _x( 'Convocatoria', 'post type singular name', 'aiaf' ),
		'menu_name'          => _x( 'Convocatorias', 'admin menu', 'aiaf' ),
		'name_admin_bar'     => _x( 'Convocatoria', 'Agregar Nueva on admin bar', 'aiaf' ),
		'add_new'            => _x( 'Agregar Nueva', 'Convocatoria', 'aiaf' ),
		'add_new_item'       => __( 'Agregar Nueva Convocatoria', 'aiaf' ),
		'new_item'           => __( 'Nueva Convocatoria', 'aiaf' ),
		'edit_item'          => __( 'Editar Convocatoria', 'aiaf' ),
		'view_item'          => __( 'Ver Convocatoria', 'aiaf' ),
		'all_items'          => __( 'Todas', 'aiaf' ),
		'search_items'       => __( 'Buscar Convocatorias', 'aiaf' ),
		'parent_item_colon'  => __( 'Convocatoria Padre:', 'aiaf' ),
		'not_found'          => __( 'Ninguna Convocatoria encontrada.', 'aiaf' ),
		'not_found_in_trash' => __( 'Ninguna Convocatoria encontrada en la Papelera.', 'aiaf' )
	);
 
	$args_convocatoria = array(
		'labels'             => $labels_convocatoria,
        'description'        => __( 'Convocatorias de AF.', 'aiaf' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type' => 'convocatoria',
			'capabilities' => array(
				'publish_posts' => 'publish_convocatorias',
				'edit_posts' => 'edit_convocatorias',
				'edit_others_posts' => 'edit_others_convocatorias',
				'delete_posts' => 'delete_convocatorias',
				'delete_others_posts' => 'delete_others_convocatorias',
				'read_private_posts' => 'read_private_convocatorias',
				'edit_post' => 'edit_convocatoria',
				'delete_post' => 'delete_convocatoria',
				'read_post' => 'read_convocatoria',
			),
		'has_archive'        => true,
		'hierarchical'       => true,
		'rewrite'            => array( 'slug' => 'convocatorias' ),
		'menu_position'      => 10,
		'menu_icon'			 => 'dashicons-nametag',
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type('documento', $args_documento);
	register_post_type('convocatoria', $args_convocatoria);
}

add_action( 'init', 'create_my_taxonomies', 0 );
function create_my_taxonomies() {
	// Agregar Nuevo taxonomy, make it hierarchical (like categories)
	$labels_documento_clasificacion = array(
		'name'              => _x( 'Clasificaciones', 'taxonomy general name' ),
		'singular_name'     => _x( 'Clasificación', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Clasificaciones' ),
		'all_items'         => __( 'Todos las Clasificaciones' ),
		'parent_item'       => __( 'Clasificación Padre' ),
		'parent_item_colon' => __( 'Clasificación Padre:' ),
		'edit_item'         => __( 'Editar Clasificación' ),
		'update_item'       => __( 'Actualizar Clasificación' ),
		'add_new_item'      => __( 'Agregar Nueva Clasificación' ),
		'new_item_name'     => __( 'Nombre de Nueva Clasificación' ),
		'menu_name'         => __( 'Clasificaciones' )
	);

	$args_documento_clasificacion = array(
		'public' 			=> true,
		'hierarchical'      => true,
		'labels'            => $labels_documento_clasificacion,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'documentos_clasificacion' ),
		'capabilities'		=> array(
			'manage_terms' => 'manage_clasificacion',
			'edit_terms' => 'edit_clasificacion',
			'delete_terms' => 'delete_clasificacion',
			'assign_terms' => 'assign_clasificacion'
		)
	);

	$labels_convocatoria_tipo = array(
		'name'              => _x( 'Tipos', 'taxonomy general name' ),
		'singular_name'     => _x( 'Tipo', 'taxonomy singular name' ),
		'search_items'      => __( 'Buscar Tipos' ),
		'all_items'         => __( 'Todos los Tipos' ),
		'parent_item'       => __( 'Tipo Padre' ),
		'parent_item_colon' => __( 'Tipo Padre:' ),
		'edit_item'         => __( 'Editar Tipo' ),
		'update_item'       => __( 'Actualizar Tipo' ),
		'add_new_item'      => __( 'Agregar Nuevo Tipo' ),
		'new_item_name'     => __( 'Nombre de Nuevo Tipo' ),
		'menu_name'         => __( 'Tipos' )
	);

	$args_convocatoria_tipo = array(
		'public' 			=> true,
		'hierarchical'      => true,
		'labels'            => $labels_convocatoria_tipo,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'convocatorias_tipo' ),
		'capabilities'		=> array(
			'manage_terms' => 'manage_tipo',
			'edit_terms' => 'edit_tipo',
			'delete_terms' => 'delete_tipo',
			'assign_terms' => 'assign_tipo'
		)
	);

	register_taxonomy( 'clasificacion', 'documento', $args_documento_clasificacion );
	register_taxonomy( 'tipo', 'convocatoria', $args_convocatoria_tipo );
}