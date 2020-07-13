<table>
    <tr>
        <td><?php _e( 'Year:' ) ?></td>
        <td><input type="text" name="vehicle-year" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'vehicle-year' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Millage:' ) ?></td>
        <td><input type="text" name="vehicle-millage" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'vehicle-millage' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Horsepower:' ) ?></td>
        <td><input type="text" name="vehicle-horsepower" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-horsepower' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Range:' ) ?></td>
        <td><input type="text" name="vehicle-range" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-range' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Price:' ) ?></td>
        <td><input type="text" name="vehicle-price" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'vehicle-price' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Photo:' ) ?></td>
        <td><input type="file" name="vehicle-images[]" value="" multiple></td>
    </tr>
    <tr>
        <td><?php _e( 'Uploaded photos<br>(might need page refresh):' ) ?></td>
        <?php
            $images = ( array )json_decode( get_post_meta( get_the_ID(), __( 'vehicle-images' ), true ) );
            foreach ( $images as $image ) {
                echo( '<td> <img src="' . $image . '" alt=""></td>' );
            }
        ?>
    </tr>
</table>
