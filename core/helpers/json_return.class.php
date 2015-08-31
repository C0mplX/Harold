<?php
/**
* 
* Class for handling the returns in json format
*
*/
class Json_return {
	
	public function standar_call_back( $state, $msg ) {
		$array = array( 
			'approved' 	=> $state,
			'msg' 		=> $msg
		);
		echo json_encode( $array );
	}
}
?>