<?php
// Buat Koneksi Database Menggunakan File Konfigurasi
include_once("config.php");

// Mengambil Semua Data Pengguna Dari Database
$result = mysqli_query($mysqli, "SELECT * FROM data ORDER BY id DESC");
?>

<html>
<head>    
    <title>Menu Home</title>
</head>

<body bgcolor="#87CEFA">

<h1><center>Daftar Siswa SMK ASSALAAM</center></h1><br>

<a href="tambah.php">[+] Tambah data siswa</a><br><br>

    <table align="center" width='100%' border=1>

    <tr>
        <th>NIS</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>Jenis Kelamin</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php  
    while($siswa = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$siswa['nis']."</td>";
        echo "<td>".$siswa['nama']."</td>";
        echo "<td>".$siswa['jurusan']."</td>"; 
        echo "<td>".$siswa['kelas']."</td>";
        echo "<td>".$siswa['alamat']."</td>";
        echo "<td>".$siswa['jenis_kelamin']."</td>";
        echo "<td>".$siswa['email']."</td>";
        echo "<td><a href='edit.php?id=$siswa[id]'>edit</a> | <a href='hapus.php?id=$siswa[id]'>hapus</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html>