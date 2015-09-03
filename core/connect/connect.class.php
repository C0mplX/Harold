<?php
require_once( __DIR__ . '/../../config.php' );
/**
* 
* Class for conntection to the database
* @version 1.0
* @since 1.0
* 
*/
class Connect  {
	
	public function db() {

		$config = array(
			'host'     => 'localhost',
			'username' => 'root',
			'password' => '',
			'dbname'   => 'Harold',
			'charset'  => 'UTF8'
		);

		return $db = new PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset='. $config['charset'], $config['username'], $config['password'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

	}
	
}