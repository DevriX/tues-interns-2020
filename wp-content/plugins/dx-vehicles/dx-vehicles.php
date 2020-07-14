<?php
/**
 * Plugin Name:       DX Vehicles
 * Plugin URI:        https://devrix.com
 * Description:       Plugin for handling vehicles
 * Version:           0.2
 * Author:            DevriX-interns-2020
 * Author URI:        https://devrix.com
 * Text Domain:       dx-vehicles
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

include 'taxonomies-non-hierarchical-class.php';
include 'taxonomies-hierarchical-class.php';
include 'vehicles-class.php';

$cars = new Vehicles;
$tax = new Taxonomies;
$tax1 = new TaxonomiesHierarchical;
$cars->init();
$tax->init();
$tax1->init();
