#!/usr/bin/php
<?php
	$str = implode(" ", $argv);
	$str = explode(" ", $str);
	$str = array_filter($str);
	unset($str[0]);
	sort($str);
	foreach($str as $s)
		echo $s. "\n";
?>
