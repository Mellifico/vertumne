<?php
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action('after_setup_theme', 'FoundationPress_theme_support');

// Register Custom Post Type
function custom_post_type() {

    $labels = array(
        'name'                => _x( 'Custom Posts', 'Post Type General Name', 'FoundationPress' ),
        'singular_name'       => _x( 'Custom Post', 'Post Type Singular Name', 'FoundationPress' ),
        'menu_name'           => __( 'Post Type', 'FoundationPress' ),
        'parent_item_colon'   => __( 'Parent Item:', 'FoundationPress' ),
        'all_items'           => __( 'All Items', 'FoundationPress' ),
        'view_item'           => __( 'View Item', 'FoundationPress' ),
        'add_new_item'        => __( 'Add New Item', 'FoundationPress' ),
        'add_new'             => __( 'Add New', 'FoundationPress' ),
        'edit_item'           => __( 'Edit Item', 'FoundationPress' ),
        'update_item'         => __( 'Update Item', 'FoundationPress' ),
        'search_items'        => __( 'Search Item', 'FoundationPress' ),
        'not_found'           => __( 'Not found', 'FoundationPress' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'FoundationPress' ),
    );
    $args = array(
        'label'               => __( 'custom_post', 'FoundationPress' ),
        'description'         => __( 'Custom Post Type Description', 'FoundationPress' ),
        'labels'              => $labels,
        'supports'            => array( ),
        'taxonomies'          => array( 'category', 'post_tag' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
    );
    register_post_type( 'custom_post', $args );

}

// Hook into the 'init' action
add_action( 'init', 'custom_post_type', 0 );

// Show custom posts on home page
add_action( 'pre_get_posts', 'add_my_post_types_to_query' );

function add_my_post_types_to_query( $query ) {
  if ( is_search() || is_home() && $query->is_main_query() )
    $query->set( 'custom_post', array( 'post_type' ) );
  return $query;
}

// Register Custom Taxonomy
function attachments_custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Classifications', 'Taxonomy General Name', 'FoundationPress' ),
        'singular_name'              => _x( 'Classification', 'Taxonomy Singular Name', 'FoundationPress' ),
        'menu_name'                  => __( 'Classification', 'FoundationPress' ),
        'all_items'                  => __( 'All Items', 'FoundationPress' ),
        'parent_item'                => __( 'Parent Item', 'FoundationPress' ),
        'parent_item_colon'          => __( 'Parent Item:', 'FoundationPress' ),
        'new_item_name'              => __( 'New Item Name', 'FoundationPress' ),
        'add_new_item'               => __( 'Add New Item', 'FoundationPress' ),
        'edit_item'                  => __( 'Edit Item', 'FoundationPress' ),
        'update_item'                => __( 'Update Item', 'FoundationPress' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'FoundationPress' ),
        'search_items'               => __( 'Search Items', 'FoundationPress' ),
        'add_or_remove_items'        => __( 'Add or remove items', 'FoundationPress' ),
        'choose_from_most_used'      => __( 'Choose from the most used items', 'FoundationPress' ),
        'not_found'                  => __( 'Not Found', 'FoundationPress' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'update_count_callback'      => 'class_count',  );
    register_taxonomy( 'classification', array( 'attachment' ), $args );

}

// Hook into the 'init' action
add_action( 'init', 'attachments_custom_taxonomy', 0 );

    // giga super important pour les templates de la custom taxonomie appliquée aux médias
    // cf. :  commentaires de http://wordpress.stackexchange.com/questions/29635/how-to-create-an-attachments-archive-with-working-pagination 
add_action('parse_query', 'hijack_query');

function hijack_query() {

    global $wp_query;

    // When inside a custom taxonomy archive include attachments 
    if (is_tax('classification')) {
        $wp_query->query_vars['post_type'] =  array( 'attachment' );
        $wp_query->query_vars['post_status'] =  array( null );
        // $wp_query->query_vars['tax_query'] =  array( array('taxonomy' => 'topic', 'field' => 'slug', 'terms' => array( 'verticale' ), 'operator' => 'NOT IN') );

        return $wp_query;
    }
}

?>