<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
        add_action( 'add_meta_boxes', array( $this, 'register_meta_boxes' ) );
        add_action( 'save_post', array( $this, 'vehicle_info_save_meta' ), 1, 2 );
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
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        );
        return $arr;
    }

    function cpt_create( $post ) {
        register_post_type( 'vehicles', $this->labels() );
    }

    function register_meta_boxes() {
        add_meta_box( 'vehicle-info', __( 'Vehicle Information' ), array( $this, 'vehicle_info_display_callback' ), 'vehicles' );
    }

    function vehicle_info_display_callback( $post ) {
        include 'vehicle-info-display-callback.php';
    }

    function remove_message( $location ) {
        return remove_query_arg( 'message', $location );
    }

    function allowed_image_types() {
        $mime_types = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tiff|tif'     => 'image/tiff',
        );
        return $mime_types;
    }

    function get_enc_uploaded_img_urls( $images ) {
        $uploaded_urls = array();
        for ( $i = 0; $i < sizeof( $images['name'] ); $i++ ) {
            // Upload each valid file, throw error if file is not valid
            if ( wp_check_filetype( $images['name'][ $i ], $this->allowed_image_types() )['ext'] ) {
                $file = array(
                        'name'     => $images['name'][ $i ],
                        'type'     => $images['type'][ $i ],
                        'tmp_name' => $images['tmp_name'][ $i ],
                        'error'    => $images['error'][ $i ],
                        'size'     => $images['size'][ $i ]
                );
                // Note: images will not upload if you don't set 777 permission to wp-content folder and it's contents
                $uploaded = wp_handle_upload( $file, array( 'test_form' => false ) );
                array_push( $uploaded_urls, $uploaded['url'] );
            } else {
                wp_die( 'Invalid image' );
            }
        }
        return json_encode( $uploaded_urls );
    }

    function vehicle_info_save_meta( $post_id, $post ) {
      	// Return if the user doesn't have edit permissions.
      	if ( ! current_user_can( 'edit_post', $post_id ) ) {
      		return $post_id;
      	}

      	// Now that we're authenticated, time to save the data.
      	// This sanitizes the data from the field and saves it into an array $events_meta.
        $events_meta = array(
            'vehicle-year'       => sanitize_text_field( isset( $_POST['vehicle-year'] ) ? $_POST['vehicle-year'] : null ),
            'vehicle-millage'    => sanitize_text_field( isset( $_POST['vehicle-millage'] ) ? $_POST['vehicle-millage'] : null ),
            'vehicle-horsepower' => sanitize_text_field( isset( $_POST['vehicle-horsepower'] ) ? $_POST['vehicle-horsepower'] : null ),
            'vehicle-range'      => sanitize_text_field( isset( $_POST['vehicle-range'] ) ? $_POST['vehicle-range'] : null ),
            'vehicle-price'      => sanitize_text_field( isset( $_POST['vehicle-price'] ) ? $_POST['vehicle-price'] : null ),
            'vehicle-images'     => isset( $_FILES['vehicle-images'] ) ? $this->get_enc_uploaded_img_urls( $_FILES['vehicle-images'] ): null,
        );

      	// Cycle through the $events_meta array.
      	// Note, in this example we just have one item, but this is helpful if you have multiple.
      	foreach ( $events_meta as $key => $value ) {
            if ( $value == null ) {
                continue;
            }

            switch ( $key ) {
                case 'vehicle-year':
                    if( strcmp( "1769", $value ) > 0 || strcmp( "2020", $value ) < 0 ) wp_die( 'Invalid year' );
                    break;
                case 'vehicle-millage':
                    if( strcmp( "0", $value ) > 0 ) wp_die( 'Invalid millage.' );
                    break;
                case 'vehicle-horsepower':
                    if( strcmp( "0", $value ) > 0 ) wp_die( 'Invalid horsepower.' );
                    break;
                case 'vehicle-range':
                    if( strcmp( "0", $value ) > 0 ) wp_die( 'Invalid range.' );
                    break;
                case 'vehicle-price':
                    if( strcmp( "0", $value ) > 0 ) wp_die( 'Invalid price.' );
                    break;
            }

        		if ( get_post_meta( $post_id, $key, false ) ) {
        			// If the custom field already has a value, update it.
        			update_post_meta( $post_id, $key, $value );
        		} else {
        			// If the custom field doesn't have a value, add it.
        			add_post_meta( $post_id, $key, $value );
        		}
        }
    }
}
