#!/usr/bin/php 
<?PHP
date_default_timezone_set('CET');
$fd = fopen("/var/run/utmpx", "r");
while ($bin = fread($fd, 628))
{
	$unpacked = unpack("a256user/a4id/a32line/ipid/itype/I2time/a256host/i16pad", $bin);
	if ($unpacked["type"] == 7)
		$who[$unpacked["line"]] = $unpacked;
}
ksort($who);
foreach ($who as $arr) {
	$arr["user"] = preg_filter("/[^[:print:]]/", "", $arr["user"]);
	$arr["line"] = preg_filter("/[^[:print:]]/", "", $arr["line"]);
	echo $arr["user"]." ".$arr["line"]."  ".@date("M d H:i", $arr["time1"])." \n";
}
?>
