<?php
/**
* Very very simple registration system
**/

$list = @file('list');
if (! $list) {
	$list = array();
}

$idx = array_search($_SERVER['REMOTE_ADDR'], $list);
unset($list[$idx]);

file_put_contents('list', implode("\n", array_unique($list)));

echo '1';
