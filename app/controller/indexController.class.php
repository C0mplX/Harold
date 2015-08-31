<?php
require_once( __DIR__ . '/../../core/init.php' );
/**
* 
* The default index controller
* @version 1.0
* @since 1.0
*
*/
class IndexController extends View{
	
	public function __construct() {
		
		$this->renderView( 'index', '' );

	}
}