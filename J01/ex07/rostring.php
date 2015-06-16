#!/usr/bin/php
<?php

	function ft_split_rt($str)
	{
		$str = trim($str);
		$splited = explode(" ", $str);
		$splited = array_filter($splited);
		$splited = array_values($splited);
		return($splited);
	}

	$i = 1;
	$line = ft_split_rt($argv[1]);
	$size = count($line);
	if ($size != 0)
	{
		while ($i != $size)
		{
			echo $line[$i]." ";
			$i++;
		}
		echo $line[0];
		echo "\n";
	}
?>
