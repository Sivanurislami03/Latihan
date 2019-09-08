<?php
function lingkaran($jari){
	echo "Jari - Jari Lingkaran : $jari<br>";
	$luas = 3.14*($jari*$jari);
	$kel = 2*(3.14*$jari);
	echo "Luas Lingkaran : $luas<br>";
	echo "Keliling Lingkaran : $kel<br>";
}
$a = 10;
lingkaran($a);
?>