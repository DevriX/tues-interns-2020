<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
        add_action( 'add_meta_boxes', array( $this, 'register_meta_boxes' ) );
        add_action( 'save_post', array( $this, 'car_info_save_meta' ), 1, 2 );
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

    function cpt_create( $post ) {
        register_post_type( 'vehicles', $this->labels() );
    }

    function register_meta_boxes() {
        add_meta_box( 'car-info', __( 'Car Information' ), array( $this, 'car_info_display_callback' ), 'vehicles' );
    }

    function car_info_display_callback( $post ) {
        include 'car_info.php';
    }

    function car_info_save_meta( $post_id, $post ) {
    	// Return if the user doesn't have edit permissions.
    	if ( ! current_user_can( 'edit_post', $post_id ) ) {
    		return $post_id;
    	}

    	// Now that we're authenticated, time to save the data.
    	// This sanitizes the data from the field and saves it into an array $events_meta.
        $events_meta = array(
            'car-year'    => sanitize_text_field( isset($_POST['car-year']) ? $_POST['car-year'] : null ),
            'car-millage' => sanitize_text_field( isset($_POST['car-millage']) ? $_POST['car-millage'] : null ),
            'car-price'   => sanitize_text_field( isset($_POST['car-price']) ? $_POST['car-price'] : null ),
            'car-image'   => sanitize_text_field( isset($_POST['car-image']) ? $_POST['car-image'] : null ),
        );

    	// Cycle through the $events_meta array.
    	// Note, in this example we just have one item, but this is helpful if you have multiple.
    	foreach ( $events_meta as $key => $value ) {

            // Don't store custom data twice
    		if ( 'revision' === $post->post_type ) {
    			return;
    		}

    		if ( get_post_meta( $post_id, $key, false ) ) {
    			// If the custom field already has a value, update it.
    			update_post_meta( $post_id, $key, $value );
    		} else {
    			// If the custom field doesn't have a value, add it.
    			add_post_meta( $post_id, $key, $value );
    		}

    		if ( ! $value ) {
    			// Delete the meta key if there's no value
    			delete_post_meta( $post_id, $key );
    		}
        }
    }
}
