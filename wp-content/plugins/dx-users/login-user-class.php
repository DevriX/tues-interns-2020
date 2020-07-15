<?php
class LoginUser {
    function init() {
        add_action( 'admin_post_nopriv_process_login', array($this, 'try_login_user' ));
    }

    function try_login_user() {
        $creds = array(
            'user_login'    => sanitize_text_field( $_POST['email'] ),
            'user_password' => sanitize_text_field( $_POST['password'] ),
            'remember'      => true
        );

        $user = wp_signon( $creds );

        if ( is_wp_error( $user ) ) {
            wp_die( $user->get_error_message() );
        }

        wp_set_current_user( $user->data->ID );

        wp_redirect( home_url() ); exit;    
    }
}
