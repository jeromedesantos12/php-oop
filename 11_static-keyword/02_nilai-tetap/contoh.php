<?php 

// class Contoh {
// 	public $angka = 1;

// 	public function halo() {
// 		return "Halo " . $this->angka++ . " kali. <br>";
// 	}
// }

class Contoh {
	public static $angka = 1;

	public function halo() {
		return "Halo " . self::$angka++ . " kali. <br>";
	}
}

$obj1 = new Contoh;
echo $obj1 -> halo();
echo $obj1 -> halo();
echo $obj1 -> halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2 -> halo();
echo $obj2 -> halo();
echo $obj2 -> halo();

// Nilai static akan selalu tetap meskipun object di-instansiasi berulang kali