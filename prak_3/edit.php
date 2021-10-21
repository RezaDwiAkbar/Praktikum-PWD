<?php
// include database connection file 
include_once("konek.php");

// Check if form is submitted for user update, then redirect to homepage after update 
if(isset($_POST['update']))
{
$nim = $_POST['nim'];
$nama=$_POST['nama'];
$prodi=$_POST['prodi'];
$jk=$_POST['jk'];

// update user data
$result = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama',prodi='$prodi', jk='$jk' WHERE nim='$nim'");

// Redirect to homepage to display updated user in list 
header("Location: index.php");
}
?>

<?php
// Display selected user data based on id
// Getting id from url
$nim = $_GET['nim'];

// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim='$nim'");

while($user_data = mysqli_fetch_array($result))
{
$nim = $user_data['nim'];
$nama = $user_data['nama'];
$prodi = $user_data['prodi'];
$jk = $user_data['jk'];
}
?>
<html>
<head>
<title>Edit Data Mahasiswa</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="update_mahasiswa" method="post" action="edit.php">
<table border="0">
<tr>
<td>Nama</td>
<td><input type="text" name="nama" value="<?php echo $nama;?>"></td>
</tr>
<tr>
<td>Prodi</td>
<td><input type="text" name="prodi" value="<?php echo $prodi;?>"></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td><input type="text" name="jk" value="<?php echo $jk;?>"></td>
</tr>
<tr>
<td><input type="hidden" name="nim" value="<?php echo $_GET['nim'];?>"></td>
<td><input type="submit" name="update" value="Update"></td>
</tr>
</table>
</form>
</body>
</html>