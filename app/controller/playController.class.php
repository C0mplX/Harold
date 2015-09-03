<?php
require_once( __DIR__ . '/../../core/init.php' );
/**
* 
* The default index controller
* @version 1.0
* @since 1.0
*
*/
class PlayController extends View {
	
	public function __construct() {
		
		#Set the title text

		#Require the header view.
		$this->renderView( 'header', 'template', array( 'title' => 'Lets play' ) );
		#render main content view
		$this->renderView( 'play', '' ); 
		#render the footer view
		$this->renderView( 'footer', 'template' );

	}
}