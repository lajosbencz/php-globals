<?php

namespace {

	function fetch($path) {
		ob_start();
		include $path;
		$r = ob_get_clean();
		return $r;
	}

}
