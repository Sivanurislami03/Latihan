<html>
<head>
	<title>Latihan Form</title>
</head>
<body>
<form action="" method="GET" name="input">
	<pre>
		Masukan Bilangan : <input type="number" name="bintang">
		<input type="submit" name="input" value="submit">
	</pre>
</form>
</body>
</html>

<?php
if (isset($_GET['input'])) {
	$bnt = $_GET['bintang'];
	echo "<hr>";
    echo "Bintang<br>";
	for ($i=0; $i < $bnt ; $i++) { 
		echo "*";
	}
	echo "<br>";
}

if (isset($_GET['input'])) {
	$bnt = $_GET['bintang'];
	echo "<hr>";
	echo "Bintang Piramid<br>";

	for ($a=0; $a <= $bnt; $a++) {
		for ($b=1; $b <= $bnt-$a; $b++) { 
		echo "&nbsp;&nbsp;";
	}
	for ($i=1; $i <= $a; $i++) {  
		echo "*&nbsp;&nbsp;";
	}
	echo "<br/>";
	}
	echo "<br>";
}

if (isset($_GET['input'])) {
	$bnt = $_GET['bintang'];
	echo "<hr>";
	echo "Bintang Piramid Terbalik<br>";

	for ($i=$bnt; $i >= 1; $i--) { 
		for ($x=$bnt; $x >= $i; $x--) { 
			echo "&nbsp;";
		}
		for ($n=1; $n <= $i ; $n++) { 
			echo "*";
		}
		echo "<br/>";
	}
		echo "<br>";
}

if (isset($_GET['input'])) {
	$bnt = $_GET['bintang'];
	echo "<hr>";
	echo "Bintang Belah Ketupat<br>";

for ($i=1; $i <= $bnt; $i++) { 
	for ($x=$bnt; $x >= $i; $x--) { 
		echo "&nbsp;";
	}
	for ($n=1; $n <= $i; $n++) { 
		echo "*";
	}
	echo "<br>";
}
for ($i=$bnt; $i >= 1 ; $i--) { 
	for ($x=$bnt; $x >= $i ; $x--) { 
		echo "&nbsp;";
	}
	for ($n=1; $n <= $i ; $n++) { 
		echo "*";
	}
	echo "<br/>";
	}
	echo "<br>";

echo "<hr>";
echo "Total Bintang : ".$bnt;
}
?>