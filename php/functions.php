<?php
/**
 * Environment
 * Lets us manage assets based on current environment
 */
class Environment {

	/**
	 * @param $localEnvironment - string - default: localhost
	 * @return boolean
	 */
	public static function isLocal( $localEnvironment = 'localhost' ) {
		if( strpos($_SERVER['SERVER_NAME'], $localEnvironment) !== false ) {
			return true;
		}
		return false;
	}

}