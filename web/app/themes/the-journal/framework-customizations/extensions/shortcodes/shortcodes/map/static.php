<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$shortcodes_extension = fw_ext( 'shortcodes' );

$shortcodes_extension_theme = fw()->extensions->get( 'shortcodes' )->get_shortcode( 'map' );

wp_enqueue_style(
	'fw-shortcode-map',
	$shortcodes_extension->get_declared_URI( '/shortcodes/map/static/css/styles.css' )
);

$maps_key = method_exists( 'FW_Option_Type_Map', 'api_key' ) ? '&key=' . FW_Option_Type_Map::api_key() : '';
$language = substr( get_locale(), 0, 2 );
wp_enqueue_script(
	'google-maps-api-v3',
	'https://maps.googleapis.com/maps/api/js?v=3.28' . $maps_key . '&libraries=places&language=' . $language,
	array(),
	'3.28',
	true
);

wp_enqueue_script(
	'fw-shortcode-map-script',
	$shortcodes_extension_theme->locate_URI( '/static/js/scripts.js' ),
	array( 'jquery', 'underscore', 'google-maps-api-v3' ),
	fw()->manifest->get_version(),
	true
);
