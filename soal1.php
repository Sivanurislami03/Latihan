<?php
$jambu = 15000;
$dus = 6;
$berat = 5;
$harga = 2000;

echo "Harga Jambu/kg = Rp $jambu <br>";
echo "Dus = $dus <br>";
echo "Berat setiap dus = $berat kg<br>";
echo "Harga dus = Rp $harga <br>";

echo "<br>$dus * $berat * $jambu = Rp ". ($dus*$berat*$jambu);
echo "<br>$dus * $harga = Rp ". ($dus*$harga);
echo "<br>Jadi, hasil penjualan seluruh jambu dan dus tersebut adalah Rp ". ($dus*$berat*$jambu+$dus*$harga);

?>