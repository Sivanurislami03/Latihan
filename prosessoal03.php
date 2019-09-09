<?php
if (isset($_POST['Input'])) {
	$nama = $_POST['nama'];
	$nis = $_POST['nis'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$asal = $_POST['asal_sekolah'];
	$ortu = $_POST['nama_ortu'];
	$total = $_POST['nilai_ijazah'];
	$email = $_POST['email'];

	echo "<pre><h3>";
	echo "Nama                : $nama<br>";
	echo "NIS                 : $nis<br>";
	echo "Alamat              : $alamat<br>";
	echo "Jenis Kelamin       : $jk<br>";
	echo "Agama               : $agama<br>";
	echo "Asal Sekolah        : $asal<br>";
	echo "Nama Orang Tua/Wali : $ortu<br>";
	echo "Email               : $email<br><br>";
	echo "Mata Pelajaran Yang Disukai : <br>";

	if (isset($_POST['mtk'])) {
		echo "- " . $_POST['mtk'] . "<br>";
	}
	if (isset($_POST['ipa'])) {
		echo "- " . $_POST['ipa'] . "<br>";
	}
	if (isset($_POST['ips'])) {
		echo "- " . $_POST['ips'] . "<br>";
	}
	if (isset($_POST['pai'])) {
		echo "- " . $_POST['pai'] . "<br>";
	}
	if (isset($_POST['indo'])) {
		echo "- " . $_POST['indo'] . "<br>";
	}

	if ($total > 23) {
		echo "<font color=blue><h3>Selamat Anda Di Terima Karena Nilai Anda $total</h3></font>";
	}
	else{
		echo "<font color=red><h3>Maaf Anda Tidak Di Terima Karena Nilai Anda $total</h3></font>";
	}
	echo "</h3></pre>";
}
?>