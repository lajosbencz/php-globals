<?php

namespace LajosBencz\Globals\Functions;

function utf8_any($string) {
    return iconv(mb_detect_encoding($string, mb_detect_order(), true), "UTF-8", $string);
}