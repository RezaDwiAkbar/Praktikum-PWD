<?php
// Create database connection using config file 
include_once("konek.php");

// Fetch all users data from database
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa ");
?>

<html>
<head>
<title>Halaman Utama</title>
</head>

<body>
<a href="tambah.php">Tambah Data Baru</a><br/><br/>

<table width='80%' border=1>

<tr>
    <th>Nim</th> 
    <th>Nama</th> 
    <th>Prodi</th>
    <th>Gender</th> 
    <th>Aksi</th>
</tr>
<?php
while($user_data = mysqli_fetch_array($result)) 
{ 
    echo "<tr>";
    echo "<td>".$user_data['nim']."</td>"; 
    echo "<td>".$user_data['nama']."</td>"; 
    echo "<td>".$user_data['prodi']."</td>"; 
    echo "<td>".$user_data['jk']."</td>"; 
    echo "<td><a href='edit.php?nim=$user_data[nim]'>Edit</a> | <a href='delete.php?nim=$user_data[nim]'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>