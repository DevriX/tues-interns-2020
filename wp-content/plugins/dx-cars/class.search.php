<?php
class Search {
    function init() {
        add_action( 'pre_get_posts', array( $this, 'pre_get_posts' ), 1 );

        add_filter( 'query_vars', array( $this, 'register_query_vars' ) );
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

    function get_slug_taxonomy_array( $name, $terms ) {
        $taxonomy_arr = array(
            'taxonomy' => $name,
            'field' => 'slug',
            'terms' => $terms,
        );
        return $taxonomy_arr;
    }

    function get_num_meta_array( $key, $value1, $value2 ) {
        $result;

        if( ! empty( $value1 ) && ! empty( $value2 ) ) {
            $result = array(
                'key'     => $key,
                'value'   => array( $value1, $value2 ),
                'type'    => 'NUMERIC',
                'compare' => 'BETWEEN',
            );
        } else if( ! empty( $value1 ) ) {
            $result = array(
                'key'     => $key,
                'value'   => $value1,
                'type'    => 'NUMERIC',
                'compare' => '>=',
            );
        } else {
            $result = array(
                'key'     => $key,
                'value'   => $value2,
                'type'    => 'NUMERIC',
                'compare' => '<=',
            );
        }
        return $result;
    }

    function pre_get_posts( $query ) {
        /*
        // check if the user is requesting an admin page
        // or current query is not the main query
        if ( is_admin() || ! $query->is_main_query() ){
            return;
        }

        // edit the query only when post type is 'vehicles'
        if ( ! is_post_type_archive( 'vehicles' ) ){
            return;
        }
        */

        $tax_query = array( 'relation' => 'AND', );

        if( ! empty( get_query_var( 'brand' ) ) ) { // not working, hierarchical taxonomy
            $tax_query[] = $this->get_slug_taxonomy_array( 'car-type', get_query_var( 'brand' ) );
        }
        if( ! empty( get_query_var( 'category' ) ) ) { // not working, hierarchical taxonomy
            $tax_query[] = $this->get_slug_taxonomy_array( 'vehicle-category', get_query_var( 'category' ) );
        }
        if( ! empty( get_query_var( 'color' ) ) ) {
            $tax_query[] = $this->get_slug_taxonomy_array( 'color', get_query_var( 'color' ) );
        }
        if( ! empty( get_query_var( 'condition' ) ) ) {
            $tax_query[] = $this->get_slug_taxonomy_array( 'condition', get_query_var( 'condition' ) );
        }
        if( ! empty( get_query_var( 'fuel' ) ) ) {
            $tax_query[] = $this->get_slug_taxonomy_array( 'fuel', get_query_var( 'fuel' ) );
        }
        if( ! empty( get_query_var( 'gearbox' ) ) ) {
            $tax_query[] = $this->get_slug_taxonomy_array( 'gearbox', get_query_var( 'gearbox' ) );
        }
        if( ! empty( get_query_var( 'location' ) ) ) {
            $tax_query[] = $this->get_slug_taxonomy_array( 'location', get_query_var( 'location' ) );
        }
        if( ! empty( get_query_var( 'model' ) ) ) { // not working, hierarchical taxonomy
            $tax_query[] = $this->get_slug_taxonomy_array( 'car-type', get_query_var( 'model' ) );
        }
        if( ! empty( get_query_var( 'type' ) ) ) { // not working, hierarchical taxonomy
            $tax_query[] = $this->get_slug_taxonomy_array( 'vehicle-category', get_query_var( 'type' ) );
        }

        $meta_query = array( 'relation' => 'AND', );

        if( ! empty( get_query_var( 'start_horsepower' ) ) || ! empty( get_query_var( 'end_horsepower' ) ) ) { // not working
            $meta_query[] = $this->get_num_meta_array( 'car-horsepower', get_query_var( 'start_horsepower' ), get_query_var( 'end_horsepower' ) );
        }
        if( ! empty( get_query_var( 'start_price' ) ) || ! empty( get_query_var( 'end_price' ) ) ) { // not working
            $meta_query[] = $this->get_num_meta_array( 'car-price', get_query_var( 'start_price' ), get_query_var( 'end_price' ) );
        }
        if( ! empty( get_query_var( 'start_range' ) ) || ! empty( get_query_var( 'end_range' ) ) ) { // not working
            $meta_query[] = $this->get_num_meta_array( 'car-range', get_query_var( 'start_range' ), get_query_var( 'end_range' ) );
        }
        if( ! empty( get_query_var( 'start_year' ) ) || ! empty( get_query_var( 'end_year' ) ) ) { // not working
            array_push($meta_query, $this->get_num_meta_array( 'car-year', get_query_var( 'start_year' ), get_query_var( 'end_year' ) ));
        }

        $query = array(
          'post_type' => 'vehicles',
          'tax_query' => $tax_query,
          'meta_query' => $meta_query,
        );
    }
}
