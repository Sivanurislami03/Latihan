<?php

$a = [
	['Nama' => 'Ujang', 'Kelas' => '11 RPL 1', 'Alamat' => 'Cibogo'],
    ['Nama' => 'Mahmud', 'Kelas' => '11 RPL 2', 'Alamat' => 'Cangkuang'],
    ['Nama' => 'Ucok', 'Kelas' => '11 RPL 3', 'Alamat' => 'Cisirung'],
     ];

echo "<pre>";
print_r($a);
echo "</pre>";

$mode = current($a[2]);
$key = key($a[2]);
next($a[2]);
$kelas = key($a[2]);
$kls = current($a[2]);
next($a[2]);
$alamat = key($a[2]);
$al = current($a[2]);
echo "$key : $mode, " . "$kelas : $kls, " . "$alamat : $al"; 