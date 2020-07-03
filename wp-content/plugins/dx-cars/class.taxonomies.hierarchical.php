<?php


class TaxonomiesHierarchical {
    function init() {
        add_action( 'init', array( $this, 'tax_create' ) , 999 );
    }
    public function labels() {
        $arr = array (
            'name' => _x( 'Types', 'taxonomy general name' ),
            'singular_name' => _x( 'Type', 'taxonomy singular name' ),
            'search_items' =>  __( 'Search Types', 'textdomain' ),
            'all_items' => __( 'All Types', 'textdomain' ),
            'parent_item' => __( 'Parent Type', 'textdomain' ),
            'parent_item_colon' => __( 'Parent Type:', 'textdomain' ),
            'edit_item' => __( 'Edit Type' ), 
            'update_item' => __( 'Update Type' ),
            'add_new_item' => __( 'Add New Type' ),
            'new_item_name' => __( 'New Type Name' ),
            'menu_name' => __( 'Types' ),
        ); 
        return $arr;
    }

    public function tax_create(){
        register_taxonomy( 'vehicle-type', 'vehicles', array(
            'hierarchical' => true,
            'labels' => $this->labels(),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'vehicle-type' ),
            )
        );
    }
}