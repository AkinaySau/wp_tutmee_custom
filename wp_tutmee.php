<?php
/**
 * Plugin Name: WP Tutmee
 * Plugin URI: http://tutmee.ru
 * Description: Работает как пакет composer так и как плагин
 * Version: 1.0.1
 * Author: Akinay Sau
 * Author URI: http://a-sau.ru
 */

add_action( 'login_head', function () {
	$path   = __DIR__ . '/assets/logo.png';
	$type   = pathinfo( $path, PATHINFO_EXTENSION );
	$data   = file_get_contents( $path );
	$base64 = 'data:image/' . $type . ';base64,' . base64_encode( $data );

	echo '<style type="text/css">#login h1 a { background: url(' . $base64 . ') no-repeat 0 0 !important; width:187px; height:70px; }</style>';
} );
add_filter( 'login_headerurl', function () {
	return "http://tutmee.ru";
} );
add_filter( 'login_headertitle', function () {
	return "Tutmee Web Agency";
} );