<html>
<head>
    <title>Tambah Data Siswa</title>
</head>

<body bgcolor="#87CEFA">

    <h1>Tambah Data Siswa</h1>
    <a href="index.php">Kembali ke Home</a>
    <br/><br/>

    <form action="tambah.php" method="POST">
        <table width="25" border="0">

        <tr>
            <td><label for="nis">NIS: </label></td>
            <td><input type="text" name="nis" placeholder="Nomor Induk Siswa" /></td>
        </tr>
        <tr>
            <td><label for="nama">Nama: </label></td>
            <td><input type="text" name="nama" placeholder="Nama Lengkap" /></td>
        </tr>
        <tr>
            <td><label for="jurusan">Jurusan: </label>
            <td><select name="jurusan">
                <option>Pilih</option>
                <option>TKR</option>
                <option>TSM</option>
                <option>RPL</option></select></td>
        </tr>
        <tr>
            <td><label for="kelas">Kelas: </label></td>
            <td><input type="text" name="kelas" placeholder="Kelas" /></td>
        </tr>
        <tr>
            <td><label for="alamat">Alamat: </label></td>
            <td><textarea name="alamat"></textarea></td>
        </tr>
        <tr>
            <td><label for="jenis_kelamin">Jenis Kelamin: </label></td>
            <td><label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label></td>
            <td><label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label></td>
        </tr>
        <tr>
            <td><label for="email">Email: </label></td>
            <td><input type="text" name="email" placeholder="Email" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Daftar" name="daftar" /></td>
        </tr>
    </table>

    </form>

    <?php
    // Periksa Jika formulir dikirimkan, masukkan data formulir ke dalam tabel pengguna.
    if(isset($_POST['daftar'])) {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];

        // koneksi database
        include_once("config.php");

        // Masukkan data pengguna ke dalam tabel
        $result = mysqli_query($mysqli, "INSERT INTO data(nis,nama,jurusan,kelas,alamat,jenis_kelamin,email) VALUES('$nis','$nama','$jurusan','$kelas','$alamat','$jk','$email')");

        // Tampilkan pesan saat data berhasil ditambahkan
        echo "Data berhasil ditambahkan. <a href='index.php'>Lihat Data</a>";
    }
    ?>

</body>
</html>