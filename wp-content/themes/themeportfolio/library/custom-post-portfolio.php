<?php
function portfolio_posts_type(){
  $labels_portfolio_post_type_array = array(
            'name'                  =>  __('Portfolio', 'alexandrek'),
            'singular_name'         =>  __('Portfolio', 'alexandrek'),
            'add_new'               =>  __('Ajouter une création', 'alexandrek'),
            'add_new_item'          =>  __('Ajouter une création', 'alexandrek'),
            'edit_item'             =>  __('Editer la astuce', 'alexandrek'),
            'new_item'              =>  __('Nouvelle astuce', 'alexandrek'),
            'view_item'             =>  __('Visualiser la création', 'alexandrek'),
            'search_items'          =>  __('Rechercher une création', 'alexandrek'),
            'not_found'             =>  __('Aucune création', 'alexandrek'),
            'not_found_in_trash'    =>  __('Aucune création dans la corbeille', 'alexandrek'),
            'parent_item_colon'     =>  __('--', 'alexandrek'),
            'menu_name'             =>  __('Portfolio', 'alexandrek')
        );
        $supports_portfolio_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_portfolio_post_type_array = array(
            'slug'          =>  _x('portfolio', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_portfolio_post_type_array = array(
            'labels'                =>  $labels_portfolio_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'alexandrek'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  'dashicons-megaphone',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_portfolio_post_type_array,
            'rewrite'               =>  $rewrite_portfolio_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('portfolio', $args_portfolio_post_type_array);

        $labels_serie = array(
		'name'              => _x('Catégorie', 'taxonomy general name'),
		'singular_name'     => _x('Catégorie', 'taxonomy singular name'),
		'search_items'      => __('Rechercher une catégorie'),
		'all_items'         => __('Toutes les catégories'),
		'edit_item'         => __('Éditer une catégories'),
		'update_item'       => __('Mettre à jour une catégorie'),
		'add_new_item'      => __('Ajouter une catégorie'),
		'new_item_name'     => __('Nouvelle catégorie'),
		'menu_name'         => __('Catégories'),
    	);

    	// register taxonomy
    	register_taxonomy( 'portfolio', 'portfolio', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );

      }

      add_action('init','portfolio_posts_type', 1);
