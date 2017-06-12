<?php

add_action('init', 'mf_create_custom_post_types');
add_theme_support('post-thumbnails');

add_image_size( 'mf_thumbnail', 480, 320);
add_image_size( 'mf_large', 1080);

// Allow SVG
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

    global $wp_version;
    if ( $wp_version !== '4.7.1' ) {
        return $data;
    }

    $filetype = wp_check_filetype( $filename, $mimes );

    return [
        'ext'             => $filetype['ext'],
        'type'            => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];

}, 10, 4 );

function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyD-7K7R8PcRR3EaMdkoZMhb9npuLyGAiEw');
}

add_action('acf/init', 'my_acf_init');

function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

function fix_svg() {
    echo '<style type="text/css">
        .attachment-266x266, .thumbnail img {
             width: 100% !important;
             height: auto !important;
        }
        </style>';
}
add_action( 'admin_head', 'fix_svg' );

// Ajoute page options d'ACF

if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Informations sur Mariam-Faso',
        'menu_title'	=> 'Mariam-Faso',
        'menu_slug' 	=> 'mf',
        'capability'	=> 'edit_posts',
        'redirect'		=> true,
        'icon_url'      => 'dashicons-id-alt',
        'position'      => '2'
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Coordonnées de Mariam-Faso',
        'menu_title'	=> 'Coordonnées',
        'parent_slug'	=> 'mf',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Partenaires et sponsors de Mariam-Faso',
        'menu_title'	=> 'Partenaires',
        'parent_slug'	=> 'mf',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Informations banquaires de Mariam-Faso',
        'menu_title'	=> 'Informations banquaires',
        'parent_slug'	=> 'mf',
    ));
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Réseaux sociaux',
        'menu_title'	=> 'Réseaux sociaux',
        'parent_slug'	=> 'mf',
    ));


}

register_nav_menu('header', 'Menu principale affiché dans le header');
function mf_get_nav_items($location) {

    // récupérer les items du menu $location et les transformer en un objet contenant $link et $label
    $id = mf_get_nav_id($location);
    if(!$id) {
        return [];

    }

    $nav = [];
    $children = [];
    foreach(wp_get_nav_menu_items($id) as $object) {
        $item = new stdClass();
        $item->link = $object->url;
        $item->label = $object->title;
        $item->children = [];
        if($object->menu_item_parent) {
            $item->parent = $object->menu_item_parent;
            $children[] = $item;
        } else {
            $nav[$object->ID] = $item;
        }
    }
    foreach($children as $item) {
        $nav[$item->parent]->children[] = $item;
    }
    return $nav;
}

// Get menu ID from location

function mf_get_nav_id($location) {
    $id = false;
    foreach(get_nav_menu_locations() as $navLocation => $id) {
        if($navLocation == $location) {
            return $id;
        }
    }
    return false;
}

// Get theme asset URI
function get_mf_asset($resource) {
    return get_template_directory_uri().'/assets/'.trim($resource);
}

// Echo theme asset URI

function mf_asset($resource) {
    echo get_mf_asset($resource);
}

// Output a customizable excerpt

function mf_get_the_excerpt($length=null) {
    $excerpt = get_the_excerpt();
    if(is_null($length) || strlen($excerpt) <= $length) return $excerpt;
    return trim(substr($excerpt, 0, $length)).'&hellip;';
}

function mf_the_excerpt($length=null) {
    echo mf_get_the_excerpt($length);
}

function mf_create_custom_post_types() {
    register_post_type('gallery',[
        'label' => 'Galeries',
        'labels' => [
            'singular_name' => 'Galerie',
            'add_new' => 'Ajouter une galerie',
            'add_new_item' => 'Ajouter une nouvelle galerie'
        ],
        'description' => "Type d'article permettant d'ajouter des galeries",
        'menu_position' => "20",
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
    ]);

    register_post_type('project',[
        'label' => 'Projets',
        'labels' => [
            'singular_name' => 'Projet',
            'add_new' => 'Ajouter un projet',
            'add_new_item' => 'Ajouter un nouveau projet'
        ],
        'description' => "Type d'article permettant d'ajouter des projets à la liste des projets du site",
        'menu_position' => "21",
        'menu_icon' => 'dashicons-hammer',
        'public' => true,
    ]);

    register_post_type('event',[
        'label' => 'Événements',
        'labels' => [
            'singular_name' => 'Événement',
            'add_new' => 'Ajouter un événement',
            'add_new_item' => 'Ajouter un nouvel évènement'
        ],
        'description' => "Type d'article permettant d'ajouter un évènement à la liste des évènements du site",
        'menu_position' => "22",
        'menu_icon' => 'dashicons-calendar-alt',
        'public' => true,
    ]);

    register_post_type('action',[
        'label' => 'Actions',
        'labels' => [
            'singular_name' => 'Action',
            'add_new' => 'Ajouter une action',
            'add_new_item' => 'Ajouter une nouvelle action'
        ],
        'description' => "Type d'article permettant d'ajouter une action à la liste des actions du site",
        'menu_position' => "23",
        'menu_icon' => 'dashicons-carrot',
        'public' => true,
    ]);
}

register_taxonomy('places', 'trip', [
    'label' => 'Endroits',
    'labels' => [
        'singular_name' => 'Endroit',
        'edit_item' => 'Éditez l\'endroit',
        'add_new_item' => 'Ajouter un nouvel endroit'
    ],
    'description' => 'Endroits dans lesquels le voyage a été effectué',
    'public' => true,
    'hierarchical' => true
]);

/**
 * Return the places taxonomy for current post (in the loop)
 */

function mf_get_the_places($glue = '', $prefix = '', $suffix = '') {

    $terms = wp_get_post_terms(get_the_ID(), 'places', ['orderby' => 'name', 'order' => 'ASC', 'fields' => 'all']);

    if(!$terms) {
        return 'Il n\'y a pas d\'endroits associès à ce voyage';
    }

    return implode($glue, array_map(function($term) use ($prefix, $suffix){
        return str_replace(':place_type', get_field('place_type', $term), $prefix) . $term->name . $suffix;
    }, $terms));

}

/**
 * Echo the places taxonomy for current post (in the loop)
 */

function mf_the_places($glue = '', $prefix = '', $suffix = '') {
    echo mf_get_the_places($glue, $prefix, $suffix);
}

/**
 * Returns string (empty, singular or plural) based on given number
 */

function mf_chose_singularity($number, $singular, $plural, $empty = null) {
    switch(intval($number)) {
        case 0 :
            if(is_null($empty)) break;
            return str_replace(':number', $number, $empty);
            break;
        case 1 :
            return str_replace(':number', $number, $singular);;
            break;
    }
    return str_replace(':number', $number, $plural);;
}

/**
 * Returns the motivational with commas and a dot at the end
 */

function mf_get_the_motivational() {
    $motivational = [];
    $motivational_length = count( get_field('motivational') );
    if( have_rows('motivational') ) {
        while ( have_rows('motivational') ) { the_row();

            $motivational_line = get_sub_field('motivational_line');
            if(get_row_index() < $motivational_length) {
                $line = $motivational_line.",";
            } else {
                $line = $motivational_line.".";
            }
            array_push($motivational, $line);
        }
    }
    return $motivational;
}

/**
 * Echo the motivational with commas and a dot at the end
 */
function mf_the_motivational () {
    echo mf_get_the_motivational();
}

/**
 * Returns if nav item is active (bool)
 */

function mf_is_active($link, $current_url) {
    // turns $link into regex
    $urlRegex = '/^'.str_replace('/','\/', $link).'/';

    // checks if $link is in $current_url and if it is not site root
    $is_active = (preg_match($urlRegex, $current_url) && $link != get_site_url().'/');

    // if $link is root AND $current_url is root then it is active
    if(($link === get_site_url().'/') && ($current_url === get_site_url().'/')) {
        $is_active = true;
    }

    return $is_active;
}

function mf_get_datetime($time) {
    $date = date_create_from_format('d/m/Y', $time);
    return date_format($date, 'Y-m-d');
}

function mf_the_datetime($time) {
    echo mf_get_datetime($time);
}

function mf_get_permalink_by_title( $title ) {

    // Initialize the permalink value
    $permalink = null;

    // Try to get the page by the incoming title
    $page = get_page_by_title( strtolower( $title ) );

    // If the page exists, then let's get its permalink
    if( null != $page ) {
        $permalink = get_permalink( $page->ID );
    } // end if

    return $permalink;

} // end theme_get_permalink_by_title

function mf_the_permalink_by_title($title) {
    echo mf_get_permalink_by_title($title);
};


// Insert image

function mf_the_image($image, $sizeWanted, $class = '', $needCaption = false, $needItemprop = true) {

    if( !empty($image) ) {
    // vars
        $url = $image['url'];
        $title = $image['title'];
        $alt = $image['alt'];
        $caption = $image['caption'];

    // thumbnail
        $size = $sizeWanted;
        $thumb = $image['sizes'][ $size ];
        $width = $image['sizes'][ $size . '-width' ];
        $height = $image['sizes'][ $size . '-height' ];
    }
    $captionTag = '';
    if($needCaption) {
        $captionTag = '<figcaption class="figure__caption">'.$caption.'</figcaption>';
    }

    if($needItemprop) {
        $itempropTag = 'itemprop="image"';
    }

    $imageTag = '<img '. $itempropTag .' class="' .$class. '" src="'.$thumb. '" alt="'.$alt.'" />'.$captionTag;
    echo $imageTag;
}

function mf_the_title() {
    $title = get_the_title();

    if(is_front_page()) {
        $title = 'Accueil';
    }

    echo $title;
}

function mf_the_video($url) {
    echo substr($url, strpos($url, '=')+1);
}