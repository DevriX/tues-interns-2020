<?php
class Users {
    function init() {
        add_action( 'add_meta_boxes', array( $this, 'add_custom_box_user' ) );
    }
    function add_custom_box_user() {
        $screen = 'user';
            add_meta_box(
                'wporg_box_id',           // Unique ID
                'Phone Number',           // Box title
                'wporg_custom_box_html',  // Content callback, must be of type callable
                $screen                   // Post type
            );
    }
}
