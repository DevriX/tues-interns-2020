<?php
class Vehicles {
    function init() {
        add_action( 'init', array( $this, 'cpt_create' ) );
        add_action( 'add_meta_boxes', array( $this, 'register_meta_boxes' ) );
    }

    public function labels() {
        $arr = array(
            'labels' => array(
                'name'          => __( 'Vehicles' ),
                'singular_name' => __( 'Vehicle' ),
            ),
            'public'       => true,
            'has_archive'  => true,
            'rewrite'      => array( 'slug' => 'vehicles' ),
            'show_in_rest' => true,
            'supports'     => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ), );
        return $arr;
    }

    function cpt_create( $post ) {
        register_post_type( 'vehicles', $this->labels() );
    }

    function register_meta_boxes() {
        add_meta_box( 'car-info', __( 'Car Information' ), array($this, 'display_callback'), 'vehicles' );
    }

    function display_callback( $post ) {
        ?>
        <form class="" action="index.html" method="post">
            <table>
                <tr>
                    <td>Year:</td>
                    <td><input type="number" name="" value=""></td>
                </tr>
                <tr>
                    <td>Millage:</td>
                    <td><input type="number" name="" value=""></td>
                </tr>
                <tr>
                    <td>Price:</td>
                    <td><input type="number" name="" value=""></td>
                </tr>
                <tr>
                    <td>Photo:</td>
                    <td><input type="image" name="" value=""></td>
                </tr>
                <tr>
                    <td>Location:</td>
                    <td><input type="text" name="" value=""></td>
                </tr>
            </table>
        </form>
        <?php
    }
}
