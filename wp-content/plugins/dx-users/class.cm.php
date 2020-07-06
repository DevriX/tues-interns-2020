<?php
class Users {
    function init() {
        add_filter( 'user_contactmethods', array( $this, 'add_custom_box_user' ), 10, 1 );
    }
    function add_custom_box_user($contact_methods) {
        $new_methods = array(
            array(
                'service' => 'phone-number',
                'label' => 'Phone number',
            ),
            array(
                'service' => 'address',
                'label' => 'Address',
            ),
        );

        foreach ( $new_methods as $method ) {
            if( ! isset( $contact_methods[$method['service']] ) ) {
                $contact_methods[$method['service']] = $method['label'];
            }
        }

        return $contact_methods;
    }


}
