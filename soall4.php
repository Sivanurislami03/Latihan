<?php

$aso = [
	[
	  'Barang' => 'Buku Tulis',
	  'Harga' => '4000',
	  'Berat' => '100 gram',
	]
]; 
foreach ($aso as $value) {
	echo "Barang : " . $value["Barang"] . "<br>";
	echo "Harga : " . $value["Harga"] . "<br>";
	echo "Berat : " . $value["Berat"];
}

?>