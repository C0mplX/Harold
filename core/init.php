<?php
/**
*
* Main init file, this contains the autoloader for the classes
* @author Ole Martin Skaug 
* @version 1.0
* @since 1.0
* 
*/

#Require the config file
require_once( __DIR__ . '/../config.php' );
#Start session
session_start();

#Start the autoload for the classes
function __autoload( $className ) {

	#Include the files inside the app/controller folder
	if( file_exists( ROOT . DS . 'app' . DS . 'controller' . DS . strtolower( $className ) . '.class.php' ) ) {
		require_once( ROOT . DS . 'app' . DS . 'controller' . DS . strtolower( $className ) . '.class.php' );
	}

	#Include the files inside the app/model folder
	if( file_exists( ROOT . DS . 'app' . DS . 'model' . DS . strtolower( $className ) . '.class.php' ) ) {
		require_once( ROOT . DS . 'app' . DS . 'model' . DS . strtolower( $className ) . '.class.php' );
	}

	#Include the files inside the core/classes folder
	if( file_exists( ROOT . DS . 'core' . DS . 'classes' . DS . strtolower( $className ) . '.class.php' ) ) {
		require_once( ROOT . DS . 'core' . DS . 'classes' . DS . strtolower( $className ) . '.class.php' );
	}

	#Include the files inside the core/connect folder
	if( file_exists( ROOT . DS . 'core' . DS . 'connect' . DS . strtolower( $className ) . '.class.php' ) ) {
		require_once( ROOT . DS . 'core' . DS . 'connect' . DS . strtolower( $className ) . '.class.php' );
	}

	#Include the files inside the core/helpers folder
	if( file_exists( ROOT . DS . 'core' . DS . 'helpers' . DS . strtolower( $className ) . '.class.php' ) ) {
		require_once( ROOT . DS . 'core' . DS . 'helpers' . DS . strtolower( $className ) . '.class.php' );
	}

}

#Classes to include right away
$connect 			= new Connect();
$return 			= new Json_return();
$sanitize 			= new Sanitize();
$security 			= new Security();

/**
*
* Check for magic Quotes and remove them if the exists
*
*/
function stripSlashesDeep( $value ) {

	$value = is_array( $value ) ? array_map( 'stripSlashesDeep' , $value ) : stripcslashes( $value );
	return $value;

}

function removeMagicQuotes() {

	if( get_magic_quotes_gpc() ) {
		$_GET 		= stripSlashesDeep( $_GET );
		$_POST 		= stripSlashesDeep( $_POST );
		$_COOKIE 	= stripSlashesDeep( $_COOKIE );
	}

}

removeMagicQuotes();

#Set error reporting
if( DEVELOPER_MODE === true ) {

	error_reporting( E_ALL );
	ini_set( 'display_errors' , 'On');

} else {

	error_reporting( E_ALL );
	ini_set( 'display_errors' , 'Off');
	
}