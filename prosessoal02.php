<?php
if (isset($_POST['Input'])) {
	$nama = $_POST['nama'];
	$m1 = $_POST['m1'];
	$m2 = $_POST['m2'];
	$rata = ($m1+$m2)/2;
    
    echo "<pre>";
	echo "Nama      : $nama";
	echo "<br>Mapel 1   : $m1";
	echo "<br>Mapel 2   : $m2";
	echo "<br>Rata-Rata : $rata";

	if ($rata > 75) {
		echo "<br>Status    : <b>LULUS</b>";
	}
	elseif ($rata < 75) {
		echo "<br>Status    : <b>TIDAK LULUS</b>";
	}
	echo "</pre>";
}
?>