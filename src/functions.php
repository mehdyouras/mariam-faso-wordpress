<?php

add_action('init', 'mf_create_custom_post_types');
add_theme_support('post-thumbnails');

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
    register_post_type('trip',[
        'label' => 'Voyages',
        'labels' => [
            'singular_name' => 'Voyage',
            'add_new' => 'Ajouter un voyage'
        ],
        'description' => "Type d'article permettant d'ajouter des voyages à la section voyages du site",
        'menu_position' => "20",
        'menu_icon' => 'dashicons-palmtree',
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