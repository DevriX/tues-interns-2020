<?php
/**
 * Plugin Name:       DX Users
 * Plugin URI:        https://devrix.com
 * Description:       Plugin for handling user login and register
 * Version:           0.1
 * Author:            DevriX-interns-2020
 * Author URI:        https://devrix.com
 * Text Domain:       dx-users
 */

 include 'login-user-class.php';
 include 'register-user-class.php';

 $login_user = new LoginUser;
 $register_user = new RegisterUser;

 $login_user->init();
 $register_user->init();
