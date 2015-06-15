#!/usr/bin/php

<?php
while(1)
{
	echo "Entrez un nombre:";
	if ($line = fgets(STDIN))
	{
		$line = trim($line);
		$valide = 0;
		if (!is_numeric($line))
		{
			$valide = 1;
			$line2 = $line;
		}
		$line = intval($line);
		$intlim = 9223372036854775807;
		$neglim = -9223372036854775808;
		if ($valide == 1)
			 echo "'".$line2."' n'est pas un chiffre\n";
		else if ($line <= $neglim || $line >= $intlim)
			echo "Error: le nombre et trop grand.\n";
		else if ($line % 2 == 0)
			echo "Le chiffre ".$line." est Pair\n";
		else
			echo "Le chiffre ".$line." est Impair\n";
	}
	else
	{
		echo ("\n");
		return ;
	}
}
?>
