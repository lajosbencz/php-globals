<?php

namespace LajosBencz\Globals\Functions;

function predump($variable) {
    $variables = func_get_args();
    if(!is_cli()) print '<pre>';
    foreach($variables as &$v) if(is_cli()) print_r($v); else var_dump($v);
    if(!is_cli()) print '</pre>';
}