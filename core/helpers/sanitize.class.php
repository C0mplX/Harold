<?php
/**
* 
* Class for sanatizing data 
*
*/
class Sanitize {

	public function check_email($email) {
        if( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
            return false;
        }
        return true;
    }

    public function check_string( $string, $start, $end ) {
    	if( !preg_match("/^[a-zæøåA-ZÆØÅ\- .]{".$start.",".$end."}$/", $string ) ) {
    		return false;
    	}
    	return true;
    }

    public function check_strin_all( $string, $start, $end ) {
        if( !preg_match("/^[a-zæøåA-ZÆØÅ0-9\- .]{".$start.",".$end."}$/", $string ) ) {
            return false;
        }
        return true;
    }

    public function check_password( $string, $start ) {
        if( !preg_match("/[\s\S]{".$start."}$/", $string ) ) {
            return false;
        }
        return true;   
    }
    
    public function check_number( $string, $start, $end ) {
        if( !preg_match("/^[0-9]{". $start .",".$end."}$/", $string ) ) {
            return false;
        }
        return true;   
    }

}