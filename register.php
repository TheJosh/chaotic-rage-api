<?php
/**
* Very very simple registration system
**/

$list = @file('list');
if (! $list) {
	$list = array();
}

$list[] = $_SERVER['REMOTE_ADDR'];

file_put_contents('list', implode("\n", array_unique($list)));

echo '1';

