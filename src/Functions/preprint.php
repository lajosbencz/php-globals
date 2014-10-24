<?php

namespace {

	function preprint($format) {
		$a = func_get_args();
		if(count($a)>0) {
			$format = array_shift($a);
			if(count($a)>0) $format = vsprintf($format,$a);
			if(!is_cli()) print '<pre>';
			print $format;
			if(is_cli()) print "\r\n";
			if(!is_cli()) print '</pre>';
		}
	}

}
