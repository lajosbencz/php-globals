<?php

namespace LajosBencz\Globals;

class Functions {

	protected static function _glob($functions=array(),$exclusive=true) {
		foreach(glob(__DIR__.'/Functions/*.php') as $f) {
			$n = basename($f,'.php');
			if((in_array($n,$functions) && !$exclusive) || (!in_array($n,$functions) && $exclusive)) require_once $f;
		}
	}

	/**
	 * @param array $functions
	 */
	public static function Exclusive($functions=array()) {
		self::_glob($functions,true);
	}

	/**
	 * @param array $functions
	 */
	public static function Inclusive($functions=array()) {
		self::_glob($functions,false);
	}

}
