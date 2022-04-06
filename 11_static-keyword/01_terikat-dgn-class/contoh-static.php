<?php 

class ContohStatic {
	public static $angka = 1;

	public static function halo() {
		return "Halo " . self::$angka++ . " kali. <br>";
	}
}

echo ContohStatic::halo();
echo ContohStatic::halo();

// Member yang terikat dengan class, bukan dengan object