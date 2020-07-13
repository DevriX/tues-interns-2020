<table>
    <tr>
        <td><?php _e( 'Year:' ) ?></td>
        <td><input type="text" name="car-year" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-year' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Millage:' ) ?></td>
        <td><input type="text" name="car-millage" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-millage' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Price:' ) ?></td>
        <td><input type="text" name="car-price" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-price' ), true ) ) ) ?>"></td>
    </tr>
    <tr>
        <td><?php _e( 'Photo:' ) ?></td>
        <td><input type="file" name="car-images[]" value="" multiple></td>
    </tr>
    <tr>
        <td><?php _e( 'Uploaded photo<br>(might need page refresh):' ) ?></td>
        <?php
            $images = ( array )json_decode( get_post_meta( get_the_ID(), __( 'car-images' ), true ) );
            foreach ( $images as $image ) {
                echo( '<td> <img src="' . $image . '" alt=""></td>' );
            }
        ?>
    </tr>
</table>
