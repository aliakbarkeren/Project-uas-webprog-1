<h2>Fomrmulir Edit Harga Barang</h2>
<hr>
<form action="update.php" method="POST">
<?php

include"koneksi.php";
$koneksiObj= new Koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
	die("Konesi Gagal : " . $koneksi->connect_error);
}

$qry= "select * from data_mahasiswa where nim= '" .
	$_GET["nim"]."'";
$data=$koneksi->query($qry);

if($data->num_rows <=0){
	echo "mas/mba datanya diisi seseuai prosedur ya...";
}else {
	while ($hasil =$data->fetch_assoc()) {
		global $nama;
		global $jurusan;
		$nama=$hasil["nama"];
		$jurusan= $hasil["jurusan"];
	}
}
?>

<table>
<tr>

    <td>NIM</td>
    <td>
    :<input type="text" name= "nim"readonly="true"
	value=<?php echo $_GET["nim"]; ?>></td>
</tr>
<tr>
    <td>NAMA</td>
    <td>
    :<input type="text" name="nama"
	value=<?php echo $nama; ?>></td>
</tr>
<tr>
    <td>JURUSAN</td>
    <td>: <input type ="text" name="jurusan"
	value=<?php echo $jurusan;?>></td>
</tr>
<tr>
    <td><input type="submit" value="Simpan"></td>
	
<tr>
</table>
</form>
<form action="main.php" method="get">
<input type="submit" name="sub" value="Batal">
</form>
