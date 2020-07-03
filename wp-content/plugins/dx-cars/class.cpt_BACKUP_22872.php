<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
    }

    public function labels() {
        $arr = array(
            'labels' => array(
                'name' => __( 'Vehicles' ),
                'singular_name' => __( 'Vehicle' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'vehicles' ),
            'show_in_rest' => true, );
        return $arr;
    }

    function cpt_create() {
<<<<<<< HEAD
        register_post_type( 'vehicles', $this->labels() );
=======
<<<<<<< HEAD
        register_post_type( 'Vehicles', $this->labels() );
=======
        register_post_type( 'vechicles', $this->labels() );
>>>>>>> 64360a10b9c5fc6e67234e1f431381a4e63025d6
>>>>>>> e8f471f687fcdefe44b177833cd89c59a7c4d773
    }
}
