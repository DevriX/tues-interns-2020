<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
    }

    public function labels() {
        $arr = array(
            'labels' => array(
                'name' => __( 'Vehicles' ),
                'singular_name' => __( 'Vechicle' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'vechicles' ),
            'show_in_rest' => true, );
        return $arr;
    }

    function cpt_create() {
        register_post_type( 'vechicles', $this->labels() );
    }
}
