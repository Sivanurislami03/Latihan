<?php

$indo = 80;
$mtk = 70;
$rata = $indo+$mtk;
$hasil = $rata/2;
$nama = "Siva Nur Islami";
$kelas = "XI-RPL-2";

if ($hasil >= 85) {
	echo "Nama : " . $nama . "<br>";
	echo "Kelas : " . $kelas . "<br>";
	echo "<hr>";
	echo "Nilai B.Indonesia : " . $indo . "<br>";
	echo "Nilai Matematika : " . $mtk . "<br>";
	echo "Nilai Rata-rata : " . $hasil . "<br>";
	echo "Keterangan : <b>LULUS</b><br>";
	echo "Grade : <b>A</b>";
}
elseif ($hasil >= 75) {
	echo "Nama : " . $nama . "<br>";
	echo "Kelas : " . $kelas . "<br>";
	echo "<hr>";
	echo "Nilai B.Indonesia : " . $indo . "<br>";
	echo "Nilai Matematika : " . $mtk . "<br>";
	echo "Nilai Rata-rata : " . $hasil . "<br>";
	echo "Keterangan : <b>LULUS</b><br>";
	echo "Grade : <b>B</b";
}
elseif ($hasil >= 60) {
	echo "Nama : " . $nama . "<br>";
	echo "Kelas : " . $kelas . "<br>";
	echo "<hr>";
	echo "Nilai B.Indonesia : " . $indo . "<br>";
	echo "Nilai Matematika : " . $mtk . "<br>";
	echo "Nilai Rata-rata : " . $hasil . "<br>";
	echo "Keterangan : <b>Tidak Lulus</b><br>";
	echo "Grade : <b>C</b>";
}
elseif ($hasil <= 60) {
	echo "Nama : " . $nama . "<br>";
	echo "Kelas : " . $kelas . "<br>";
	echo "<hr>";
	echo "Nilai B.Indonesia : " . $indo . "<br>";
	echo "Nilai Matematika : " . $mtk . "<br>";
	echo "Nilai Rata-rata : " . $hasil . "<br>";
	echo "Keterangan : <b>Tidak Lulus</b><br>";
	echo "Grade : <b>D</b>";
}
elseif ($hasil > 100 && $hasil < 0) {
	echo "Maaf, Nilai Yang Anda Masukkan Tidak Sesuai";
}

?>