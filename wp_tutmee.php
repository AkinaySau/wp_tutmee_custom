<?php
/**
 * Created by PhpStorm.
 * User: sau
 * Date: 09.07.18
 * Time: 10:48
 */


add_action( 'login_head', function () {
	echo '<style type="text/css">#login h1 a { background: url(' . get_stylesheet_directory_uri() . '/assets/logo.png) no-repeat 0 0 !important; width:187px; height:70px; }</style>';
} );
add_filter( 'login_headerurl', function () {
	return "http://tutmee.ru";
} );
add_filter( 'login_headertitle', function () {
	return "Tutmee Web Agency";
} );