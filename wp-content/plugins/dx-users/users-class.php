<?php
class Users {
    function init() {
        // add_filter( 'user_contactmethods', array( $this, 'add_custom_box_user' ), 10, 1 );
        add_action( 'show_user_profile', array( $this, 'render_profile_fields' ) );
        add_action( 'edit_user_profile', array( $this, 'render_profile_fields' ) );
        // // validate profile fields
        // add_action( 'user_profile_update_errors', array( $this, 'validate_profile_phone' ), 0, 3 );
        // add_action( 'user_profile_update_errors', array( $this, 'validate_profile_address' ), 0, 3 );
        // // save profile fields
        // // add_action( 'edit_user_profile_update', array( $this, 'save_profile_fields' ), 10 );
        // // add_action( 'personal_options_update', array( $this, 'save_profile_fields' ) );
        // add_action( 'user_profile_update_errors', array( $this, 'validate_profile_fields' ), 0, 3 );
            // validate profile field
        add_action( 'user_profile_update_errors', array( $this, 'validate_profile_fields' ), 0, 3 );   

// save profile fields to your own profile and others.
        add_action( 'edit_user_profile_update', array( $this, 'save_profile_fields' ) );
        add_action( 'personal_options_update', array( $this, 'save_profile_fields' ) );
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
    function render_profile_fields( $user ) { ?>

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

    
    function validate_profile_fields( &$errors, $update, &$user ) {
        $phone_regex = "/08[789]\d{7}/u";
        
        if ( !empty( $_POST['phone'] ) && strlen( $_POST['phone'] ) > 10) {
        
            $errors->add( 'phone', "<strong>ERROR</strong>: The maximum phone length is 10 characters." );

        }
        if ( preg_match( $phone_regex, $_POST['phone'] ) == 0 ) {
            
            $errors->add( 'phone', "<strong>ERROR</strong>: Not a valid phone number." );
        }
        
        return $errors;

    }

    function save_profile_fields( $id ) {
        
        // save input fields values
        $phone_regex = "/08[789]\d{7}/u";
        
        if ( !current_user_can( 'edit_user', $id ) )
            return false;

        if ( isset( $_POST['phone'] ))  {

            if ( preg_match( $phone_regex, $_POST['phone'] ) == 1 ) {
                update_user_meta( $id, 'phone', sanitize_text_field( $_POST['phone'] ) );
            }
        }

        if ( isset( $_POST['address'] ) ) {
            update_user_meta( $id, 'address', sanitize_text_field( $_POST['address'] ) );
        }
    }
}