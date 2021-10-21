<html>
<head>
<title>Tambah data mahasiswa</title>
</head>

<body>
<a href="index.php">Go to Home</a>
<br/><br/>

<form action="tambah.php" method="post" name="form1">
<table width="25%" border="0">
<tr>
<td>Nim</td>
<td><input type="text" name="nim"></td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama"></td>
</tr>
<tr>
<td>Prodi</td>
<td><input type="text" name="prodi"></td>
</tr>
<tr>
<tr>
<td>Gender (L/P)</td>
<td><input type="text" name="jk"></td>
</tr>
<td></td>
<td><input type="submit" name="Submit" value="Tambah"></td>
</tr>
</table>
</form>

<?php
// Check If form submitted, insert form data into users table. 
if(isset($_POST['Submit'])) {
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$prodi = $_POST['prodi'];
$jk = $_POST['jk'];

// include database connection file 
include_once("konek.php");

// Insert user data into table
 $result = mysqli_query($koneksi, "INSERT INTO mahasiswa(nim,nama,prodi,jk) VALUES('$nim','$nama', '$prodi','$jk')");

// Show message when user added
echo "Data berhasil disimpan. <a href='index.php'>View Users</a>";
}
?>
</body>
</html>