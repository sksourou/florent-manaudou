<?php
	function ft_split($str)
	{
		$i = 0;
		$str = trim($str);
		$splited = explode(" ", $str); /* retourne un tableau */
		asort($splited); /*trie le tableau */
		$splited = array_filter($splited); /* protection */
		sort($splited); /* trie le tableau */
		return ($splited);
	}
?>
