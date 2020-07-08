<?php
class Users {
    function init() {
        // add_filter( 'user_contactmethods', array( $this, 'add_custom_box_user' ), 10, 1 );
        add_action( 'show_user_profile', 'renderProfileFields' );
        add_action( 'edit_user_profile', 'renderProfileFields' );
        // validate profile fields
        add_action( 'user_profile_update_errors', 'validateProfileFields', 10, 3 );
        // save profile fields
        add_action( 'edit_user_profile_update', 'saveProfileFields' );
        add_action( 'personal_options_update', 'saveProfileFields' );
    }
    // function add_custom_box_user($contact_methods) {
    //     $new_methods = array(
    //         array(
    //             'service' => 'phone-number',
    //             'label' => 'Phone number',
    //         ),
    //         array(
    //             'service' => 'address',
    //             'label' => 'Address',
    //         ),
    //     );

    //     foreach ( $new_methods as $method ) {
    //         if( ! isset( $contact_methods[$method['service']] ) ) {
    //             $contact_methods[$method['service']] = $method['label'];
    //         }
    //     }

    //     return $contact_methods;
    // }
    function renderProfileFields( WP_User $user ) { ?>

        <h3>More Information</h3>
        <table class="form-table">
            <tr>
                <th><label for="phone">Phone</label></th>
                <td>
                    <input type="tel" name="phone" id="phone" value="<?php echo esc_attr( get_the_author_meta( 'phone', $user->ID ) ); ?>" class="regular-text" ><br>
                </td>
            </tr>
            <tr>
                <th><label for="address">Address</label></th>
                <td>
                    <input type="text" name="address" id="address" value="<?php echo esc_attr( get_the_author_meta( 'address', $user->ID ) ); ?>" class="regular-text" ><br>
                </td>
            </tr>
            
        </table>
    
    <?php }

    function validateProfileFields( WP_Error &$errors, $update, &$user ) {
    // validate input fields
        if ( !empty( $_POST['phone'] ) && strlen( $_POST['phone'] ) > 10 && !empty( $_POST['phone'] ) )
            $errors->add( 'phone', "<strong>ERROR</strong>: The maximum phone length is 10 characters." );

        if ( !empty( $_POST['address'] ) && strlen( $_POST['address'] ) > 255 && !empty( $_POST['address'] ) )
            $errors->add( 'address', "<strong>ERROR</strong>: The maximum address length is 255 characters." ); //Unsure what address validation to use 

        return $errors;
    }

    function saveProfileFields( $id ) {
    //  save input fields values
        if ( !current_user_can( 'edit_user', $id ) )
            return false;
    
        if ( isset( $_POST['phone'] ) )
            update_user_meta( $id, 'phone', $_POST['phone'] );
    
        if ( isset( $_POST['address'] ) )
            update_user_meta( $id, 'address', $_POST['address'] );
    }
}