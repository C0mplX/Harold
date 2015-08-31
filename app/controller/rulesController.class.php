<?php
require_once( __DIR__ . '/../../core/init.php' );
/**
* 
* The default index controller
* @version 1.0
* @since 1.0
*
*/
class RulesController extends View {
	
	public function __construct() {
		
		#Set the title text

		#Require the header view.
		$this->renderView( 'header', 'template', array( 'title' => 'Harold | Rules' ) );
		#render main content view
		$this->renderView( 'rules', '' );
		#render the footer view
		$this->renderView( 'footer', 'template' );

	}
}