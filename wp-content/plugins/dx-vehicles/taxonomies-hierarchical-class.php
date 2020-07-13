<?php

class TaxonomiesHierarchical {
    function init() {
        add_action( 'init', array( $this, 'tax_create' ) , 999 );
    }
    public function labels() {
        $arr = array (
            'name' => _x( 'Categories', 'taxonomy general name' ),
            'singular_name' => _x( 'Category', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Category', 'textdomain' ),
            'all_items' => __( 'All Categories', 'textdomain' ),
            'parent_item' => __( 'Parent Category', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Category:', 'textdomain' ),
            'edit_item' => __( 'Edit Category' ),
            'update_item' => __( 'Update Category' ),
            'add_new_item' => __( 'Add New Category' ),
            'new_item_name' => __( 'New Category Name' ),
            'menu_name' => __( 'Category' ),
        );
        return $arr;
    }

    public function tax_create(){
        register_taxonomy( 'vehicle-category', 'vehicles', array(
            'hierarchical' => true,
            'labels' => $this->labels(),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'vehicle-category' ),
            )
        );
    }
}
