#!/usr/bin/php
<?php
	if ($argc > 2)
		return ;
	if ($line = $argv[1])
	{
		$line = trim($line);
		$line = eregi_replace("[ ]+", " ", $line);
		echo $line;
		return $line;
	}
	else
		return ;
?>
