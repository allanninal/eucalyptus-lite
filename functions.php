<?php
/**
 * Eucalyptus Lite — theme bootstrap.
 *
 * The free edition of Eucalyptus, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package eucalyptus-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'EUCALYPTUS_LITE_VERSION', '1.0.0' );
define( 'EUCALYPTUS_LITE_DIR', get_template_directory() );
define( 'EUCALYPTUS_LITE_URI', get_template_directory_uri() );

require EUCALYPTUS_LITE_DIR . '/inc/setup.php';
require EUCALYPTUS_LITE_DIR . '/inc/media.php';
require EUCALYPTUS_LITE_DIR . '/inc/food.php';
require EUCALYPTUS_LITE_DIR . '/inc/lite.php';
require EUCALYPTUS_LITE_DIR . '/inc/updater.php';
