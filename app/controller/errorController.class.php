<?php
require_once( __DIR__ . '/../../core/init.php' );
/**
* 
* Class for handling the 404 error page
* @version 1.0
* @since 1.0
*/
class ErrorController extends View {
	
	public function __construct() {

		$this->renderView( '404', 'error' );
	}
}