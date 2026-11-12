<?php
/**
 * Reading theme entry point.
 *
 * @package Reading
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; }
define( 'READING_VERSION', '0.1.1' );
require get_template_directory() . '/inc/skins.php';
require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/skin-art.php';
require get_template_directory() . '/inc/template-tags.php';
