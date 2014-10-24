<?php

namespace {

	function array_is_assoc(&$array) {
		return array_keys($array)!==range(0,count($array)-1);
	}

}
