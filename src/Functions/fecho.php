<?php

function fecho($format) {
    $a = func_get_args();
    if(count($a)>0) {
        $format = array_shift($a);
        if(count($a)>0) $format = vsprintf($format,$a);
        echo $format;
        ob_flush();
        flush();
    }
}