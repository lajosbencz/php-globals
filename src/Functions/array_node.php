<?php

namespace LajosBencz\Globals\Functions;

function array_node(&$array, $node, $value=null, $unset=false, $delimiter='.', $level=0) {
    if($level==0) $node = str_replace("[]",".",str_replace(array("[","]"),"",$node));
    $node = preg_replace("/\\.+/",".",$node);
    $node = preg_replace("/^\\./","",$node);
    $p = strpos($node,$delimiter);
    $push = false;
    if($p==strlen($node)-1) {
        $p = false;
        $node = substr($node,0,-1);
        $push = true;
    }
    if($p===false) {
        if($value===null) {
            if($unset) {
                $array[$node] = null;
                unset($array[$node]);
                return null;
            }
            return $array[$node];
        }
        if(!is_array($array)) $array = array();
        if($push) $array[$node][] = $value;
        else $array[$node] = $value;
        return $value;
    }
    $k = substr($node,0,$p);
    return array_node($array[$k],substr($node,$p+1),$value,$unset,$delimiter,$level+1);
}
