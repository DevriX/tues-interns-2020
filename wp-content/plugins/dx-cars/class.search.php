<?php
class Search {
    function init() {
        add_action( 'pre_get_posts', 'pre_get_posts', 1 );

        add_filter( 'query_vars', 'register_query_vars' );
    }

    function register_query_vars( $vars ) {
        $vars[] = 'brand';
        $vars[] = 'category';
        $vars[] = 'color';
        $vars[] = 'conditoin';
        $vars[] = 'fuel';
        $vars[] = 'gearbox';
        $vars[] = 'location';
        $vars[] = 'model';
        $vars[] = 'type';
        $vars[] = 'start_horsepower';
        $vars[] = 'end_horsepower';
        $vars[] = 'start_price';
        $vars[] = 'end_price';
        $vars[] = 'start_range';
        $vars[] = 'end_range';
        $vars[] = 'start_year';
        $vars[] = 'end_year';
        return $vars;
    }

    function get_slug_taxonomy_array( $name ) {
        $taxonomy_arr = array(
            'taxonomy' => $name,
            'field' => 'slug',
            'terms' => get_query_var( $name ),
        );
        return $taxonomy_arr;
    }

    function get_num_meta_array( $key, $value1, $value2 ) {
        $result = array();

        if( !empty( $value1 ) && !empty( $value2 ) ) {
            $result = array(
                'key' => $key,
                'value' => array( $value1, $value2 ),
                'type' => 'numeric',
                'compare' => 'BETWEEN',
            );
        }
        else if( !empty( $value1 ) ) {
            $meta_query[] = array(
                'key' => $key,
                'value' => get_query_var( $value1 ),
                'type' => 'numeric',
                'compare' => '>=',
            );
        }
        else {
            $meta_query[] = array(
                'key' => $key,
                'value' => get_query_var( $value2 ),
                'type' => 'numeric',
                'compare' => '<=',
            );
        }
        return $result;
    }

    function pre_get_posts( $query ) {
        // check if the user is requesting an admin page
        // or current query is not the main query
        if ( is_admin() || ! $query->is_main_query() ){
            return;
        }

        // edit the query only when post type is 'vehicles'
        if ( !is_post_type_archive( 'vehicles' ) ){
            return;
        }

        $tax_query = array('relation' => 'AND',);

        if(!empty(get_query_var('brand'))) { //not working
            $tax_query[] = get_slug_taxonomy_array('brand');
        }
        if( !empty( get_query_var( 'category' ) ) ) { // not working
            $tax_query[] = get_slug_taxonomy_array('category');
        }
        if( !empty( get_query_var( 'color' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('color');
        }
        if( !empty( get_query_var( 'condition' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('condition');
        }
        if( !empty( get_query_var( 'fuel' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('fuel');
        }
        if( !empty( get_query_var( 'gearbox' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('gearbox');
        }
        if( !empty( get_query_var( 'location' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('location');
        }
        if( !empty( get_query_var( 'model' ) ) ) { // not working
            $tax_query[] = get_slug_taxonomy_array('model');
        }
        if( !empty( get_query_var( 'type' ) ) ) {
            $tax_query[] = get_slug_taxonomy_array('type');
        }

        $query->set('tax_query', $tax_query);

        $meta_query = array();

        if( !empty(get_query_var('start_horsepower')) || !empty(get_query_var('end_horsepower')) ) { // not working
            $meta_query[] = get_num_meta_array('horsepower', get_query_var('start_horsepower'), get_query_var('end_horsepower'));
        }
        if( !empty(get_query_var('start_price')) || !empty(get_query_var('end_price')) ) { // not working
            $meta_query[] = get_num_meta_array('price', get_query_var('start_price'), get_query_var('end_price'));
        }
        if( !empty(get_query_var('start_range')) || !empty(get_query_var('end_range')) ) { // not working
            $meta_query[] = get_num_meta_array('range', get_query_var('start_range'), get_query_var('end_range'));
        }
        if( !empty(get_query_var('start_year')) || !empty(get_query_var('end_year')) ) { // not working
            $meta_query[] = get_num_meta_array('year', get_query_var('start_year'), get_query_var('end_year'));
        }

        $query->set('meta_query', $meta_query); // not working?
    }
}
