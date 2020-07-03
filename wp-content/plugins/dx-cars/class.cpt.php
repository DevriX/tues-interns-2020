<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
        add_action( 'add_meta_boxes', array( $this, 'register_meta_boxes' ) );
    }

    public function labels() {
        $arr = array(
            'labels' => array(
                'name'          => __( 'Vehicles' ),
                'singular_name' => __( 'Vehicle' ),
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'vehicles' ),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ), );
        return $arr;
    }

    function cpt_create() {
        register_post_type( 'Vehicles', $this->labels() );
    }
}
