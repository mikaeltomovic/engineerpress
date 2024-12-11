<?php
/**
 * Requires and initializes all classes.
 * 
 * @package engineerpress
 */

namespace EngineerPress;

require get_stylesheet_directory() . '/includes/classes/class-loader.php';
require get_stylesheet_directory() . '/includes/classes/class-theme-setup.php';
require get_stylesheet_directory() . '/includes/classes/class-project-post-type.php';

( new Theme_Setup() )->init();
( new Project_Post_Type() )->init();
