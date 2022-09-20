<?php

add_theme_support('post-thumbnails');
set_post_thumbnail_size(800, 480);
add_image_size('vignette', 220, 100, true);

function new_excerpt_length($length) {
    return 10; // Nombre de mots limite
}
add_filter('excerpt_length', 'new_excerpt_length');

// menu
function wp_creer_menu() {
    register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'wp_creer_menu');

// acf options



/* Autoriser les fichiers SVG */
function wpc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'wpc_mime_types');


// Register Custom Post Type
function cw4_conferenciers() {

    $labels = array(
        'name'                  => _x( 'Conferenciers', 'Post Type General Name', 'couleur_conf' ),
        'singular_name'         => _x( 'Conferenciers', 'Post Type Singular Name', 'couleur_conf' ),
        'menu_name'             => __( 'Conférenciers', 'couleur_conf' ),
        'name_admin_bar'        => __( 'Post Type', 'couleur_conf' ),
        'archives'              => __( 'Item Archives', 'couleur_conf' ),
        'attributes'            => __( 'Item Attributes', 'couleur_conf' ),
        'parent_item_colon'     => __( 'Parent Item:', 'couleur_conf' ),
        'all_items'             => __( 'Tous les conférenciers', 'couleur_conf' ),
        'add_new_item'          => __( 'Add New Item', 'couleur_conf' ),
        'add_new'               => __( 'Ajouter un conférencier', 'couleur_conf' ),
        'new_item'              => __( 'New Item', 'couleur_conf' ),
        'edit_item'             => __( 'Edit Item', 'couleur_conf' ),
        'update_item'           => __( 'Update Item', 'couleur_conf' ),
        'view_item'             => __( 'View Item', 'couleur_conf' ),
        'view_items'            => __( 'View Items', 'couleur_conf' ),
        'search_items'          => __( 'Search Item', 'couleur_conf' ),
        'not_found'             => __( 'Not found', 'couleur_conf' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'couleur_conf' ),
        'featured_image'        => __( 'Featured Image', 'couleur_conf' ),
        'set_featured_image'    => __( 'Set featured image', 'couleur_conf' ),
        'remove_featured_image' => __( 'Remove featured image', 'couleur_conf' ),
        'use_featured_image'    => __( 'Use as featured image', 'couleur_conf' ),
        'insert_into_item'      => __( 'Insert into item', 'couleur_conf' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'couleur_conf' ),
        'items_list'            => __( 'Items list', 'couleur_conf' ),
        'items_list_navigation' => __( 'Items list navigation', 'couleur_conf' ),
        'filter_items_list'     => __( 'Filter items list', 'couleur_conf' ),
    );
    $args = array(
        'label'                 => __( 'Conferencier', 'couleur_conf' ),
        'description'           => __( 'Conferenciers', 'couleur_conf' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'conferenciers', $args );

}
add_action( 'init', 'cw4_conferenciers', 0 );



// Register Custom Post Type
function cw4_presentations() {

    $labels = array(
        'name'                  => _x( 'Presentations', 'Post Type General Name', 'couleur_conf' ),
        'singular_name'         => _x( 'Presentations', 'Post Type Singular Name', 'couleur_conf' ),
        'menu_name'             => __( 'Présentations', 'couleur_conf' ),
        'name_admin_bar'        => __( 'Post Type', 'couleur_conf' ),
        'archives'              => __( 'Item Archives', 'couleur_conf' ),
        'attributes'            => __( 'Item Attributes', 'couleur_conf' ),
        'parent_item_colon'     => __( 'Parent Item:', 'couleur_conf' ),
        'all_items'             => __( 'Tous les présentations', 'couleur_conf' ),
        'add_new_item'          => __( 'Add New Item', 'couleur_conf' ),
        'add_new'               => __( 'Ajouter une présentations', 'couleur_conf' ),
        'new_item'              => __( 'New Item', 'couleur_conf' ),
        'edit_item'             => __( 'Edit Item', 'couleur_conf' ),
        'update_item'           => __( 'Update Item', 'couleur_conf' ),
        'view_item'             => __( 'View Item', 'couleur_conf' ),
        'view_items'            => __( 'View Items', 'couleur_conf' ),
        'search_items'          => __( 'Search Item', 'couleur_conf' ),
        'not_found'             => __( 'Not found', 'couleur_conf' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'couleur_conf' ),
        'featured_image'        => __( 'Featured Image', 'couleur_conf' ),
        'set_featured_image'    => __( 'Set featured image', 'couleur_conf' ),
        'remove_featured_image' => __( 'Remove featured image', 'couleur_conf' ),
        'use_featured_image'    => __( 'Use as featured image', 'couleur_conf' ),
        'insert_into_item'      => __( 'Insert into item', 'couleur_conf' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'couleur_conf' ),
        'items_list'            => __( 'Items list', 'couleur_conf' ),
        'items_list_navigation' => __( 'Items list navigation', 'couleur_conf' ),
        'filter_items_list'     => __( 'Filter items list', 'couleur_conf' ),
    );
    $args = array(
        'label'                 => __( 'Presentation', 'couleur_conf' ),
        'description'           => __( 'Presentations', 'couleur_conf' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array( 'category', 'post_tag' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-megaphone',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
        'show_in_rest'          => true,
    );
    register_post_type( 'presentations', $args );

}
add_action( 'init', 'cw4_presentations', 0 );


// enlever les attributs width / height des balises images insérées
// avec the_post_thumbnail
function cw4_img_no_attributes( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter('post_thumbnail_html', 'cw4_img_no_attributes', 10, 3);


if ( function_exists('acf_add_options_page') ) {
// on ajoute une page d'option
    acf_add_options_page(array(
        'page_title' => 'Options générales de mon thème',
        'menu_title' => 'Options du thème',
        'menu_slug' => 'cw4-theme-options',
        'capability' => 'edit_posts',
        'redirect' => false
    ));
// on ajoute une sous-page à la page précédente via le paramètre parent_slug
    acf_add_options_sub_page(array(
        'page_title' => 'Options du pied de page',
        'menu_title' => 'Pied de page',
        'parent_slug' => 'cw4-theme-options',
    ));
}