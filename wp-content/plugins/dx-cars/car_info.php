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
        <td><input type="image" name="car-image" value="<?php echo( sanitize_text_field( get_post_meta( get_the_ID(), __( 'car-image' ), true ) ) ) ?>"></td>
    </tr>
</table>
