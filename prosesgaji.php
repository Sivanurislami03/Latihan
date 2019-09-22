<?php
if (isset($_POST['Input'])) {
	$nama = $_POST['nama'];
	$nip = $_POST['nip'];
	$jk = $_POST['jk'];
	$a = $_POST['a'];
	$status = $_POST['status'];
	$jbtn = $_POST['jbtn'];
	$glngn = $_POST['glngn'];

	echo "<center><h1>PENGGAJIAN KARYAWAN</h1></center>";
	echo "<h3 align=right>".date("<b>d/m/Y</b>")."</h3>";
	echo "<pre><h3>";
	echo "Nama          : $nama<br>";
	echo "NIP           : $nip<br>";
	echo "Jenis Kelamin : $jk<br>";
	echo "Alamat        : $a<br>";
	echo "Status        : $status<br>";

	if ($status == "Menikah") {
		$status = 100000;
	}
	else{
		$status = 50000;
	}

	echo "Jabatan       : $jbtn<br>";
	if ($jbtn == "HRD") {
		$jbtn = 5000000;
	}
	elseif ($jbtn == "Manager") {
		$jbtn = 4500000;
	}
	elseif ($jbtn == "Staff") {
		$jbtn = 3000000;
	}
	elseif ($jbtn == "Karyawan") {
		$jbtn = 2500000;
	}

	echo "Potongan      : <br>";
	if (isset($_POST['bpjs'])) {
		echo "- " . $_POST['bpjs'] . "<br>";
		$potongan1 = 250000;
		$potongan = $potongan1;
	}if (isset($_POST['koperasi'])) {
		echo "- " . $_POST['koperasi'] . "<br>";
		$potongan2 = 150000;
		$potongan = $potongan2+$potongan1;
	}if (isset($_POST['jamsostek'])) {
		echo "- " . $_POST['jamsostek'] . "<br>";
		$potongan3 = 150000;
		$potongan = $potongan3+$potongan2+$potongan1;
	}

	echo "Golongan      : ";
	if ($glngn == "A1") {
		$gol = 250000;
		$gakor = ($gol+$status+$jbtn)-$potongan;
		$pajak = ($gakor*2.5)/100;
		$gaber = $gakor-$pajak;
		echo "$glngn<hr>";
		echo "Keterangan : <br>";
		echo "Golongan $glngn   : $gol<br>";
		echo "Gaji Kotor    : $gakor<br>";
		echo "Gaji Bersih   : $gaber<br>";
	}
	elseif ($glngn == "A2") {
		$gol = 200000;
		$gakor = ($gol+$status+$jbtn)-$potongan;
		$pajak = ($gakor*2.5)/100;
		$gaber = $gakor-$pajak;
		echo "$glngn<hr>";
		echo "Keterangan : <br>";
		echo "Golongan $glngn   : $gol<br>";
		echo "Gaji Kotor    : $gakor<br>";
		echo "Gaji Bersih   : $gaber<br>";
	}
	elseif ($glngn == "A3") {
		$gol = 150000;
		$gakor = ($gol+$status+$jbtn)-$potongan;
		$pajak = ($gakor*2.5)/100;
		$gaber = $gakor-$pajak;
		echo "$glngn<hr>";
		echo "Keterangan : <br>";
		echo "Golongan $glngn   : $gol<br>";
		echo "Gaji Kotor    : $gakor<br>";
		echo "Gaji Bersih   : $gaber<br>";
	}
	echo "</pre>";
}
?>