#!/usr/bin/php
<?php
	function ft_split_doop($str)
	{
		$str = trim($str);
		$splited = explode(" ", $str);
		$splited = array_filter($splited);
		$splited = array_values($splited);
		return($splited);
	}
	if ($argc == 4)
	{
		$str1 = implode(" ", $argv);
		$tab = ft_split_doop($str1);
		if ($tab[2] == "-")
			$result = $tab[1] - $tab	[3];
		else if ($tab[2] == "+")
			$result = $tab[1] + $tab[3];
		else if ($tab[2] == "*")
			$result = $tab[1] * $tab[3];
		else if ($tab[2] == "/")
			$result = $tab[1] / $tab[3];
		else if ($tab[2] == "%")
			$result = $tab[1] % $tab[3];
		echo $result."\n";
	}
	else
		echo "Incorrect Parameters\n";
?>
