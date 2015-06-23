#!/usr/bin/php
<?PHP
if ($argc > 1)
{
	if(!($str = file_get_contents($argv[1])))
	{
		echo "Ne refais plus ca\n";
		return ;
	}
	function callback($tab)
	{
		return strtoupper($tab[0]);
	}
	function callback2($tab)
	{
		$str = preg_replace_callback("/>(.|\n)*</U", "callback", $tab[0]);
		return($str);
	}
	$line = preg_replace_callback("/\".*\"/U", "callback", $str);
	$line = preg_replace_callback("/<a(.|\n)*<\/a>/U", "callback2", $line);
	echo $line;
}
?>
