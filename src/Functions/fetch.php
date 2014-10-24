<?php

namespace LajosBencz\Globals\Functions;

function fetch($path) {
	ob_start();
	include $path;
	$r = ob_get_clean();
	return $r;
}