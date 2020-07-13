<?php
class RegisterUser {
    function init() {
        add_action( 'admin_post_nopriv_process_register', array( $this, 'process_register_data' ));
    }

    function process_register_data() {
        if( username_exists( $_POST['password'] ) ) {
            wp_die( 'User already exists!' );
        }

        $user_data = array(
            'user_pass'    => $_POST['password'],
            'user_login'   => $_POST['email'],
            'user_email'   => $_POST['email'],
            'display_name' => $_POST['name'],
        );

        if( ! is_email( $user_data['use_email'] ) ) {
            wp_die( 'Invaid email address!' );
        }

        $user_id = wp_insert_user( $user_data );

        if( is_wp_error( $user_id ) ) {
            wp_die( $user_id->get_error_message() );
        }

        wp_redirect( home_url() ); exit;
    }
}
