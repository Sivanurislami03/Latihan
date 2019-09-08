<?php 
function luas_segitiga($alas,$tinggi){
	echo "Alas : $alas<br>";
	echo "Tinggi : $tinggi<br>";
	$luas = ($alas*$tinggi)/2;
	echo "Luas Segitiga : $luas<br>";
}
luas_segitiga(5, 10);

?>