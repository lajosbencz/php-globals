<?php

function xml_tag_content($xmlString, $tagName, $offset=0) {
    $pattern = "/<$tagName>([\\w\\W]*?)<\\/$tagName>/";
    preg_match($pattern, $xmlString, $matches, 0, $offset);
    return $matches[1];
}
