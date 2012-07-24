<?php
/**
 * This is child themes functions.php file. All modifications should be made in this file.
 *
 * All style changes should be in child themes style.css file.
 *
 * @package PathChild
 * @subpackage Functions
 */

/* Adds the child theme setup function to the 'after_setup_theme' hook. */
add_action( 'after_setup_theme', 'path_child_theme_setup', 11 );

/**
 * Setup function.  All child themes should run their setup within this function.  The idea is to add/remove 
 * filters and actions after the parent theme has been set up.  This function provides you that opportunity.
 *
 * @since 0.1.0
 */
function path_child_theme_setup() {

	/* Get the theme prefix ("path"). */
	$prefix = hybrid_get_prefix();

	/* Example action. */
	// add_action( "{$prefix}_header", 'path_child_example_action' );

	/* Example filter. */
	// add_filter( "{$prefix}_site_title", 'path_child_example_filter' );

}

?>