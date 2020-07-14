<?php
class Search {
    function init() {
        add_action( 'pre_get_posts', array( $this, 'pre_get_posts' ), 1 );

        add_filter( 'query_vars', array( $this, 'register_query_vars' ) );
    }

    static $tax_vars = array( // tax_name (what is in the request) => tax_key (what is in the database, only hierarchical taxonomies are different from tax_name )
      'brand'     => 'car-type',
      'category'  => 'vehicle-category',
      'color'     => 'color',
      'conditoin' => 'condition',
      'fuel'      => 'fuel',
      'gearbox'   => 'gearbox',
      'location'  => 'location',
      'model'     => 'car-type',
      'type'      => 'vehicle-category',
    );

    static $meta_vars = array( // meta_name (name of post meta, stored in the database) => meta_keys (what is in the request)
        'car-horsepower' => array(
            'start_horsepower', 'end_horsepower'
        ),
        'car-price' => array(
            'start_price', 'end_price'
        ),
        'car-range' => array(
            'start_range', 'end_range'
        ),
        'car-year' => array(
            'start_year', 'end_year'
        ),
    );

    function register_query_vars( $vars ) { // didn't use array_merge because it caused some problems
        foreach( $this::$tax_vars as $key => $value ) {
            $vars[] = $key;
        }
        foreach( $this::$meta_vars as $key => $value ) {
            foreach( $value as $name ) {
                $vars[] = $name;
            }
        }
        return $vars;
    }

    function get_slug_taxonomy_array( $name, $terms ) {
        $taxonomy_arr = array(
            'taxonomy' => $name,
            'field'    => 'slug',
            'terms'    => $terms,
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
        $query->set( 'post_type', 'vehicles' );

        $tax_query = array();

        foreach( $this::$tax_vars as $tax_name => $tax_key ) {
          if( ! empty( get_query_var( $tax_name ) ) ) {
              $tax_query[] = $this->get_slug_taxonomy_array( $tax_key, get_query_var( $tax_name ) );
          }
        }

        $meta_query = array();
        
        foreach( $this::$meta_vars as $meta_name => $meta_keys ) {
          if( ! empty( get_query_var( $meta_keys[0] ) ) || ! empty( get_query_var( $meta_keys[1] ) ) ) {
              $meta_query[] = $this->get_num_meta_array( $meta_name, get_query_var( $meta_keys[0] ), get_query_var( $meta_keys[1] ) );
          }
        }

        $query->set( 'meta_query', $meta_query );
        $query->set( 'tax_query', $tax_query );
    }
}
