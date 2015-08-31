<?php
require_once( 'core/init.php' );

#
# Set the defualt page to indexController if no get parameter isset. 
#
if( !isset( $_GET['url'] ) ){

	/**
	* Require the index controller. 
	*/
	$defultController = 'indexController';

	if( class_exists( ucwords( $defultController ) ) ) {
		new $defultController();
	}else {
		new errorController();
	}

}else {
	$controller = $_GET['url'].'Controller';

	if( class_exists( ucwords( $controller ) ) ) {
		new $controller();
	}else {
		new errorController();
	}	

}
