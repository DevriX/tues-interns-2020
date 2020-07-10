<?php

/**
 * Get the latest version of the master branch
 */
echo shell_exec( 'git fetch origin master; ');
echo shell_exec( 'git checkout master; ');
echo shell_exec( 'git pull origin master; ');
echo shell_exec( 'wp cache flush ');

// Load WordPress
require_once( 'wp-load.php' );

// Display a link to the homepage
echo '<div>';
echo 'You are ready to check the <a href="' . home_url( '/' ) . '">Homepage</a>';
echo '</div>';
