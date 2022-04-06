<?php 

define('NAMA', 'Sandhika Galih');
echo NAMA;

echo "<br>";

const UMUR = 32;
echo UMUR;

echo "<hr>";

class Coba {
	// define('NAMA', 'Sandhika Galih');
	const NAMA = 'Sandhika Galih';
}

echo Coba::NAMA;
// const bisa disimpan di dalam class

echo "<hr>";

// MAGIC CONSTANT
echo __LINE__; // baris ke 23 
echo "<br>";
echo __FILE__; // alamat dari file constant
echo "<br>";
echo __DIR__; // dir dari file yang bersangkutan

echo "<hr>";

function coba1() {
	return __FUNCTION__;
}
echo coba1();

echo "<br>";

class Coba2 {
	public $kelas = __CLASS__;
}

$obj = new Coba2;
echo $obj->kelas;