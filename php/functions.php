<?php

/** 
 * functions.php
 * @author T.J. Fogarty <fogarty.tj@gmail.com>
 * @link http://tjfogarty.com
 */


/**
 * Environment
 * Lets us manage assets based on current environment
 */
class Environment {

	/**
	 * @param $localEnvironment (default value is 'localhost' if nothing is passed)
	 * @return boolean
	 */
	public static function isLocal( $localEnvironment = 'localhost' ) {
		if( strpos($_SERVER['SERVER_NAME'], $localEnvironment) !== false ) {
			return true;
		}
		return false;
	}

}