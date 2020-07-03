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
 include 'class.taxonomies.non-hierarchal.php';
 include 'class.cpt.php';

 $cars = new Vehicles;
 $tax = new Taxonomies;
 $cars->init();
 $tax->init();
