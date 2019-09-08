<?php
$loop = 15;
$no = 1;
for ($i=0; $i<=$loop; $i++){
	if ($i == 1) {
		echo "Aku data ke-".$no++." dan Mendapatkan medali Emas<br>";
	}
	elseif ($i == 2) {
		echo "Aku data ke-".$no++." dan Mendapatkan medali Perak<br>";
	}
	elseif ($i == 3) {
		echo "Aku data ke-".$no++." dan Mendapatkan medali Perunggu<br>";
	}
	elseif ($i >= 4 && $i <= 6) {
		echo "Aku data ke-".$no++." dan Mendapatkan tas laptop<br>";
	}
	elseif ($i >= 7 && $i <= 9) {
		echo "Aku data ke-".$no++." dan Mendapatkan tas karung<br>";
	}
	elseif($i >= 10){
		echo "Aku data ke-".$no++." dan Tidak mendapatkan apapun<br>";
	}
}
?>