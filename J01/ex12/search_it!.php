#!/usr/bin/php
<?php
	if ($argv > 0)
	{
		$str = $argv[1];
		foreach($argv as $key => $value)
		{
			if ($key > 1)
			{
				$tab = explode(":", $value);
				if ($tab[0] == $str)
				{
					$result = $tab[1];
				}

			}
		}
		if ($result)
			echo $result."\n";
	}
?>
