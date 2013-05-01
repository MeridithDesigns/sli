<?php 

include 'demo.php';

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'business',
		array(
			'labels' => array(
				'name' => __( 'Business' ),
				'singular_name' => __( 'Business' )
			),
		'public' => true,
		'has_archive' => 'business',
		'exclude_from_search' => false,
		'show_ui' => true,
		'rewrite' => array("slug" => "business"),
		'supports' => array('title','editor','thumbnail','custom-fields', 'taxonomy'),
		'taxonomies' => array('category','post_tag')
		)
		//'taxonomies' => array('catagory','post_tag')
	);
}

add_action( 'init', 'create_topics_nonhierarchical_taxonomy', 0 );

function create_topics_nonhierarchical_taxonomy() {

  $labels = array(

    'name' => _x( 'Businesses', 'taxonomy general name' ),
    'singular_name' => _x( 'Business', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Businesses' ),
    'popular_items' => __( 'Popular Businesses' ),
    'all_items' => __( 'All Businesses' ),
    'parent_item' => null,
    'parent_item_colon' => null,
    'edit_item' => __( 'Edit Business' ),
    'update_item' => __( 'Update Business' ),
    'add_new_item' => __( 'Add New Business' ),
    'new_item_name' => __( 'New Business Name' ),
    'separate_items_with_commas' => __( 'Separate Businesses with commas' ),
    'add_or_remove_items' => __( 'Add or remove Businesses' ),
    'choose_from_most_used' => __( 'Choose from the most used Businesses' ),
    'menu_name' => __( 'Businesses' ),
  );

// Now register the non-hierarchical taxonomy like tag

  register_taxonomy('businesses','business',array(
    'hierarchical' => false,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var' => true,
    'rewrite' => array( 'slug' => 'business' ),
  ));
}

function query_post_type($query) {
    $post_types = get_post_types();

    if ( is_category() || is_tag()) {

        $post_type = get_query_var('actors');

        if ( $post_type ) {
            $post_type = $post_type;
        } else {
            $post_type = $post_types;
        }

        $query->set('post_type', $post_type);

        return $query;
    }
}

add_filter('pre_get_posts', 'query_post_type');

