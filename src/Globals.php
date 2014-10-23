<?php

namespace LajosBencz\Globals;

class Functions {

	/**
	 * @param array $functions
	 */
	public static function Exclusive($functions=array()) {
		foreach(glob(__DIR__.'/Functions/*.php') as $f) {
			$n = basename($f,'.php');
			if(!in_array($n,$functions)) require_once $f;
		}
	}

	/**
	 * @param array $functions
	 */
	public static function Inclusive($functions=array()) {
		foreach(glob(__DIR__.'/Functions/*.php') as $f) {
			$n = basename($f,'.php');
			if(in_array($n,$functions)) require_once $f;
		}
	}

}
