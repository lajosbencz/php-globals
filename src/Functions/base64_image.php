<?php

namespace {

	function base64_image($path, $unlink=false) {
		$type = pathinfo($path, PATHINFO_EXTENSION);
		$data = file_get_contents($path);
		$base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
		if($unlink) unlink($path);
		return $base64;
	}

}
