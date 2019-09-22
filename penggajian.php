<!DOCTYPE html>
<html>
  <head>
	<title>Pengolahan Form</title>
  </head>
<body>
    <form action="prosesgaji.php" method="POST" name="input">
        <table>
    	    <center><h2>PENGGAJIAN KARYAWAN</h2></center><br>
    		    <tr>
                    <td><label for="nama"><b>Nama : </b></label></td>
                    <td><input type="text" name="nama" placeholder="Masukkan Nama" /></td>
                </tr>
                <tr>
            	    <td><label for="nip"><b>NIP : </b></label></td>
            	    <td><input type="number" name="nip" placeholder="Nomor Induk Penduduk" /></td>
                </tr>
                <tr>
                    <td><label for="jk"><b>Jenis Kelamin : </b></label></td>
                    <td><label><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</label>
                    <label><input type="radio" name="jk" value="Perempuan">Perempuan</label></td>
                </tr>
                <tr>
            	    <td><label for="alamat"><b>Alamat : </b></label></td>
            	    <td><textarea name="a" cols="30" rows="5" placeholder="Masukkan Alamat"></textarea></td>
                </tr>
                <tr>
            	    <td><label for="status"><b>Status : </b></label>
                    <td><select name="status">
                    <option>Pilih</option>
                    <option>Menikah</option>
                    <option>Belum Menikah</option></select></td>
                </tr>
                <tr>
            	    <td><label for="jabatan"><b>Jabatan : </b></label>
                    <td><select name="jbtn">
                    <option>Pilih</option>
                    <option>HRD</option>
                    <option>Manager</option>
                    <option>Staff</option>
                    <option>Karyawan</option></select></td>
                </tr>
                <tr>
            	    <td><label for="potongan"><b>Potongan : </b></td>
            	    <td><input type="checkbox" name="bpjs" value="BPJS">BPJS
     	            <input type="checkbox" name="koperasi" value="Koperasi">Koperasi
     	            <input type="checkbox" name="jamsostek" value="Jamsostek">Jamsostek</select></td>
     	        </tr>
     	        <tr>
            	    <td><label for="golongan"><b>Golongan : </b></label>
                    <td><select name="glngn">
                    <option>Pilih</option>
                    <option>A1</option>
                    <option>A2</option>
                    <option>A3</option></select></td>
                </tr>
                <tr>
                    <td></td>
                    <td><br><input type="submit" value="Input" name="Input" /></td>
                </tr>
        </table>
    </form>
</body>
</html>