<?php
/**
 * Astra Child Theme Functions
 */


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Constants
 */
define( 'ASTRA_CHILD_VERSION', '1.0.0' );
define( 'ASTRA_CHILD_DIR', trailingslashit( get_stylesheet_directory() ) );
define( 'ASTRA_CHILD_URI', trailingslashit( get_stylesheet_directory_uri() ) );
define( 'ASTRA_CHILD_INC', ASTRA_CHILD_DIR . 'inc/' );

/**
 * Include Files
 */
require_once ASTRA_CHILD_INC . 'enqueue-assets.php';
require_once ASTRA_CHILD_DIR . 'inc/custom-function.php';
 