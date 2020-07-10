<?php


class Taxonomies {
    function init() {
        add_action( 'init', array( $this, 'tax_create' ) , 999 );
    }

    public function labels($name) {
        $arr = array (
            'name' => _x( $name.'s', 'taxonomy general name' ),
            'singular_name' => _x( $name, 'taxonomy singular name' ),
            'search_items' =>  __( 'Search '.$name.'s' ),
            'all_items' => __( 'All '.$name.'s' ),
            'parent_item' => null,
            'parent_item_colon' => null,
            'edit_item' => __( 'Edit '.$name ), 
            'update_item' => __( 'Update '.$name ),
            'add_new_item' => __( 'Add New '.$name ),
            'new_item_name' => __( 'New '.$name.' Name' ),
            'menu_name' => __( $name.'s' ),
        ); 
        return $arr;
    }

    public function tax_create(){
        register_taxonomy( 'location', 'vehicles', array(
            'hierarchical' => false,
            'labels' => $this->labels('Location'),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'location' ),
            )
        );
        register_taxonomy( 'color', 'vehicles', array(
            'hierarchical' => false,
            'labels' => $this->labels('Color'),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'color' ),
            )
        );
        register_taxonomy( 'condition', 'vehicles', array(
            'hierarchical' => false,
            'labels' => $this->labels('Condition'),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'condition' ),
            )
        );
        register_taxonomy( 'gearbox', 'vehicles', array( 
            'hierarchical' => false,
            'labels' => $this->labels('Gearbox'),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'gearbox' ),
            )
        );
        register_taxonomy( 'fuel', 'vehicles', array( 
            'hierarchical' => false,
            'labels' => $this->labels('Fuel'),
            'show_ui' => true,
            'show_admin_column' => true,
            'show_in_rest' => true,
            'update_count_callback' => '_update_post_term_count',
            'query_var' => true,
            'rewrite' => array( 'slug' => 'fuel' ),
            )
        );
    }
}