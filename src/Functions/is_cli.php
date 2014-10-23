<?php

function is_cli() {
    return in_array(php_sapi_name(),array('cli'));
}