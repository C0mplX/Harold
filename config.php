<?php
/**
* 
* Defines a set of rules to use through out the application 
* 
*/
define( 'ROOT', __DIR__ ); //Sets the root directiry
define( 'DS', DIRECTORY_SEPARATOR ); //Sets the directiory separator
define( 'DEVELOPER_MODE', true ); //Boolean sets the developer environemnt
define( 'SITE_URL', '/Harold/' ); //Set this to the absoulte url, like www.example.com

/**
* Database connectors
*/
define( 'DB_USERNAME', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_NAME', 'harold' );
define( 'DB_HOST', 'localhost' );
define( 'DB_CHAR', 'UTF8' );