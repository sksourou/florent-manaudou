<?php
	function ft_is_sort($tab)
	{
		$tmp = $tab;
		$rtmp = $tab;
		sort($tmp);
		rsort($rtmp);
		if ($tmp == $tab || $rtmp == $tab)
			return (1);
		else
			return (0);
	}
?>
