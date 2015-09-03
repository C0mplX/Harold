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
	
	public function renderView( $view, $folder = "", $data = "" ) {
		
		/**
		* Check if there is any data transferd to the class
		*/
		if( $data != "" ) {
			$data = $data;
		}

		if( $folder != "" ) {
			if( file_exists( ROOT . DS . 'app' . DS . 'view' . DS . $folder . DS . strtolower( $view ) . '.view.php' ) ) {
				require_once( ROOT . DS . 'app' . DS . 'view' . DS . $folder . DS . strtolower( $view ) . '.view.php' );		
			}else {
				if( DEVELOPER_MODE === true ) {
					echo 'Missing View. Add '.$view. ' in app/view';
				}else {
					new errorController();
				}
			}
			
		}else {
			if( file_exists( ROOT . DS . 'app' . DS . 'view' . DS . strtolower( $view ) .'.view.php' ) ) {
				require_once( ROOT . DS . 'app' . DS . 'view' . DS . strtolower( $view ) .'.view.php' );		
			}else {
				if( DEVELOPER_MODE === true ) {
					echo 'Missing View. Add '.$view. ' in app/view';
				}else {
					new errorController();
				}
			}
			
		}
		
	}
}