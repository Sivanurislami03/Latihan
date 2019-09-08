<?php
$array = array('saya <br>',10);
$aso = [
	[
	  'Judul' => '<h1>Belajar PHP & MySQL untuk Pemula',
	  'Penulis' => '<h4>Admin SMK',
	],
	[
	  'Judul' => '<h1>Tutorial PHP dari Nol hingga Mahir',
	  'Penulis' => '<h4>Admin SMK',
	],
	[
	  'Judul' => '<h1>Membuat Aplikasi Web dengan PHP',
	  'Penulis' => '<h4>Admin SMK',
	]
];
foreach ($aso as $value) {
	echo $value["Judul"] . "<br>";
	echo $value["Penulis"] . "<br>";
	echo "<hr>";
}

?>