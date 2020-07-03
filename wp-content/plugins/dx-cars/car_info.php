<table>
    <tr>
        <td>Year:</td>
        <td><input type="text" name="car-year" value="<?php echo(esc_textarea(get_post_meta( get_the_ID(), 'car-year', true ))) ?>"></td>
    </tr>
    <tr>
        <td>Millage:</td>
        <td><input type="text" name="car-millage" value="<?php echo(esc_textarea(get_post_meta( get_the_ID(), 'car-millage', true ))) ?>"></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="car-price" value="<?php echo(esc_textarea(get_post_meta( get_the_ID(), 'car-price', true ))) ?>"></td>
    </tr>
    <tr>
        <td>Photo:</td>
        <td><input type="image" name="car-image" value="<?php echo(esc_textarea(get_post_meta( get_the_ID(), 'car-image', true ))) ?>"></td>
    </tr>
</table>
