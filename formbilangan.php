<!DOCTYPE html>
<html>
<head>
	<title>Pengolahan Form</title>
</head>
<body>
     <center>
    	<p>Form Array</p>
    </center>
    <fieldset>
    	<legend>Form Array</legend>
    	<form action="" method="get">
    		<label for="">Masukkan Jumlah</label>
    		<input type="number" name="jml" required>
    		<input type="submit" name="submit" value="Simpan">
    		<hr>
    	</form>

    	<form action="formbilanganpro.php" method="post">
    	<?php
    	if (isset($_GET['submit'])) {
    		$jml_form = $_GET['jml'];
    		for ($a=0; $a<$jml_form; $a++) { ?>
    			<label for=>Masukkan Bilangan</label>
    			<input type="text" name="bilangan[]" required>
    			<label for=>Masukkan Pangkat Bilangan</label>
    			<input type="text" name="pangkat[]" required>
    			<br>
    			<br>
    		<?php } ?>
    		<input type="submit" name="sbm" value="Simpan">
    		<input type="reset" value="Reset">
    	</form>
    	<?php } ?>
    </fieldset>
</body>
</html>