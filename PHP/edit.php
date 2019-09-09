<?php
// file koneksi database
include_once("config.php");

$ambil = mysqli_query($mysqli, "SELECT * FROM data ORDER BY id DESC");

// Periksa apakah formulir dikirimkan untuk pembaruan pengguna, lalu arahkan ke beranda setelah pembaruan
if(isset($_POST['id']))
{   
    $id = $_POST['id'];
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $email = $_POST['email'];

    // perbarui data pengguna
    $result = mysqli_query($mysqli, "UPDATE data SET nis='$nis',nama='$nama',jurusan='$jurusan',kelas='$kelas',
                           alamat='$alamat',jenis_kelamin='$jk',email='$email' WHERE id=$id");

    // Arahkan ke beranda untuk menampilkan data yang diperbarui
    header("Location: index.php");
}
?>
<?php
// Tampilkan data pengguna yang dipilih berdasarkan id
// Dapatkan id dari url
$id = $_GET['id'];

// Ambil data pengguna berdasarkan id
$result = mysqli_query($mysqli, "SELECT * FROM data WHERE id=$id");
while($user_data = mysqli_fetch_array($ambil))
{
    $nis = $user_data['nis'];
    $nama = $user_data['nama'];
    $jurusan = $user_data['jurusan'];
    $kelas = $user_data['kelas'];
    $alamat = $user_data['alamat'];
    $jk = $user_data['jenis_kelamin'];
    $email = $user_data['email'];
}
?>

<html>
<head>  
    <title>Edit User Data</title>
</head>

<body bgcolor="#87CEFA">
    <h1>Edit Data Siswa</h1>
    <a href="index.php">Kembali ke home</a>
    <br/><br/>

    <form name="edit" method="POST" action="edit.php">
        <table width="25" border="0">
            <input type="hidden" name="id" value="<?php echo $user_data['id'] ?>" />
            <tr> 
                <td><label for="nis">NIS:</label></td>
                <td><input type="text" name="nis" placeholder="Nomor Induk Siswa" value="<?php echo $user_data['nis']?>"></td>
            </tr>
            <tr> 
                <td><label for="nama">Nama:</label></td>
                <td><input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $user_data['nama']?>"></td>
            </tr>
            <tr> 
                <td><label for="jurusan">Jurusan:</label></td>
                <?php $jurusan = $user_data['jurusan']?>
                <td><select name="jurusan">
                <option <?php echo ($jurusan == 'Pilih') ? "selected": "" ?>>Pilih</option>
                <option <?php echo ($jurusan == 'TKR') ? "selected": "" ?>>TKR</option>
                <option <?php echo ($jurusan == 'TSM') ? "selected": "" ?>>TSM</option>
                <option <?php echo ($jurusan == 'RPL') ? "selected": "" ?>>RPL</option></select></td>
            </tr>
            <tr>
               <td><label for="kelas">Kelas:</label></td>
               <td><input type="text" name="kelas" placeholder="Kelas" value="<?php echo $user_data['kelas']?>"></td>
            </tr>
            <tr>
               <td><label for="alamat">Alamat:</label></td>
               <td><textarea name="alamat"><?php echo $user_data['alamat']?></textarea></td>
            </tr>
            <tr>
               <td><label for="jenis_kelamin">Jenis Kelamin:</label></td>
               <?php $jk = $user_data['jenis_kelamin']?>
               <td><label><input type="radio" name="jenis_kelamin" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>> Laki-laki</label></td>
               <td><label><input type="radio" name="jenis_kelamin" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>> Perempuan</label></td>
            </tr>
            <tr>
               <td><label for="email">Email:</label></td>
               <td><input type="text" name="email" placeholder="Email" value="<?php echo $user_data['email']?>"></td>
            </tr>
            <tr>
               <td><input type="hidden" name="id" value="<?php echo $_GET['id']?>"></td>
               <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>