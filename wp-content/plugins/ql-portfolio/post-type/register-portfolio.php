<?php
// Hook <strong>ql_custom_portfolio()</strong> to the init action hook
add_action('init', 'ql_custom_portfolio');

// The custom function to register a movie post type
function ql_custom_portfolio()
{

    register_post_type('single-portfolio', [
        'label' => __('Single Portfolio', 'txtdomain'),
        'public' => true,
        'menu_position' => 5,
        'menu_icon' => 'dashicons-list-view',
        'supports' => ['title', 'editor', 'thumbnail', 'author', 'revisions', 'comments', 'excerpt', 'custom-fields', 'post-formats', 'page-attributes', 'trackbacks'],
        'show_in_rest' => true,
        'rewrite' => ['slug' => 'single-portfolio'],
        'taxonomies' => ['portfolio'],
        'labels' => [
            'singular_name' => __('Single Portfolio', 'txtdomain'),
            'add_new_item' => __('Add new single portfolio', 'txtdomain'),
            'new_item' => __('New single portfolio', 'txtdomain'),
            'view_item' => __('View single portfolio', 'txtdomain'),
            'not_found' => __('No single portfolio found', 'txtdomain'),
            'not_found_in_trash' => __('No single portfolio found in trash', 'txtdomain'),
            'all_items' => __('All single portfolio', 'txtdomain'),
            'insert_into_item' => __('Insert into single portfolio', 'txtdomain')
        ],
    ]);

    register_taxonomy('portfolio', ['single-portfolio'], [
        'label' => __('Portfolio', 'txtdomain'),
        'hierarchical' => true,
        'rewrite' => ['slug' => 'portfolio'],
        'show_admin_column' => true,
        'show_in_rest' => true,
        'labels' => [
            'singular_name' => __('Portfolio', 'txtdomain'),
            'all_items' => __('All Portfolio', 'txtdomain'),
            'edit_item' => __('Edit Portfolio', 'txtdomain'),
            'view_item' => __('View Portfolio', 'txtdomain'),
            'update_item' => __('Update Portfolio', 'txtdomain'),
            'add_new_item' => __('Add New Portfolio', 'txtdomain'),
            'new_item_name' => __('New Portfolio Name', 'txtdomain'),
            'search_items' => __('Search Portfolio', 'txtdomain'),
            'parent_item' => __('Parent Portfolio', 'txtdomain'),
            'parent_item_colon' => __('Parent Portfolio:', 'txtdomain'),
            'not_found' => __('No Portfolio found', 'txtdomain'),
        ],
        'default_term' => [ //(string|array) Default term to be used for the taxonomy.
            'name' => 'Portfolio', //(string) Name of default term.
            'slug' => 'portfolio', //(string) Slug for default term.
            'description' => '', //(string) Description for default term.
        ],
    ]);
    register_taxonomy_for_object_type('portfolio', 'single-portfolio');
}

function vk_the_portfolio_cate()
{
    $cats = get_the_terms(get_the_ID(), 'portfolio');
    foreach ($cats as $cat) :
        if ($cat->slug != 'portfolio') :
            echo '<a href="' . get_term_link($cat->slug, 'portfolio') . '">';
            echo $cat->name;
            echo '</a>';
        endif;
    endforeach;
}
