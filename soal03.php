<!DOCTYPE html>
<html>
<head>
	<title>Pengolahan Form</title>
</head>
<body>
    <form action="prosessoal03.php" method="POST" name="input">
    	<table>
    		<center><h2>TUGAS</h2></center><br>
    	    <tr>
               <td><label for="nama"><b>Nama : </b></label></td>
               <td><input type="text" name="nama" placeholder="Masukkan Nama" /></td>
            </tr>
            <tr>
            	<td><label for="nis"><b>NIS : </b></label></td>
            	<td><input type="number" name="nis" placeholder="Nomor Induk Siswa" /></td>
            </tr>
            <tr>
            	<td><label for="alamat"><b>Alamat : </b></label></td>
            	<td><textarea name="alamat" cols="30" rows="5" placeholder="Masukkan Alamat"></textarea></td>
            </tr>
            <tr>
            	<td><label for="jenis_kelamin"><b>Jenis Kelamin : </b></label></td>
                <td><label><input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki</label>
                <label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label></td>
            </tr>
            <tr>
            	<td><label for="agama"><b>Agama : </b></label>
                <td><select name="agama">
                <option>Pilih</option>
                <option>Islam</option>
                <option>Kristen</option>
                <option>Budha</option></select></td>
            </tr>
            <tr>
               <td><label for="asal sekolah"><b>Asal Sekolah : </b></label></td>
               <td><input type="text" name="asal_sekolah" placeholder="Masukkan Asal Sekolah" /></td>
            </tr>
            <tr>
               <td><label for="nama ortu"><b>Nama Orang Tua/Wali : </b></label></td>
               <td><input type="text" name="nama_ortu" placeholder="Masukkan Nama Ortu/Wali" /></td>
            </tr>
            <tr>
            	<td><label for="mapel"><b>Mata Pelajaran Yang Disukai : </b></td>
            	<td><input type="checkbox" name="mtk" value="Matematika">Matematika
     	        <input type="checkbox" name="ipa" value="Ilmu Pengetahuan Alam">Ilmu Pengetahuan Alam
     	        <input type="checkbox" name="ips" value="Ilmu Pengetahuan sosial">Ilmu Pengetahuan Sosial<br>
     	        <input type="checkbox" name="pai" value="Pendidikan Agama Islam">Pendidikan Agama Islam
     	        <input type="checkbox" name="indo" value="Bahasa Indonesia">Bahasa Indonesia</select></td>
     	    </tr>
     	    <tr>
               <td><label for="nilai"><b>Total Nilai Ijazah SMK : </b></label></td>
               <td><input type="number" name="nilai_ijazah" placeholder="Masukkan Nilai" /></td>
     	    </tr>
     	    <tr>
              <td><label for="email"><b>Email : </b></label></td>
              <td><input type="email" name="email" placeholder="Masukkan Email" /></td>
          </tr>
          <tr>
              <td></td>
             <td><br><input type="submit" value="Input" name="Input" /></td>
          </tr>
       </table>
    </form>
</body>
</html>