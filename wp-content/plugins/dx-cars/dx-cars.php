<?php
/**
 * Plugin Name:       DX Cars
 * Plugin URI:        https://devrix.com
 * Description:       Plugin for handling cars
 * Version:           0.1
 * Author:            DevriX-interns-2020
 * Author URI:        https://devrix.com
 * Text Domain:       dx-cars
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

 include 'class.taxonomies.non-hierarchical.php';
 include 'class.taxonomies.hierarchical.php';
 include 'class.cpt.php';

 $cars = new Vehicles;
 $tax = new Taxonomies;
 $tax1 = new TaxonomiesHierarchical;
 $cars->init();
 $tax->init();
 $tax1 -> init();
