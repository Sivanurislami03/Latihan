<?php
// if
$gol = 20;

if ($gol >= 10) {
	echo "Medali Emas, dengan total cetak gol : ". $gol;
	switch ($gol) {
    case "20":
    echo ", Mendapatkan bonus 100 juta";
    break;
    }
}
elseif ($gol >= 7) {
	echo "Medali Perak, dengan total cetak gol : ". $gol;
	switch ($gol) {
    case "9":
    echo ", Mendapatkan bonus 80 juta";
    break;
    }
}
elseif ($gol >= 4) {
	echo "Medali Perunggu, dengan total cetak gol : ". $gol;
	switch ($gol) {
    case "5":
    echo ", Mendapatkan bonus 50 juta";
    break;
    }
}
else{
	echo "Medali Emas Ngambang, dengan total cetak gol : ". $gol;
	switch ($gol) {
    default:
    echo ", Tidak Mendapatkan Bonus";
    break;
    }
}

?>
