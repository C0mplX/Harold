<?php
require_once( __DIR__ . '/../init.php' );
/**
* 
* Main view handler controller.  
* @version 1.0
* @since 1.0
*
*/
class View  {
	
	public function renderView( $view, $folder = "" ) {

		if( $folder != "" ) {
			require_once( ROOT . DS . 'app' . DS . 'view' . DS . $folder . DS . strtolower( $view ) . '.view.php' );	
		}else {
			require_once( ROOT . DS . 'app' . DS . 'view' . DS . strtolower( $view ) .'.view.php' );	
		}
		
	}
}